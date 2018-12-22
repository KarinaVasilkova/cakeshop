<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    include_once './layout/header.php';
}

if(!empty($_GET["action"])&&file_exists("./views/$_GET[action].php"))
{
	require_once("./views/$_GET[action].php");
}
else
{
	require_once('./views/main.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{   
    include_once './layout/footer.php';
}
?>