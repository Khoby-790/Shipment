@extends('Dashboard.index')

@section('content')


<div class="card-body">
    <h4 id="rw-dt-responsive">All shipments</h4>
<p class="subtitle margin-bottom-20" id="shipmentListingInfo">List of all available shipments in the system.</p>

  <div class="row">
    <input type="" class="form-control" name="" id="searchInput">
    <div class="col-sm-12">
    <table class="table table-responsive table-striped">
        <thead>
            <th>Full Name</th>
            <th> Sender Address</th>
            <th>Receiver Name</th>
            <th>Receiver Address</th>
            <th>Phone Number</th>
            <th>Tracking Number</th>
            <th>Shipment Status</th>
        </thead>
        <tbody>
            @foreach($shipments as $data)

            <tr id="{{$data->id}}">
                <td>{{$data->first_name}} {{$data->other_name}} {{$data->last_name}}</td>
                <td>{{$data->sender_address}}</td>
                <td>{{$data->receiver_first_name}} {{$data->receiver_other_name}} {{$data->receiver_last_name}}</td>
                <td>{{$data->receiver_address}}</td>
                <td>{{$data->receiver_phone}}</td>
                <td>{{$data->tracking_number}}</td>
                <td>{{$data->status}}</td>
                <td><button id="view{{$data->id}}" class='btn btn-success viewBtn'>View Shipment</button></td>
                <td><button  id="act{{$data->id}}"  class='btn btn-secondary actBtn'>Add Activity</button></td>
                <td><button class='btn btn-danger'>Delete</button></td>
            </tr>

            @endforeach
        </tbody>


    </table>  


    {{ $shipments->links() }}   
</div>
</div>
</div>



    


    <script type="text/javascript">


        document.addEventListener("DOMContentLoaded", function () {
            app._loading.show($("#td-default"),{spinner: true});
            $("#td-example-default").DataTable();
});

    </script>

 <div class="modal fade" id="largemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="content">
                                <form id="addShipment">
                                <meta charset="utf-8" content="{{ csrf_token()}}" id="csrf">
                                <legend id="addShipmetText"> Sender's Information </legend>
                                    <div class="row">
                                        <div class="col-md-5"
                                            <div class="form-group">
                                                <label>Company </label>
                                                <input type="text" class="form-control" disabled="" placeholder="Company" name="company" value="Diplomatic Security Courier">
                                            </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="first_name" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Other Name</label>
                                                <input type="text" name="other_name" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="last_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" name="sender_phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="sender_address" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <legend> Reciever's Information </legend>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="receiver_first_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Other Name</label>
                                                <input type="text" class="form-control" name="receiver_other_name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="receiver_last_name" class="form-control">
                                            </div>
                                        </div>
                                    </div>



                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Reciever Address</label>
                                                <input type="text" name="receiver_address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Reciever Phone</label>
                                                <input type="text" name="receiver_phone" class="form-control">
                                            </div>
                                        </div>
                                    </div>



                                
                              <legend> Package Details</legend>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nearest Airport</label>
                                                <input type="text" name="nearest_airport" class="form-control">
                                            </div>
                                        </div>

                                        
                                

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Invoice Number</label>
                                                <input type="text" class="form-control" name="invoice" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tracking Number</label>
                                                <input type="text" name="tracking_number" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>






                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Shipment Status</label>
                                                <select name="status" class="form-control">
                                                    <option value="Pick up initiated" > Pick up initiated</option>
                                                    <option value="Delivery in progress" > Delivery in progress </option>
                                                    <option value="In Transit" > In Transit </option>
                                                    <option value="Order Stopped" > Order Stopped </option>
                                                    <option value="Delivered" > Delivered </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Weight</label>
                                                <input type="number" class="form-control" name="weight">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" name="quantity" class="form-control">
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Mode of Shipment</label>
                                                 
                                                 <select name="shipment_mode" class="form-control">
                                                     <option value="Air Freight">Air Freight</option>
                                                     <option value="Ocean Freight">Ocean Freight</option>
                                                     <option value="Land Freight">Land Freight</option>
                                                 </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Departure time</label>
                                                <input type="time" class="form-control" name="departure_time">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Pick-up Time</label>
                                                <input type="time" name="pick_up_time" class="form-control">
                                            </div>
                                        </div>
                                    </div>


                                  <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Pick-up date</label>
                                                <input type="date" name="pick_up_date" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Arrival Time</label>
                                                <input type="time" name="arrival_time" class="form-control">
                                            </div>
                                        </div>

                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Delivery Date</label>
                                                <input type="date" name="delivery_date" class="form-control">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> comment </label>
                                                <input rows="5" class="form-control" name="comment" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="clearfix"></div>
                                </form>
                                <button type="button" id="AddButton" class="btn btn-info btn-fill pull-right">Update Shipment</button>
                            </div>
                    </div>
     
                </div>
        </div>
</div>

<div class="modal fade" id="activity_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                            <div class="content">
                                <form id="addActivityForm">
                                <meta charset="utf-8" content="{{ csrf_token()}}" id="csrf">
                                <legend> Activites </legend>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Activity </label>
                                                <input type="text" class="form-control" id="activity" placeholder="Current activity" name="Activity">
                                                <input type="hidden" id="shipment_idw" name="shipment_id">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <input type="text" id="" name="Location" class="form-control" placeholder="Enter Current Location">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Purpose of Activity</label>
                                                <input type="text" name="purpose_of_activity" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tracking Number</label>
                                                <input type="text" id="number_t" name="tracking_number" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Update</label>
                                                <input type="date" class="form-control" name="date_of_update">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Time of Update</label>
                                                <input type="time" name="time_of_update" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                            

                                    
                                    <div class="clearfix"></div>
                                </form>

                                <button type="button" id="submitAddAct" class="btn btn-info btn-fill pull-right">Add Activity</button>
                            </div>
                    </div>
                </div>
     
        </div>
</div>




    <script type="text/javascript">document.addEventListener("DOMContentLoaded", function () {
                                        $("#dt-example-responsive").DataTable({
                                            "responsive": true,
                                        });
                                    });</script>

@endsection