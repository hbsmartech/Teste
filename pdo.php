<?php

$server="localhost";
$user="root";
$senha="";
$banco="teste";


$conectao= new PDO("mysql:dbname=".$banco.";host=".$server,$user,$senha);


//$conect=mysqli_connect($server,$user,$senha,$banco);


$select="SELECT *  FROM login WHERE Usuario='Claudia Dala'";

$chamar=$conectao->query($select);


foreach($chamar as $mostre){

    echo($mostre["Usuario"]);
}