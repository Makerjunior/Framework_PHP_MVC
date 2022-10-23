((window, document) => {
    'use strict'


    let form = document.querySelector('form');
    let res = document.querySelector('#Resultado');
    function buscar(event) {
        event.preventDefault();
          res.innerHTML="";
        let ajax = new XMLHttpRequest();
       let dadosForm ='nome='+ document.querySelector('#nome').value; // pegando dados do formulario
        ajax.open('GET', 'C:\wamp64\www\MVC\index.php'); // Abrindo a requesição
        ajax.setRequestHeader('content-type','application/x-www-form-urlencoded'); // Cabeçalho da requisição ajax
       
        // Montando requisição
        ajax.onreadystatechange = function () {
            if (ajax.status === 200 && ajax.readyState === 4) {

                console.log(ajax.status);
                console.log(ajax.readyState);
                console.log(ajax.responseText);
                // let dados = JSON.parse( ajax.responseText);  
//res.innerHTML += "Nome : "+ dados.name+"<br>";

            }

        }

        ajax.send(dadosForm); // enviando requisição
    }



    form.addEventListener('submit', buscar, false);


})(window, document);




// /**
//   * Função para criar um objeto XMLHTTPRequest
//   */
//  function CriaRequest() {
//     try{
//         request = new XMLHttpRequest();
//     }catch (IEAtual){

//         try{
//             request = new ActiveXObject("Msxml2.XMLHTTP");
//         }catch(IEAntigo){

//             try{
//                 request = new ActiveXObject("Microsoft.XMLHTTP");
//             }catch(falha){
//                 request = false;
//             }
//         }
//     }

//     if (!request)
//         alert("Seu Navegador não suporta Ajax!");
//     else
//         return request;
// }

// /**
//  * Função para enviar os dados
//  */
// function getDados() {

//     // Declaração de Variáveis
//     var nome   = document.getElementById("nome").value;
//     var result = document.getElementById("Resultado");
//     var xmlreq = CriaRequest();



//     // Iniciar uma requisição
//     xmlreq.open("GET", "C:\wamp64\www\MVC\index.php?nome=" + nome, true);

//     // Atribui uma função para ser executada sempre que houver uma mudança de ado
//     xmlreq.onreadystatechange = function(){

//         // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
//         if (xmlreq.readyState == 4) {

//             // Verifica se o arquivo foi encontrado com sucesso
//             if (xmlreq.status == 200) {
//                 result.innerHTML = xmlreq.responseText;
//             }else{
//                 result.innerHTML = "Erro: " + xmlreq.statusText;
//             }
//         }
//     };
//     xmlreq.send(null);
// }