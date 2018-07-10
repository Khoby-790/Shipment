$(document).ready(function(){
	 $('#myTable').DataTable();
	let pubData;
	let current_width;

	$('#AddButton').click(function(e){



		//ajax function

		$.ajaxSetup({
			headers:{'X-CSRF-TOKEN':$('#csrf').attr("content")},
		});

		$.ajax({
			method:"POST",
			url: "storeShipment",
			data: $("#addShipment").serialize(),
			dataType: "JSON",
			success:function(data){
				$("#addShipment").trigger("reset");
				$('#addShipmetText').text(data).css({
					"color":"green",
					"fontWeight":"bold",
				})
			},
			error:function(){
				alert("Error passing shipment");
			}
		});



	});

	//setTimeout(loadShipment,1000);

	function loadShipment(){
		$.ajax({
			method:"GET",
			dataType:"JSON",
			url:"displayShipment",
			success:(data)=>{
				let tableDisplay = "";
				if(data == ""){
					$("#shipmentListingInfo").text("No Shipment Available");
					return;
				}
				$.each(data,(index, value)=>{
					//console.table(value);
					pubData = data;
					tableDisplay += `<tr id='${value.id}' role='row' class='odd'><td tabindex='0' class='sorting_1'>${value.first_name + " " + value.other_name + " " + value.last_name}</td><td>${value.sender_address}</td>`;
					tableDisplay += `<td>${value.receiver_first_name + " " + value.receiver_other_name + " " + value.receiver_last_name}</td><td>${value.receiver_address}</td><td>${value.receiver_phone}</td><td>${value.tracking_number}</td><td>${value.status}</td>`;
	    			tableDisplay += `<td><button data-toggle='modal' data-target='#largemodal' class='btn btn-success '>View Shipment</button></td>`;
	    			tableDisplay += `<td><button data-toggle='modal' id='${value.id}' data-target='#activity_modal' class='btn btn-secondary'>Add Activity</button></td>`;
	    			tableDisplay += `<td><button class='btn btn-danger'>Delete</button></td></tr>`;
	    			$('#dt-example-responsive').append(tableDisplay);
				});


				
			},
			error:()=>{
				alert("Error");
			}
		});
	}




	


	$('.actBtn').click(function(){
		let a = $(this).attr('id').slice(3);
		//alert(a);



		$.ajax({
			method: "GET",
			url: `getShipmentWIthId/${a}`,
			dataType: "JSON",
			success:(data)=>{
				//alert(JSON.stringify(data));
				$('#number_t').val(data.tracking_number);
				$('#shipment_idw').val(a);
				$('#activity_modal').modal();
			},
			error:(error)=>{
				alert("Error");
			}

		});



	});



	$('.viewBtn').click(function(){
		const a = $(this).attr('id').slice(4);
		//alert(a);

		

		$.ajax({
			method: "GET",
			url: `getShipmentWIthId/${a}`,
			dataType: "JSON",
			success:(data)=>{
				//alert(JSON.stringify(data));
				for(let key in data){
					//alert(data[key]);
					$(`input[name=${key}]`).val(data[key]) ;
				}
				$('#largemodal').modal();
			},
			error:(error)=>{
				alert("Error");
			}

		});



	});





	$('#submitAddAct').click(function(){


		$.ajaxSetup({
			headers:{'X-CSRF-TOKEN':$('#csrf').attr("content")},
		});


		$.ajax({
			method: "POST",
			url: "addShipmentActivity",
			data:$('#addActivityForm').serialize(),
			dataType: "JSON",
			success:(data)=>{
				$('#addActivityForm').trigger('reset');
				alert(data);
			},
			error:(error)=>{
				alert("Error");
			}

		});


	});


});



