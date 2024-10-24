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
                Mestre
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo" id="flexRadioDefault2" value="jogador">
            <label class="form-check-label" for="flexRadioDefault2">
                Jogador
            </label>
        </div>
        <div class="">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="user">
                <label for="floatingPassword">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="user">
                <label for="floatingPassword">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password">
                <label for="floatingPassword">Senha</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="confirm_password">
                <label for="floatingPassword">Confirmar Senha</label>
            </div>
        </div>
    <input type="submit" value="Continuar" class="btn btn-outline-secondary">
</form>
</body>