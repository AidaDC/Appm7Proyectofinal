$(document).ready(function(){
		 $.ajax({
		 	//data:'',
			success:function(e){				
		 		$("#combopoblacion").html(e);
		 	}

		 });
});
