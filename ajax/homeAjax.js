((windows,document)=>{

   'use strict'

   let main = document.querySelector('#main');
   main.innerHTML="";
   
   let h1 = document.createElement('h1');
   h1.setAttribute('class','text-center m-5');
   h1.innerHTML="CRUD PHP, MVC, PDO Ajax.";
   main.appendChild(h1);
   document.getElementById('linkH').addEventListener('click',function(event){
    let main = document.querySelector('#main');
    main.innerHTML="";
    

    let h1 = document.createElement('h1');
    h1.setAttribute('class','text-center m-5');
    h1.innerHTML="CRUD PHP, MVC, PDO Ajax.";
    main.appendChild(h1);
   });   


})(window,document);