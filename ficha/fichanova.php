<?php
require "../head.php";
?>

<style>
    h2{text-align:center}
</style>
<form action="salvaficha.php" method="post">
<!-- informações adicionais -->
    <div class="input-group">
    <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="nome">
            <label for="floatingInput">nome do personagem</label>
        </div>
    <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="mestre">
            <label for="floatingInput">mestre</label>
        </div>
    <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="campanha">
            <label for="floatingInput">campanha</label>
        </div>
    </div>
   <!--  atributos 1 -->
    <div class="input-group">
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" name="FOR">
            <label for="floatingInput">força</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" name="RES">
            <label for="floatingInput">resistencia</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" name="AG">
            <label for="floatingInput">agilidade</label>
        </div>
    </div>
    <!-- atributos 2 -->
<div class="input-group">
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" name="HAB">
            <label for="floatingInput">habilidade</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" name="INT">
            <label for="floatingInput">inteligencia</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" name="PD">
            <label for="floatingInput">poder</label>
        </div>
    </div>
    <!-- atributos 3 -->
<div class="input-group">
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" name="CO">
            <label for="floatingInput">Caminho Omnergico</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" name="CF">
            <label for="floatingInput">Caminho Fisico</label>
        </div>
    </div>
    <!-- atributos secundarios -->
<div class="input-group">
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" name="CA">
            <label for="floatingInput">Classe de Armadura</label>
        </div>
        <div class="form-floating mb-3">
            <div class="form-control" id="floatingInput">
                <input type="number" name="OM">
                /
                <input type="number" name="OMMAX">
            </div>
            <label for="floatingInput">Omnergia</label>
        </div>
        <div class="form-floating mb-3">
            <div class="form-control" id="floatingInput">
                <input type="number" name="HP">
                /
                <input type="number" name="OMMAX">
            </div>
            <label for="floatingInput">Vida</label>
        </div>
</div>
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
        foreach($tecnicas as $tecnica){//para cada valor($tecnica) dentro do array($tecnicas)
            $tecnica = $con->query("select * where id_tecnica='$tecnica' from tecnicas")->fetch(PDO::FETCH_ASSOC);
            echo "<a href='".$tecnica['link']."'><ul>".$tecnica['nome']."</ul></a>";
        }
        ?>
        </ul>
<?php
include "add_tecnica.php";
?>
    </div>

</div>
<textarea name="info"></textarea>
<input type="hidden" name="id_ficha">
<div style="text-align: center;}">

    <input type="submit" value="salvar">
</div>




</form>