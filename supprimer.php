<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: authentifier.php");
    exit();
}

include 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM stagiaires WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    header("Location: espaceprivee.php");
} else {
    echo "Erreur: " . $conn->error;
}
?>
