<?php

$conn = new PDO('mysql:host=localhost;dbname=db_aula', 'developer','ifsp@123');
$conn->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

//$email = $_POST['email'];
$email = 'mutantedofunke@zikadobaile';
$stmt = $conn->prepare("SELECT * FROM pessoas WHERE email_pessoa = :email");
$stmt->execute(array('email'=>$email));
while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo json_encode($linha);
}




?>