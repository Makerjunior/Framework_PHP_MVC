((window,document)=>{
    'use strict'

    
    // Pagina de Progutos 
   let linkP = document.querySelector('#linkP');
   let main = document.querySelector('#main');
   

   function productAll(events){
    let ajax = new XMLHttpRequest();
    let idLinkP ='id='+ document.querySelector('#linkP').id; // pegando dados do formulario

    ajax.open('POST', 'reqAjaxALL/'+idLinkP); // Abrindo a requesição
    ajax.setRequestHeader('content-type','application/x-www-form-urlencoded'); // Cabeçalho da requisição ajax

        // Montando requisição
        ajax.onreadystatechange = function () {
            if (ajax.status === 200 && ajax.readyState === 4) {
             
                // console.log(ajax.status);
                // console.log(ajax.readyState);
                // console.log(ajax.responseText);
                // console.log(ajax.response)
                let dados = ajax.responseText;
              
                
                
                main.innerHTML=dados;
            }
 
        }
 
        ajax.send(idLinkP); // enviando requisição


   }


   linkP.addEventListener('click',productAll,false);
})(window,document);