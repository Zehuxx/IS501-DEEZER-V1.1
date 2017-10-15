$('#btn-conectarse').click(function(){
	var user=$("#nombreu");
	var password=$("#contrasena");
	var nombreu=user.val();
	var contrasena=password.val();
	var dato=new Array();
	dato[0]=nombreu; 
	dato[1]=contrasena;

	var dato2=new Array();
	dato2[0]=user;
	dato2[1]=password; 

	for (var i = 0; i < dato.length; i++) {
		if (dato[i]==null || dato[i].length == 0 || /^\s+$/.test(dato[i])) {
    		if (dato[i]==nombreu) 
           	user.addClass('has-error');
           	

           	if (dato[i]==contrasena)
           		password.addClass('has-error');

    	}else{
    		if (dato[i]==nombreu) {
    			if (dato[i].match(/^[A-Za-z]+[A-Za-z0-9]*$/)) {
                   if ((dato[i].length>=2 && dato[i].length<=12)) {
                      user.removeClass('has-error');
                   }else{
                       user.addClass('has-error');
                   }
    			}else{
                     user.addClass('has-error');
    			}
    		}

    		if (dato[i]==contrasena) {
            	if (!/^[A-Za-z\d]{6,15}$/.test(dato[i])) {
                     password.addClass('has-error');
           		  }else{
           			 password.removeClass('has-error');
           		  }
            }
    	}
	}

	 var error=0;
 for (var i = 0; i < dato2.length; i++) {
 	if (dato2[i].hasClass('has-error')) {
               error++;
        }
 }

  if (error==0) {
     var parametros="nombreu="+nombreu+"&"+"contrasena="+contrasena;
     $.ajax({
        url:"ajax/registro-ajax.php?accion=2",
        data:parametros,
        method:"POST",
        dataType:'json',
        success:function(respuesta){
          if (respuesta.codigo==1){
              //window.location.href="my-drive/bienvenida.php";
              alert(respuesta.mensaje);
          }else{
            
          }
        }
     });
  }else{
  	//hay campos mal llenados o vacios
  	//alert('errores: '+error);
  }
});