//CRIACAO DE VARIAVEL E CAPTAÇÃO DO DADO DIGITADO NA PESQUISA
var search = document.getElementById('pesquisar');

//ADICIONA EVENTO CASO O USUARIO DIGITE ENTER
search.addEventListener("keydown", function(event){
    if(event.key == "Enter"){
        searchData();
    }
});

//FUNÇÃO QUE ACIONA COMANDO SQL PARA PESQUISA DO USUARIO
function searchData(){
    window.location = 'sistema.php?search='+search.value;
}