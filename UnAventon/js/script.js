window.totalItems = '';
$(document).ready(function() {
  totalItems = $(".contadorClicks").length;
  console.log("totaItems es igual a: "+totalItems);
});
$(".contadorClicks").bind("click", function()
	{
	
		actualPage = this.id;
                console.log("actualPage is: "+actualPage);
		for(j=1; j<=totalItems; j++){
			if(actualPage == 'image'+j){
			var dataString = 'id='+j;
			$(".contadorClicks").fadeOut("slow", function(){
                          $("#ok").fadeIn();
                          setTimeout(function(){
                             $("#ok").fadeOut();
                          },3000);
                          
                         });
 	                  
				  $.ajax({
				  type: "POST",
				  url: "go.php",
				  data: dataString,
				  success: function() {
					           
                                                  $(".contadorClicks").delay(3500).fadeIn();                                                
						
					}	
				});
			};
		}
	} );					