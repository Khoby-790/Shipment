$(document).ready(function(){

	let pubData;

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

	setTimeout(loadShipment,1000);

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
				alert("hmmmmmm");
			}
		});
	}




	$('#n3').click(function(){
		let track_id = $('#tracking_id').val();


		$.ajax({
			method:"GET",
			url: `getTrackinfo/${track_id}`,
			data: $("#addShipment").serialize(),
			dataType: "JSON",
			success:function(data){
				$('#track').text(data.tracking_number);
				$('#head_tracking_number').text(data.tracking_number);
				if(data.status == "Order Stopped"){
					$('#status').text(data.status).css({
						"color":"red",
						"fontWeight":"bold",
					});
				}else{
					$('#status').text(data.status).css({
						"color":"green",
						"fontWeight":"bold",
					});
				}
				
				$('#shipped_on').text(data.created_at);
				$('#type').text(data.shipment_mode);
				$('#weight').text(data.weight);
				$('#invoice').text(data.invoice);	
				$('#origin').text(data.sender_address);	
				$('#destination').text(data.receiver_address);	
				//$('#invoice').text(data.invoice);	
			},
			error:function(){
				alert("Error getting shipment");
			}
		});
	});

	$('#').click(()=>{
		alert(this.attr('id'));
	})


});



