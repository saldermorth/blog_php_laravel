<?php
 require_once 'login.php';

 try
 {
 $pdo = new PDO($attr, $user, $pass, $opts);
 }
 catch (PDOException $e)
 {
 throw new PDOException($e->getMessage(), (int)$e->getCode());
 }


$query = "SELECT * FROM users";
$result = $pdo->query($query);

// while ($row = $result->fetch())
//  {
//  echo 'name:' . htmlspecialchars($row['name']) . "<br>";
//  echo 'id:' . htmlspecialchars($row['id']) . "<br>";
//  }

// echo("<h1>_________________________________________________________________</h1>");

 while ($row = $result->fetch(PDO::FETCH_BOTH)) // Style of fetch
{
echo("<h1>_________________________________________________________________</h1>");

 echo 'User: ' . htmlspecialchars($row['name']) . "<br>";
  }
?>
