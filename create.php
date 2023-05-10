<?php

$nome = 'Ziggy';
$idade = 35;
$email = 'ziggy@bowie.com';
try {
  
$pdo = new PDO('mysql:host=localhost; dbname=db_aula', 'root', 'ifsp@123');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare('INSERT INTO Pessoas (nome_pessoa,idade_pessoa,email_pessoa) VALUES(:nome. :idade, :email)');
    $stmt->execute(array(
    "nome" => $nome,
    "idade"=> $idade,
    "email" => $email));
    echo "Usuario criado com sucesso";
}catch(PDOException $e){
    echo var_dump($e->getMessage());}
    finally{
      echo "<br><br>";
      echo "MC Poze do rodo";
    }
?>