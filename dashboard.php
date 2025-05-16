<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
<p>AKHIRNYA BISA LOGIN YAK!!!</p>
<a href="logout.php">Logout</a>