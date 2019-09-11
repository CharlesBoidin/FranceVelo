<?php

if(isset($_POST["LastNameUser"])
{
    $FirstNameUser = htmlspecialchars ($_POST["LastNameUser"],ENT_QUOTES);
}
else{
    $FirstNameUser =  null;
}

$FirstNameUser = htmlspecialchars ($_POST["LastNameUser"],ENT_QUOTES); $NameUser= htmlspecialchars ($_POST["LastNameUser"],ENT_QUOTES);
$MailUser = htmlspecialchars ($_POST["MailUser"],ENT_QUOTES); $PassWordUser= htmlspecialchars ($_POST["PassWordUser"],ENT_QUOTES);
$AdressUser= htmlspecialchars ($_POST["AdressUser"],ENT_QUOTES); $CpUser=htmlspecialchars ($_POST["CpUser"],ENT_QUOTES); $CityUser= htmlspecialchars ($_POST["CityUser"],ENT_QUOTES);
$PhoneUser= htmlspecialchars ($_POST["PhoneUser"],ENT_QUOTES); $Siret=htmlspecialchars ($_POST["Siret"],ENT_QUOTES);
$UserCB= htmlspecialchars ($_POST["UserCB"],ENT_QUOTES); $NumberCB=htmlspecialchars ($_POST["NumberCB"],ENT_QUOTES); $CryptoCB= htmlspecialchars ($_POST["CryptoCB"],ENT_QUOTES);
$ValidityCB= htmlspecialchars ($_POST["YearCB"],ENT_QUOTES)."/".htmlspecialchars ($_POST["MonthCB"],ENT_QUOTES);

echo $ValidityCB;

?>