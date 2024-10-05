<?php
require "../cabecalho.php";
$fichas = $con->query("select id_fichas from ficha_usuario where id_usuario=$_SESSION['id_user']")->fetchAll(PDO::FETCH_ASSOC);
foreach($fichas as $ficha){
    $ficha = $con->query("select * from fichas where id_ficha=$ficha")->fetch(PDO::FETCH_ASSOC);

}
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>