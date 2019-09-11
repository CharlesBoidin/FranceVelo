<?php

function connect()
{
    try
    {
        $db = new PDO ('mysql:host=localhost;dbname=francevelo;charsert=utf8','root','');
        echo '111';
        return $db;
    }
    catch (Exception $e)
    {
        die('Erreur :'.$e->getMessage());
    }
}
?>

