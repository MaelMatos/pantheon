<?php
$location = "";
require "head.php";
?>
<body>
    
    <form method="post" action="criar_conta2.php" class="centered">
        <label>qual o tipo de conta será criada?</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo" id="flexRadioDefault1" value="mestre">
            <label class="form-check-label" for="flexRadioDefault1">
                mestre
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo" id="flexRadioDefault2" value="jogador">
            <label class="form-check-label" for="flexRadioDefault2">
                jogador
            </label>
        </div>
        <div class="input-gruop">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" placeholder="usuario" name="user">
                <label for="floatingPassword">usuario</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="senha" name="pw">
            <label for="floatingPassword">senha</label>
        </div>
    </div>
    <input type="submit" value="continuar" class="btn btn-outline-secondary">
</form>
</body>