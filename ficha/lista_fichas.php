<?php
require "../cabecalho.php";
$stmt = $con->prepare("SELECT id_ficha FROM ficha_usuario WHERE id_usuario = :id_user");
$stmt->bindParam(':id_user', $_SESSION['id_user']);
$stmt->execute();
$fichas = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($fichas as $ficha){
    $ficha = $con->query("select * from fichas where id_ficha=$ficha")->fetch(PDO::FETCH_ASSOC);
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Campanha</th>
      <th scope="col">Ultima vez editado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  <?php
  echo "<a href='".$root."/pantheon/ficha/ficha.php?id_ficha=".$ficha['id_ficha']."'><tr>";

  echo "</tr></a>";
}
?>
  </tbody>
</table>