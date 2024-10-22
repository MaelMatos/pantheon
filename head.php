<?php
/*--------- Definição de funções ---------*/
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
function Debug($con){//mostra variaveis definidas
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
function ConnectDB($local) {//connecta no banco de dados
    if($local){
            $host = "localhost:3306";
            $database_name = "pantheon";
            $userr = "root";
            $password = "";}
    else{
            $host = "sql204.infinityfree.com:3306";
            $database_name = "if0_36745921_pantheon";   
            $userr = "if0_36745921";
            $password = "w3OiSfo4i9Mx7";}
    try{
            $con = new PDO("mysql:host=$host;dbname=$database_name","$userr","$password");
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo '<script>console.log("conexão bem sucedida");</script>';}
            catch(PDOException $con_error) {
            echo '<script>console.log("conexão falhou: ' . $con_error->getMessage() . '");</script>';}
    return $con;}
function StartSession(){//maneira correta de iniciar sessão
    if(!isset($_SESSION)){
        session_start();
        echo '<script>console.log("iniciando sessão");</script>';
    }else{echo '<script>console.log("sessão já iniciada");</script>';}}

/*--------- Configurações do sistema ---------*/
$debug = true;
$local = true;
/*--------- Inicialização do sistema ---------*/
$root = GetRoot();
$con = ConnectDB($local);
StartSession();
if(!$debug){//redireciona se o usuario não fez login e o debug não estiver ativado
    if (!isset($location)){
        if(!isset($_SESSION['nome'])){
            header('location:'.$root.'/index.php');
        }
    }}
else{//se o debug estiver ativado,imprime todas as variaveis definidas
    Debug($con);}
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

