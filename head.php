<?php
$debug = false;
$local = true;
function GetRoot() {//descobre raiz para criação de links dinamicos, retorna $root=>../pantheon
    // Iniciar a contagem
    $contagem = 0;
  
    // Índice do caractere atual
    $i = 0;
    $string = $_SERVER['REQUEST_URI'];
    $conjunto_caracteres = "pantheon";
    $caractere_alvo = "/";
    // Loop while
    while ($i < strlen($string) - 1) {
  
      // Verificar se o caractere atual está no conjunto de caracteres
      if (strpos($conjunto_caracteres, $string[$i]) !== false) {
  
        // Verificar se o próximo caractere é o caractere alvo
        if ($string[$i + 1] === $caractere_alvo) {
  
          // Incrementar a contagem
          $contagem++;
        }
      }
  
      // Avançar para o próximo caractere
      $i++;
    }
    $root = "";
    while($contagem>0){
        $root = $root."../";
        $contagem = $contagem-1;
    }
    $root = $root."pantheon";
    return $root;}
function Debug(){//mostra variaveis definidas
    /* $info = var_dump();
    echo "<script>console.log('senha:".$info."')</script>"; */
    // Use get_defined_vars() function
    $a = get_defined_vars();
    // Display the output
    print_r($a);
    // pegar numeros de ususarios registrados
    $user_n = $con->query("SELECT COUNT(nome) as user_n FROM usuarios;");
    $user_n = $user_n->fetch(PDO::FETCH_ASSOC);
    $_SESSION['user_n'] = $user_n;}
$root = GetRoot();
/* conexão com banco de dados */

require "conect.php";

/* inciar sessão */

require "sessao.php";

if(!$debug){//redireciona se o usuario não fez login e o debug não estiver ativado
    if (!isset($location)){
        if(!isset($_SESSION['nome'])){
            header('location:'.$root.'/index.php');
        }
    }}
else{//se o debug estiver ativado,imprime todas as variaveis definidas
    Debug();}
?>
<!-- icones -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<!-- bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<!-- ajax -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.js"></script>
<!-- css -->
<link rel="stylesheet" href="<?php echo $root;?>/pantheon.css">

