<?php 

/*Her er de oplysinger der skal til for at der forbindelse til databasen*/
/*Oplysningerne er pakket ind i variabler*/
$host = "localhost";
$dbName = "grimmdb";
$dbUsername = "root";
$dbPassword = "";

/*Her opretter jeg forbindelse til min database ved hjælp af klassen PDO*/
/*PDO står for PHP Data Obejkt*/
try{
$DBH = new PDO("mysql:dbname=$dbName;host=$host;charset=utf8", $dbUsername, $dbPassword, /*Det næste her gør at æ, ø og å bliver vist i min artikel*/array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
/*Hvis der sker en fejl bliver den udskrevet her*/
/* -> betyder at jeg vil anvende en metode der høre til DBH*/
$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo"Noget gik galt: <br>";
    echo $e->getMessage( );
}
?>