<?php

session_start();

if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
{
    header('Location: strona_glowna.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Strona logowania</title>
    <meta charset="UTF-8">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <link href="styles.css" rel="stylesheet" type="text/css">

</head>
<body>

    <div class="container">

            <div class="row d-flex justify-content-center" style="margin-top:15%">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				
                    <form action="logowanie.php" method="POST" role="form">
                        <fieldset>
                            <h2>Zaloguj się</h2>
                            <hr class="colorgraph">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control input-lg" placeholder="Adres email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="haslo" class="form-control input-lg" placeholder="Hasło">
                            <?php
                                if(isset($_SESSION['blad']))	
                                {
                                    echo '<div style="color:red">'.$_SESSION['blad'].'</div>';
                                }
                            ?>
                            </div>
                            <span class="button-checkbox">
                            <button type="button" class="btn" data-color="info">Zapamiętaj mnie</button>
                            <input type="checkbox" name="zapamietaj_mnie" checked="checked" class="hidden">
                            <a href="" class="btn btn-link pull-right">Zapomniałeś hasła?</a>
                        </span>
                            <hr class="colorgraph">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Zaloguj się">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <a href="rejestracja.php" class="btn btn-lg btn-primary btn-block">Zarejestruj się</a>
                                </div>
                            </div>
							
                        </fieldset>
                    </form>
                </div>
            </div>
          </div>
  </div>
</body>
</html>