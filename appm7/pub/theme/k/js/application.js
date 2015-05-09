$(document).ready(function(){
alert("HOLA");
	function llenar_poblacion(url){
		 $.ajax({
		 	url:url,
		 	//data:'',
		 	method:'POST',
			success:function(e){
				
		 		$("#combopoblacion").html(e);
		 	}

		 });

		}

// 		var datapost=(this).serializable();

		// });		
	//}


// 	$('formregistre').on('submit',function(){
// 		var datapost=(this).serializable();
// 		var urlform =(this).attr('action');
// 		var dataarray=(this).serializableArray();
// 		console.log(dataarray);
// 		console.log(datapost);
// 		$.ajax({
// 			url:urlform,
// 			data:datapost,
// 			method:'post',
// 			dataType:'json',
// 			success:function(respuesta){
// 				console.log(respuesta);
// 			}

// 		});
// 		return false;
// 	});
// }

});

