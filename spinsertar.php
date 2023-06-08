<?php
$id = $_POST['id'];
$nom = $_POST['nom'];
$ape = $_POST['ape'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$cnx = mysqli_connect("localhost", "root", "", "dbprueba");
$sql = "INSERT INTO talumno(id,nom, ape, n1, n2, n3) VALUES('$id','$nom', '$ape', '$n1', '$n2', '$n3')";
$rta = mysqli_query($cnx, $sql);
header("Location: index.php");
?>