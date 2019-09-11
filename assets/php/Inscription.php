<?php

require 'Connection.php';
$db = connect();

if(isset($_POST["FirstNameUser"]))
{
    $FirstNameUser = htmlspecialchars ($_POST["FirstNameUser"],ENT_QUOTES);
}
else{
    $FirstNameUser =  null;
}

if(isset($_POST["LastNameUser"]))
{
    $LastNameUser = htmlspecialchars ($_POST["LastNameUser"],ENT_QUOTES);
}
else{
    $LastNameUser =  null;
}

if(isset($_POST["MailUser"]))
{
    $MailUser = htmlspecialchars ($_POST["MailUser"],ENT_QUOTES);
}
else{
    $MailUser =  null;
}

if(isset($_POST["PassWordUser"]))
{
    $PassWordUser = htmlspecialchars ($_POST["PassWordUser"],ENT_QUOTES);
}
else{
    $PassWordUser =  null;
}

if(isset($_POST["AdressUser"]))
{
    $AdressUser = htmlspecialchars ($_POST["AdressUser"],ENT_QUOTES);
}
else{
    $AdressUser =  null;
}

if(isset($_POST["CpUser"]))
{
    $CpUser = htmlspecialchars ($_POST["CpUser"],ENT_QUOTES);
}
else{
    $CpUser =  null;
}

if(isset($_POST["CityUser"]))
{
    $CityUser = htmlspecialchars ($_POST["CityUser"],ENT_QUOTES);
}
else{
    $CityUser =  null;
}

if(isset($_POST["PhoneUser"]))
{
    $PhoneUser = htmlspecialchars ($_POST["PhoneUser"],ENT_QUOTES);
}
else{
    $PhoneUser =  null;
}

if(isset($_POST["Siret"])){
    $Siret = htmlspecialchars ($_POST["Siret"],ENT_QUOTES);
}
else{
    $Siret =  null;
}

if(isset($_POST["UserCB"])){
    $UserCB = htmlspecialchars ($_POST["UserCB"],ENT_QUOTES);
}
else{
    $UserCB =  null;
}

if(isset($_POST["NumberCB"])){
    $NumberCB = htmlspecialchars ($_POST["NumberCB"],ENT_QUOTES);
}
else{
    $NumberCB =  null;
}

if(isset($_POST["CryptoCB"])){
    $CryptoCB = htmlspecialchars ($_POST["CryptoCB"],ENT_QUOTES);
}
else{
    $CryptoCB =  null;
}

if(isset($_POST["YearCB"]) && isset($_POST["MonthCB"] )){
    $ValidityCB= htmlspecialchars ($_POST["YearCB"],ENT_QUOTES)."/".htmlspecialchars ($_POST["MonthCB"],ENT_QUOTES);
}
else{
    $ValidityCB =  null;
}
$CatUser = 1;
$Entreprise = 1;
$AdresseUser = 1;

try {
    // Préparation de la requete
    $req = $db->prepare ("INSERT INTO user ( Mail, Password, Name, LastName,Tel, Category_User_ID_Category,Entreprise_Siret_Entreprise,Adresse_Adresse_ID) 
    VALUES (:Mail,:Password,:FirstName,:Lastname,:Tel,:CatUser,:Entreprise,:AdresseUser) ");

    // changemnts des paramètre et controle des champs
    $req->bindParam(":Mail",$MailUser,PDO::PARAM_STR);
    $req->bindParam(":Password",$PassWordUser,PDO::PARAM_STR);
    $req->bindParam(":FirstName",$FirstNameUser,PDO::PARAM_STR);
    $req->bindParam(":Lastname",$LastNameUser,PDO::PARAM_STR);
    $req->bindParam(":Tel",$PhoneUser,PDO::PARAM_STR);
    $req->bindParam(":CatUser",$CatUser,PDO::PARAM_INT);
    $req->bindParam(":Entreprise",$Entreprise,PDO::PARAM_INT);
    $req->bindParam(":AdresseUser",$AdresseUser,PDO::PARAM_INT);


    // $req = $db->prepare ("INSERT INTO velo (Type_Velo, Description) 
    //  VALUES (:TypeVelo,:Description)");

    // $req->bindParam(":TypeVelo",$MailUser,PDO::PARAM_STR);
    // $req->bindParam(":Description",$PassWordUser,PDO::PARAM_STR);

    // // execution de la requette
    // $req->execute();
    // header('Location: comfirm.php');
} 
catch(Exception $e) {
    echo $e->getMessage();
}

?>