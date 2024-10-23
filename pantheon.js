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
function FichaSuccess(){
    window.alert('ficha criada com sucesso!');
    window.location.href='lista_fichas.php';
}
function PrintBack(){
    document.write('<button onclick="confirmar()" style="background-color:dark;border:none"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/U%2B2190.svg/25px-U%2B2190.svg.png"></button>')
}