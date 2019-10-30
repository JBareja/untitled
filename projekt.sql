DROP DATABASE IF EXISTS projekt;

CREATE DATABASE projekt;
USE projekt;

CREATE TABLE pracownicy (
    id_pracownika INT(5) auto_increment,
    imie VARCHAR(15) NOT NULL,
    nazwisko VARCHAR(20) NOT NULL,
    poczta VARCHAR(15) NOT NULL,
    adres VARCHAR(20) NOT NULL,
    kod_pocztowy int(5) default "00000" NOT NULL,
    telefon int(9) not null,
	email varchar(20) not null,
	login varchar(20) not null,
	haslo varchar(20) not null,
    PRIMARY KEY(id_pracownika))CHARSET=utf8;
    
    
    CREATE TABLE projekty (
    id_projektu INT(5) auto_increment,
    nazwa_projektu VARCHAR(15) NOT NULL,
    data_rozpoczecia_projektu date NOT NULL,
    data_ukonczenia_projektu date,
    id_tasku int(5) NOT NULL,
    PRIMARY KEY(id_projektu))CHARSET=utf8;
    
	
    CREATE TABLE zadania (
    id_zadania INT(5) auto_increment,
    nazwa_zadania VARCHAR(50) NOT NULL,
    data_rozpoczecia_zadania date NOT NULL,
    data_ukonczenia_zadania date,
	opis_zadania varchar(100) not null,
    id_kategorii int(5) NOT NULL,
    PRIMARY KEY(id_zadania))CHARSET=utf8;
    
	
	CREATE TABLE kategoria (
    id_kategorii int(5) auto_increment,
    nazwa_kategorii VARCHAR(15) NOT NULL,
    PRIMARY KEY(id_kategorii))CHARSET=utf8;
	
    
	
        INSERT INTO  pracownicy(id_pracownika,imie,nazwisko,poczta,adres,kod_pocztowy,telefon,email,login,haslo) VALUES 
    (1,"Kamil","Szczepanik","Siedlce","Piaskownica 10",08110,352186432,"kamiloskytripalosky@o2.pl","kamikadzinho","abc1"),
    (2,"Jacek","Kozak","Siedlce","Mordor 1",08110,398750928,"jacekmusisz@o2.pl","Jacek","abc2"),
	(3,"Seba","nwm","Warszawa","Zamiejska 7",08520,867346213,"emanokolano@o2.pl","Seba","abc3"),
	(4,"Wiking","ocb","Oslo","Kwiatowa 164",46321,824546775,"notaniiii@o2.pl","Wiking","abc4"),
	(5,"Wikariusz","Muchomor","Malbork","Piaskownica 17",12212,352123123,"gitopcja@o2.pl","Wikariusz","Abc5");
	
	
		INSERT INTO kategoria(id_kategorii,nazwa_kategorii) VALUES
	(1,"Projektowanie bazy"),
	(2,"Programowanie"),
	(3,"Design");
	
	
		INSERT INTO  zadania(id_zadania,nazwa_zadania,data_rozpoczecia_zadania,data_ukonczenia_zadania,opis_zadania,id_kategorii) VALUES 
    (1,"Strona internetowa","2008-07-12","2008-07-15","Zadanie polega na zrobieniu strony internetowej",2),
	(2,"Baza danych","2012-02-08","","Zadanie polega na zrobieniu bazy danych",1),
	(3,"Grafika","2015-11-27","2018-11-15","Zadanie polega na zaprojektowaniu grafiki na stronę główną",3),