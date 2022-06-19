<?php
session_start();
session_destroy();

header('Location: 首頁未登入.php');
?>