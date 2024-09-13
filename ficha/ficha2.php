<?php
$id_ficha = $_GET['id_ficha'];
function tecnicas(){
$tecnicas = $con->query("select * from tecnicas")->fetchAll(PDO::FETCH_ASSOC);
    foreach($tecnicas as $tecnica){//para cada valor($tecnica) dentro do array($tecnicas)
        echo "<select";
    }
}
?>
<script>
i = 0;
function tecnica(i){
    i =i+1;
    document.write('<?php tecnica(); ?>');
    document.write('<?php $i ='+ i +' ; ?>');
    document.write('<button onclick="tecnica(i)">+</button>');
}
</script>
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
        <button onclick="tecnica(i)">+</button>
    </div>

</div>