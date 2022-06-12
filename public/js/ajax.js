
			
	 	$.('body').on('change', '#cstatus', function(){  alert('kk');


	 		var id=$(this).attr('data-id');
	 		if(this.checked) var status=1;
	 		else var status=0; console.log("Yes");

	
		alert(id); alert(status);

		$.ajax({ //alert(id);

			url:'admin/productStatus/'+id+'/'+status,
			method:'get',
			success: function(result){
				console.log(result);
			},
			error:function(result){
           console.log("Fail");
         }

		});
	});
	

	 




	function changeStatus(id,status) {
		var id=id;
		var status=status;
		alert(id);// alert(status);

		$.ajax({ //alert(id);

			url:'admin/productStatus/'+id+'/'+status,
			method:'get',
			success: function(result){
				console.log(result);
			},
			error:function(result){
           console.log("Fail");
         }

		});
	}


	 