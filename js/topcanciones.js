$(".cat").hover(
                 	function()
                 	{
                 		$(this).css({"background-color":"#efeff2","border-top-right-radius":"4px","border-top-left-radius":"4px","border-bottom-right-radius":"4px","border-bottom-left-radius":"4px","cursor":"pointer"});
                 		$(this).find(".aparece").css("visibility","visible");
	                },
                 	function()
                 	{
                 		$(this).css({"background-color":"#fff","border-top-right-radius":"0px","border-top-left-radius":"0px","border-bottom-right-radius":"0px","border-bottom-left-radius":"0px","cursor":"pointer"});
                 		$(this).find(".aparece").css("visibility","hidden");
                                       		
	                }
	            )

$(".songs").hover(
                        function()
                        {
                               $(this).css("color","#1159BC");
                        },
                        function()
                        {
                                $(this).css("color","#32323d");                    
                        }
                    )

$(".aparece").hover(
                        function()
                        {
                                $(this).addClass("hovar");
                        },
                        function()
                        {
                                $(this).removeClass("hovar");                    
                        }
                    )

$(".aparca").hover(
                        function()
                        {
                                $(this).addClass("hovar");
                        },
                        function()
                        {
                                $(this).removeClass("hovar");                    
                        }
                    )

$(".aparece").click(function(){
        alert("hola nigas");
})

$(".displa").hover(
                        function()
                        {
                                $(this).addClass("displayer");
                                $(this).find(".para").css("color","#39B0F5")
                        },
                        function()
                        {
                                $(this).removeClass("displayer");   
                                $(this).find(".para").css("color","#92929d")                
                        }
                    )

$("#btnescuchar").hover(
                         function()
                         {
                                $("#btnescuchar").css("backgroundColor","#0B66CD");
                                $("#btnescuchar").css("cursor","pointer");
                         },
                         function()
                         {
                                $("#btnescuchar").css("backgroundColor","#007feb");
                                $("#btnescuchar").css("cursor","pointer");
                         }
                      )