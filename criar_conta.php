<head>
<?php
$location = "";
require "head.php";
?>
</head>
<body>
<?php
if($local){
    $action = "criar_conta3.php"
    $hora = date("d-m-y H:i:s");
    $code = 0000
    $_SESSION['email_verification_code'] = $code;
}
else{
    $action = "criar_conta2.php";
}?>
    <form method="post" action="<?php echo $action;?>" class="centered">
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
                <input type="email" class="form-control" id="floatingPassword" name="email">
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
        <?php
        if($local){
            echo "<input type='hidden' name='hora' value='$hora'>";
            echo "<input type='hidden' name='codigo_email' value='$code'>";
        }
        ?>
    <input type="submit" value="Continuar" class="button">
</form>
</body>