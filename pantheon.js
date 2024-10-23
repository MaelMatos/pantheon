function RegisterSuccess(){
    window.alert('cadastrado realizado com sucesso!');
    window.location.href='index.php';}
function LoginError(){
    window.alert('usuario e/ou senha incorretos!');
    window.location.href='index.php';}
function confirmar(){
    let i = confirm("se voltar, todos os dados não salvos serão perdidos, deseja continuar?");
    if(i){
        window.history.back();
    }}