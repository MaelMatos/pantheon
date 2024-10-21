<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fichas</title>
</head>
<body>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Campanha</th>
        <th scope="col">Ultima vez editado</th>
      </tr>
    </thead>
    <tbody>
  <?php
    require "../cabecalho.php";
    $id_user = $_SESSION["id_user"];
    $stmt = $con->prepare("SELECT id_ficha FROM ficha_usuario WHERE id_usuario = :id_user");
    $stmt->bindParam(':id_user', $id_user);//bug: retorna o erro "Warning: Array to string conversion"
    $stmt->execute();
    $fichas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($fichas as $ficha){
      $ficha = $ficha['id_ficha'];
      $ficha = $con->query("select * from fichas where id_ficha=$ficha")->fetch(PDO::FETCH_ASSOC);
      echo "<tr><a href='".$root."/ficha/fichapronta.php?id_ficha=".$ficha['id_ficha']."'>";
      echo "<td>".$ficha['nome']."</td>";
      echo "<td>".$ficha['campanha']."</td>";
      echo "<td>".$ficha['LAST_EDIT']."</td>";
      echo "</a></tr>";
    }
  ?>
    </tbody>
  </table>
    <button class="button" style="text-align: center;display: flex;justify-content: center;"><a href="fichanova.php" class="button">Adicionar nova ficha</a></button>
</body>
</html>