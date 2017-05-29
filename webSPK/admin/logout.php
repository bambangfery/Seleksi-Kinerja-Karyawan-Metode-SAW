<?php
session_start();

unset($_SESSION['username']);
session_destroy();
?>
<script>document.location.href="../index.php"
</script>
<?
include "index.php";
?>