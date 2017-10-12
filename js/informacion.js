
$("#btn-save").click(function(){

    var user=$("#txt-nombreu");
    var email=$("#txt-correo");
    var day=$("#dia");
    var month=$("#mes");
    var phone=$("#txt-phone");
    var year=$("#year");
    var codep=$("#txt-codigop");
    var name=$("#txt-nombre");
    var lname=$("#txt-apellido");
    var password=$("#txt-contrasena");
    var sex=$("#slc-sexo");
 
	var nombreu=user.val();
	var correo=email.val(); 
	var telefono=phone.val(); 
	var ano=year.val();
	var codigop=codep.val();
	var nombre=name.val();
	var apellido=lname.val();
	var dia=day.val();
	var mes=month.val();
	var contrasena=password.val();
  var sexo=sex.val();
	var dato=new Array();
	dato[0]=nombreu; 
	dato[1]=correo;
	dato[2]=dia;
	dato[3]=mes;
	dato[4]=apellido;
	dato[5]=codigop;
	dato[6]=nombre; 
	dato[7]=ano;
	dato[8]=telefono;
	dato[9]=contrasena;
  dato[10]=sexo;


	var dato2=new Array();
	dato2[0]=user; 
	dato2[1]=email;
	dato2[2]=day;
	dato2[3]=month;
	dato2[4]=lname;
	dato2[5]=codep;
	dato2[6]=name; 
	dato2[7]=year;
	dato2[8]=phone;
	dato2[9]=password;
  dato2[10]=sex;

	for (var i = 0; i < dato.length; i++) {
    	if (dato[i]==null || dato[i].length == 0 || /^\s+$/.test(dato[i])) {
    		if (dato[i]==nombreu) 
           		user.addClass('has-error');
           	
           	if (dato[i]==correo) 
               email.addClass('has-error');

           	if (dato[i]==contrasena)
           		password.addClass('has-error');

           	if (dato[i]==apellido) 
           		lname.addClass('has-error');
           	
           	if (dato[i]==codigop) 
               codep.addClass('has-error');

            if (dato[i]==telefono) 
           	    phone.addClass('has-error');

           	if (dato[i]==nombre)
           		name.addClass('has-error');
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
            
            if (dato[i]==correo) {
            	if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{3})$/.test(dato[i]))) {
            		email.addClass('has-error');
            	}else{
            		email.removeClass('has-error');
            	}
            }

            if (dato[i]==contrasena) {
            	if (!/^[A-Za-z\d]{6,15}$/.test(dato[i])) {
                     password.addClass('has-error');
           		  }else{
           			 password.removeClass('has-error');
           		  }
            }

            if (dato[i]==dia) {
            	if (dato[i]=="N/A") {
                    day.addClass("has-error");
            	}else{
                    day.removeClass("has-error");
            	}
            }

            if (dato[i]==ano) {
            	if (dato[i]=="N/A") {
                    year.addClass("has-error");
            	}else{
                    year.removeClass("has-error");
            	}
            }

            if (dato[i]==mes) {
            	if (dato[i]=="N/A") {
                    month.addClass("has-error");
            	}else{
                    month.removeClass("has-error");
            	}
            }

            if (dato[i]==codigop) {
            	if (!/^[0-9]*$/.test(dato[i])) {
                    codep.addClass("has-error");
            	}else{
                    codep.removeClass("has-error");
            	}
            }

            if (dato[i]==nombre) {
            	if (!/^[A-Za-z]*$/.test(dato[i])) {
                    name.addClass("has-error");
            	}else{
                    name.removeClass("has-error");
            	}
            }

            if (dato[i]==telefono) {
            	if (!/^[+]{1}[0-9]{3}(\s){1}[0-9]{8}$/.test(dato[i])) {
                    phone.addClass("has-error");
            	}else{
                    phone.removeClass("has-error");
            	}
            }

             if (dato[i]==apellido) {
            	if (!/^[A-Za-z]*$/.test(dato[i])) {
                    lname.addClass("has-error");
            	}else{
                    lname.removeClass("has-error");
            	}
            }

            if (dato[i]==sexo) {
               if (dato[i]=="N/A") {
                   sex.addClass("has-error");
               }else{
                   sex.removeClass("has-error");
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
     var parametros="nombreu="+nombreu+"&"+"telefono="+telefono+"&"+"sexo="+sexo+"&"+"correo="+correo+"&"+"contrasena="+contrasena+"&"+"ano="+ano+"&"+"codigop="+codigop+"&"+"nombre="+nombre+"&"+"dia="+dia+"&"+"mes="+mes+"&"+"apellido="+apellido;
     //alert(parametros);
     $.ajax({
        url:"ajax/registro-ajax.php?accion=3",
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

