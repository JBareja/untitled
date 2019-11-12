<?php
session_start();

if((!isset($_POST['email'])) || (!isset($_POST['haslo'])))
{
    header('Location: index.php');
    exit();
}

require_once 'connect.php';
try {
    $pdo = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database . ';port=' . $port, $username, $password);
    
    
    
    $logowanie = $pdo->prepare('SELECT * FROM pracownicy WHERE email=:email');
    
        $logowanie->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    
    $logowanie->execute();
	    $rows = $logowanie->fetchAll();
		
    if($rows>1)
	{
	$_SESSION['blad']="Niepoprawny email i/lub hasło";
            header('Location: index.php');	
	}
    
    foreach($logowanie as $row)
    {
        if($row['haslo']==$_POST['haslo'])
        {
            
            $_SESSION['zalogowany'] = true;
            
            header('Location: strona_glowna.php');
            
        }
        else
        {
            $_SESSION['blad']="Niepoprawny email i/lub hasło";
            header('Location: index.php');
        }
        
    }
    
    $logowanie->closeCursor();
    }
catch (PDOException $e) {
            echo 'Połączenie nie mogło zostać utworzone.<br />'. $e->getMessage();
        }
?>