$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

if($("#link1").click()){
$("#link1").click(function(){
	$("iframe").attr("src","discografia.php");
	$("#link1").css("border-bottom","3px solid #007FEB");
	$("#link1").css("color","black");
	$("#link2").css("color","#72727d");
	$("#link2").css("border-bottom","0px");
	$("#link3").css("color","#72727d");
	$("#link3").css("border-bottom","0px");
	$("#link4").css("color","#72727d");
	$("#link4").css("border-bottom","0px");
	$("#link5").css("color","#72727d");
	$("#link5").css("border-bottom","0px");
	$("#link6").css("color","#72727d");
	$("#link6").css("border-bottom","0px");
})
}

if($("#link2").click()){
$("#link2").click(function(){
	$("iframe").attr("src","dispositivos.php");
	$("#link2").css("border-bottom","3px solid #007FEB");
	$("#link2").css("color","black");
	$("#link1").css("color","#72727d");
	$("#link1").css("border-bottom","0px");
	$("#link3").css("color","#72727d");
	$("#link3").css("border-bottom","0px");
	$("#link4").css("color","#72727d");
	$("#link4").css("border-bottom","0px");
	$("#link5").css("color","#72727d");
	$("#link5").css("border-bottom","0px");
	$("#link6").css("color","#72727d");
	$("#link6").css("border-bottom","0px");
})
}

if($("#link3").click()){
$("#link3").click(function(){
	$("iframe").attr("src","ofertas.php");
	$("#link3").css("border-bottom","3px solid #007FEB");
	$("#link3").css("color","black");
	$("#link2").css("color","#72727d");
	$("#link2").css("border-bottom","0px");
	$("#link1").css("color","#72727d");
	$("#link1").css("border-bottom","0px");
	$("#link4").css("color","#72727d");
	$("#link4").css("border-bottom","0px");
	$("#link5").css("color","#72727d");
	$("#link5").css("border-bottom","0px");
	$("#link6").css("color","#72727d");
	$("#link6").css("border-bottom","0px");
})
}

if($("#link4").click()){
$("#link4").click(function(){
	$("iframe").attr("src","features.php");
	$("#link4").css("border-bottom","3px solid #007FEB");
	$("#link4").css("color","black");
	$("#link2").css("color","#72727d");
	$("#link2").css("border-bottom","0px");
	$("#link3").css("color","#72727d");
	$("#link3").css("border-bottom","0px");
	$("#link1").css("color","#72727d");
	$("#link1").css("border-bottom","0px");
	$("#link5").css("color","#72727d");
	$("#link5").css("border-bottom","0px");
	$("#link6").css("color","#72727d");
	$("#link6").css("border-bottom","0px");
})
}

if($("#link5").click()){
$("#link5").click(function(){
	$("iframe").attr("src","albumes.php");
	$("#link5").css("border-bottom","3px solid #007FEB");
	$("#link5").css("color","black");
	$("#link2").css("color","#72727d");
	$("#link2").css("border-bottom","0px");
	$("#link3").css("color","#72727d");
	$("#link3").css("border-bottom","0px");
	$("#link4").css("color","#72727d");
	$("#link4").css("border-bottom","0px");
	$("#link1").css("color","#72727d");
	$("#link1").css("border-bottom","0px");
	$("#link6").css("color","#72727d");
	$("#link6").css("border-bottom","0px");
})
}

if($("#link6").click()){
$("#link6").click(function(){
	$("iframe").attr("src","perfil.php");
	$("#link6").css("border-bottom","3px solid #007FEB");
	$("#link6").css("color","black");
	$("#link2").css("color","#72727d");
	$("#link2").css("border-bottom","0px");
	$("#link3").css("color","#72727d");
	$("#link3").css("border-bottom","0px");
	$("#link4").css("color","#72727d");
	$("#link4").css("border-bottom","0px");
	$("#link5").css("color","#72727d");
	$("#link5").css("border-bottom","0px");
	$("#link1").css("color","#72727d");
	$("#link1").css("border-bottom","0px");
})
}

$(".selected").hover(
	                    function()
	                    {
	                    	$(this).css("border-bottom","3px solid #007FEB");
	                        $(this).css("cursor","pointer"); 
	                        $(this).css("color","black"); 
	                    }
	                    ,
	                    function()
	                    {
	                    	$(this).css("border-bottom","none");
	                        $(this).css("cursor","pointer"); 
	                        $(this).css("color","#72727d"); 
                        }
                    );