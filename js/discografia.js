$("#btnmas").hover(
	                 function()
	                 {
	                 	$("#btnmas").css("backgroundColor","#E8E8EC");
	                 	$("#btnmas").css("cursor","pointer");
	                 	$("#btnmas").css("border-bottom","2px solid #dedee3");
	                 },
	                 function()
	                 {
                        $("#btnmas").css("backgroundColor","#efeff2");
                        $("#btnmas").css("cursor","pointer");
                        $("#btnmas").css("border-bottom","none");
	                 }
	              )

$(".can").hover(
                 	function()
                 	{
                 		$(this).addClass("hova");
                 		$(this).find(".ub").show();
	                },
                 	function()
                 	{
                 		$(this).removeClass("hova");
                 		$(this).find(".ub").hide();          		
	                }
	            )