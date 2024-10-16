<?php
include "../head.php";
$last_edit = date("d-m-y H:i:s");

    // Recupera os dados do formulário
    $nome = $_POST["nome"];
    $mestre = $_POST["mestre"];
    $campanha = $_POST["campanha"];
    $FOR = $_POST["FOR"];
    $RES = $_POST["RES"];
    $AG = $_POST["AG"];
    $HAB = $_POST["HAB"];
    $INT = $_POST["INT"];
    $PD = $_POST["PD"];
    $CO = $_POST["CO"];
    $CF = $_POST["CF"];
    $OM = $_POST["OM"];
    $OMMAX = $_POST["OMMAX"];
    $HP = $_POST["HP"];
    $HPMAX = $_POST["HPMAX"];
    $info = $_POST["info"];
    if(isset($_POST["id_ficha"])){
        $id_ficha = $_POST["id_ficha"];
        
        
        // Valida os dados (adicione validações conforme necessário)
        
    // Prepara a consulta SQL para atualizar a ficha
    $sql = "UPDATE fichas SET 
               nome = :nome,
               mestre = :mestre,
               campanha = :campanha,
               _FOR = :_FOR,
               RES = :RES,
               AG = :AG,
               HAB = :HAB,
               _INT = :_INT,
               PD = :PD,
               CO = :CO,
               CF = :CF,
               OM = :OM,
               OMMAX = :OMMAX,
               HP = :HP,
               HPMAX = :HPMAX,
               info = :info,
               LAST_EDIT = :LAST_EDIT
           WHERE id_ficha = :id_ficha";

// Prepara a instrução preparada
$stmt = $con->prepare($sql);

    // Vincula os valores aos parâmetros
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":mestre", $mestre);
    $stmt->bindParam(":campanha", $campanha);
    $stmt->bindParam(":_FOR", $FOR);
    $stmt->bindParam(":RES", $RES);
    $stmt->bindParam(":AG", $AG);
    $stmt->bindParam(":HAB", $HAB);
    $stmt->bindParam(":_INT", $INT);
    $stmt->bindParam(":PD", $PD);
    $stmt->bindParam(":CO", $CO);
    $stmt->bindParam(":CF", $CF);
    $stmt->bindParam(":OM", $OM);
    $stmt->bindParam(":OMMAX", $OMMAX);
    $stmt->bindParam(":HP", $HP);
    $stmt->bindParam(":HPMAX", $HPMAX);
    $stmt->bindParam(":info", $info);
    $stmt->bindParam(":LAST_EDIT", $last_edit);
    $stmt->bindParam(":id_ficha", $id_ficha);
    
    // Executa a consulta
    if ($stmt->execute()) {
        // A ficha foi atualizada com sucesso
        echo "Ficha atualizada com sucesso!";
    } else {
        // Ocorreu um erro durante a atualização
        echo "Erro ao atualizar a ficha.";
    }
}
else {
    // Caso não haja uma ficha cadastrada, cria uma nova

    // Valida os dados do formulário (se necessário)

    // Prepara a consulta SQL para inserir uma nova ficha
    $sql = "INSERT INTO fichas (nome, mestre, campanha, _FOR, RES, AG, HAB, _INT, PD, CO, CF, OM, OMMAX, HP, HPMAX, info, LAST_EDIT) 
            VALUES (:nome, :mestre, :campanha, :_FOR, :RES, :AG, :HAB, :_INT, :PD, :CO, :CF, :OM, :OMMAX, :HP, :HPMAX, :info, :LAST_EDIT)";

    // Prepara a instrução preparada
    $stmt = $con->prepare($sql);

    // Vincula os valores aos parâmetros
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":mestre", $mestre);
    $stmt->bindParam(":campanha", $campanha);
    $stmt->bindParam(":_FOR", $FOR);
    $stmt->bindParam(":RES", $RES);
    $stmt->bindParam(":AG", $AG);
    $stmt->bindParam(":HAB", $HAB);
    $stmt->bindParam(":_INT", $INT);
    $stmt->bindParam(":PD", $PD);
    $stmt->bindParam(":CO", $CO);
    $stmt->bindParam(":CF", $CF);
    $stmt->bindParam(":OM", $OM);
    $stmt->bindParam(":OMMAX", $OMMAX);
    $stmt->bindParam(":HP", $HP);
    $stmt->bindParam(":HPMAX", $HPMAX);
    $stmt->bindParam(":info", $info);
    $stmt->bindParam(":LAST_EDIT", $last_edit);

    // Executa a consulta
    if ($stmt->execute()) {
        // A ficha foi criada com sucesso
        $id_ficha = $con->lastInsertId();
        echo $id_ficha;
        echo $id_usuario;
        $id_usuario = $_SESSION['id_user'];
        $sql = "INSERT INTO ficha_usuarios(id_ficha, id_usuario) VALUES (:id_ficha, :id_usuario)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":id_ficha", $id_ficha);
        $stmt->bindParam(":id_usuario", $id_usuario);
        if($stmt->execute()){
            echo "<script src='sucessoficha.js'></script>";
        }
        
    } else {
        // Ocorreu um erro durante a criação
        echo "Erro ao criar a ficha.";
    }
}

?>