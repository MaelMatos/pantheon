<?php
$id_ficha = $_GET['id_ficha'];
?>
<div style="display:flex;width:100%;">
    <div style="width:50%;">
    <h2>inventario</h2>
    <ul>
        <?php
        foreach($itens as $item){//para cada valor($item) dentro do array($itens)
            $item = $con->query("select * where id_item='$item' from itens")->fetch(PDO::FETCH_ASSOC);
            echo "<a href='".$item['link']."'><ul>".$item['nome']."</ul></a>";
        }
        ?>
        </ul>
    </div>

    <div style="width:50%;">
    <h2>técnicas</h2>
    <ul>
        <?php
/*         foreach($tecnicas as $tecnica){//para cada valor($tecnica) dentro do array($tecnicas)
            $tecnica = $con->query("select * where id_tecnica='$tecnica' from tecnicas")->fetch(PDO::FETCH_ASSOC);
            echo "<a href='".$tecnica['link']."'><ul>".$tecnica['nome']."</ul></a>";
        } */
        ?>
        </ul>
<?php
/* include "add_tecnica.php"; */
?>
    </div>

</div>