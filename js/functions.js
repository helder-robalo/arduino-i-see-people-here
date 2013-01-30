function changeStatus(){
	$.ajax({
		url: "server.php",
		success: function(resultado){
			if(resultado == 1){
				setTimeout(function() {
      				$(".darkness").hide();
					$(".light").show();
					changeStatus();
				}, 1000);
			}else{
				setTimeout(function() {
					$(".darkness").show();
					$(".light").hide();
					changeStatus();
				}, 1000);
			}
		}
	});	
}
$(document).ready(function() {
	changeStatus();
});