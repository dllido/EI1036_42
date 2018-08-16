function llamaotra1(A){
    console.log(A);
   }
  function llamaotra2(A){
     console.log(eval(A)); //ejecuta funcion
  
  }
  function funcionllamada(B){
         console.log(B);
  } 
llamaotra1(funcionllamada("Estoy Aqui1"));
llamaotra1('funcionllamada("Estoy Aqui2")');
llamaotra2('funcionllamada("Estoy Aqui3")');
