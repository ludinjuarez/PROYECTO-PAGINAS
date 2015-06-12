<?php
session_start();
unset($_SESSION['Usuario']);
header("Location: ../tienda.php");
?>