/**
 *  POST FUNCIONADO
 * 
 * 
   let linkP = document.querySelector('#linkP');
   function productAll(events){
    console.log(events.target);
    let ajax = new XMLHttpRequest();
    let idLinkP ='id='+ document.querySelector('#linkP').id; // pegando dados do formulario
    ajax.open('POST', 'js/ControllerAjax.php?'+idLinkP); // Abrindo a requesição
    ajax.setRequestHeader('content-type','application/x-www-form-urlencoded'); // Cabeçalho da requisição ajax
        // Montando requisição
        ajax.onreadystatechange = function () {
            if (ajax.status === 200 && ajax.readyState === 4) {
 
                console.log(ajax.status);
                console.log(ajax.readyState);
                console.log(ajax.responseText);
                console.log(ajax.response)
                // let dados = JSON.parse( ajax.responseText);  
            //    res.innerHTML += "Nome : "+ dados.name+"<br>";
            //    res.innerHTML += "Idade: "+dados.idade+"<br>";
            //    res.innerHTML += "Cidade: "+dados.cidade+"<br>";
            }
 
        }
 
        ajax.send(idLinkP); // enviando requisição
   }
   linkP.addEventListener('click',productAll,false);
 */


 /***
  *              GET FUNCIONANDO
  * 
  * 
   let linkP = document.querySelector('#linkP');
   function productAll(events){
    console.log(events.target);
    let ajax = new XMLHttpRequest();
    let idLinkP ='id='+ document.querySelector('#linkP').id; // pegando dados do formulario
    ajax.open('GET', "js/ControllerAjax.php"); // Abrindo a requesição
    ajax.setRequestHeader('content-type','application/x-www-form-urlencoded'); // Cabeçalho da requisição ajax
        // Montando requisição
        ajax.onreadystatechange = function () {
            if (ajax.status === 200 && ajax.readyState === 4) {
 
                console.log(ajax.status);
                console.log(ajax.readyState);
                console.log(ajax.responseText);
                console.log(ajax.response)
                // let dados = JSON.parse( ajax.responseText);  
            //    res.innerHTML += "Nome : "+ dados.name+"<br>";
            //    res.innerHTML += "Idade: "+dados.idade+"<br>";
            //    res.innerHTML += "Cidade: "+dados.cidade+"<br>";
            }
 
        }
 
        ajax.send(idLinkP); // enviando requisição
   }
   linkP.addEventListener('click',productAll,false);
  *  */ 