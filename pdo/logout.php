<?php
session_start();
session_destroy();
header("Location: article-list.php");
?>