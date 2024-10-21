<div style="display:flex;width:100%;">
    <div style="width:50%;">
    <h2>inventario</h2>
    <ul>
        <?php
          foreach ($itens as $item) {
            $itemData = $con->query("SELECT * FROM itens WHERE id_item='" . $item['id_item'] . "'")->fetch(PDO::FETCH_ASSOC);
            echo "<a href='" . $itemData['link'] . "'><li>" . $itemData['nome'] . "</li></a>";
        }
        ?>
        </ul>
    </div>

    <div style="width:50%;">
    <h2>técnicas</h2>
    <ul>
        <?php
        foreach ($tecnicas as $tecnica) {
            $tecnicaData = $con->query("SELECT * FROM tecnicas WHERE id_tecnica='" . $tecnica['id_tecnica'] . "'")->fetch(PDO::FETCH_ASSOC);
            echo "<a href='" . $tecnicaData['link'] . "'><li>" . $tecnicaData['nome'] . "</li></a>";
        }
        ?>
        </ul>
<?php
/* include "add_tecnica.php"; */
?>
    </div>

</div>