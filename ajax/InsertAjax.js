((window,document)=>{
      'use strict'

      let linkA = document.querySelector('#linkA');
      let mainP = document.querySelector('#main');
    
      function AddProduct(event){
            console.log(event.target.id + mainP)
            mainP.innerHTML="<h2 class='text-center m-3'>Insira o produto <h2>";
                             
            let form = document.createElement('form');
            form.setAttribute('id','formCreat');
            form.setAttribute('name','formCreat');
            form.setAttribute('method','POST');
            form.setAttribute('action','produtos_create');
            form.setAttribute('class','mt-3 text-center');


            let nome = document.createElement('input');
            nome.setAttribute('type','text');
            nome.setAttribute('name','name');
            nome.setAttribute('id','name');
            nome.setAttribute('placeholder','Nome :');
            nome.setAttribute('class','m-2');
 
            let preco = document.createElement('input');
            preco.setAttribute('type','text');
            preco.setAttribute('id','price');
            preco.setAttribute('name','price');
            preco.setAttribute('placeholder','Preço :');
            preco.setAttribute('class','m-2');
            let br = document.createElement('br');
            let b = document.createElement('br');


            let submit = document.createElement('input');
            submit.setAttribute('type','submit');
            submit.setAttribute('value','Cadastrar');
            submit.setAttribute('class','m-2');


/*
            let linkP = document.querySelector('#linkP');

 */           
            function addprodutos(events){
             console.log(events.target);
            //  events.preventDefault();

             let ajax = new XMLHttpRequest();
             let nameF = document.querySelector('#name').value; // pegando dados do formulario
             let priceF = document.querySelector('#price').value; // pegando dados do formulario
             console.log(nameF)
             console.log(priceF)

             ajax.open('GET', 'produtos_create'); // Abrindo a requesição
             ajax.setRequestHeader('Content-type','application/x-www-form-urlencoded'); // Cabeçalho da requisição ajax
                 // Montando requisição
                 ajax.onreadystatechange = function () {
                     if (ajax.status === 200 && ajax.readyState === 4) {
          
                         console.log(ajax.status);
                         console.log(ajax.readyState);
                         console.log(ajax.responseText);
                         console.log(ajax.response)
                        //  console.log(xmlhttp.responseText);
                         // let dados = JSON.parse( ajax.responseText);  
                     //    res.innerHTML += "Nome : "+ dados.name+"<br>";
                     //    res.innerHTML += "Idade: "+dados.idade+"<br>";
                     //    res.innerHTML += "Cidade: "+dados.cidade+"<br>";
                     }
          
                 }
          
                 ajax.send(priceF,nameF); // enviando requisição
            }
            form.addEventListener('submit',addprodutos,false);







            form.appendChild(nome);
            form.appendChild(br);
            form.append(preco);
            form.appendChild(b);
            form.appendChild(submit);

            mainP.appendChild(form);

      }

      linkA.addEventListener('click',AddProduct,false);

})(window,document);