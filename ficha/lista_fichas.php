<?php
require "../cabecalho.php";
$stmt = $con->prepare("SELECT id_ficha FROM ficha_usuario WHERE id_usuario = :id_user");
$stmt->bindParam(':id_user', $_SESSION['id_user']);
$stmt->execute();
$fichas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fichas</title>
</head>
<body>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Campanha</th>
        <th scope="col">Ultima vez editado</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach($fichas as $ficha){
      $ficha = $con->query("select * from fichas where id_ficha=$ficha")->fetch(PDO::FETCH_ASSOC);
      echo "<a href='".$root."/pantheon/ficha/ficha.php?id_ficha=".$ficha['id_ficha']."'><tr>";
      echo "<td>".$ficha['nome']."</td>";
      echo "<td>".$ficha['campanha']."</td>";
      echo "<td>".$ficha['LAST_EDIT']."</td>";
      echo "</tr></a>";
  }
  ?>
    </tbody>
  </table>
    <button class="button" style="text-align: center;display: flex;justify-content: center;"><a href="ficha.php" class="button">Adicionar nova ficha</a></button>
</body>
</html>