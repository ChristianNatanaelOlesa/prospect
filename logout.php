<?php
session_start();
session_destroy();
header('Location: /prospect/index.php');
?>