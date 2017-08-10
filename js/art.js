$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

if($("#link1").click()){
$("#link1").click(function(){
	$("iframe").attr("src","discografia.php");
})
}

if($("#link2").click()){
$("#link2").click(function(){
	$("iframe").attr("src","dispositivos.php");
})
}

if($("#link3").click()){
$("#link3").click(function(){
	$("iframe").attr("src","ofertas.php");
})
}

if($("#link4").click()){
$("#link4").click(function(){
	$("iframe").attr("src","features.php");
})
}

if($("#link5").click()){
$("#link5").click(function(){
	$("iframe").attr("src","comentarios.php");
})
}

if($("#link6").click()){
$("#link6").click(function(){
	$("iframe").attr("src","biografia.php");
})
}
