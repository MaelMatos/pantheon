<?php
if($tecnicas2){
    echo "<label>adicionar tecnica</label><select name='tecnica_aprendida'>";
    foreach($tecnicas2 as $tecnica){
        echo "<option>$tecnica</option>";
    }
    echo "</select>";
}
?>
