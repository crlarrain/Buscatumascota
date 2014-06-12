<?php
session_start();
$_SESSION['users']['id']='larra';
include('functions/main.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="utf-8">
<title>Busca tu Mascota</title>

<!--Hoja de estilo Principal-->
<link type="text/css" href="css/style.css" rel="stylesheet"  />

<!-- Jquery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!--Funciones js-->
<script type="text/javascript" src="js/index.js"></script>

<!-- funciones jquery-->

</head>
<?php echo 'hola'?>
<body>
<div class="header">
<?php get_menu();?>
</div>