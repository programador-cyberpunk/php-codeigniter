<?php

$pdo = new PDO('mysql:host=localhost; dbname=db_aula,"root","ifsp@123"');

$pdo->setAttribute(PDO::ATTR_ERRMODE,ERRMODE_EXCEPTION);

$stmt = $pdo->prepare('DELETE FROM pessoas WHERE id_pessoa = :id');

$stmt->execute(array("id" => $id));
?>