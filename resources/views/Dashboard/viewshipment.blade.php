@extends('Dashboard.index')

@section('content')


<div class="card-body">
    <h4 id="rw-dt-responsive">All shipments</h4>
<p class="subtitle margin-bottom-20" id="shipmentListingInfo">List of all available shipments in the system.</p>

  <div class="row">
    <div class="col-sm-12">
    <table id="dt-example-responsive" class="table table-bordered dataTable dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="dt-example-responsive_info" style="width: 100%;">  


        <thead>
    <tr role="row">
    <th class="sorting_asc" tabindex="0" aria-controls="dt-example-responsive"  aria-sort="ascending" aria-label="First name: activate to sort column descending">Full name </th>
    <th class="sorting" tabindex="0" aria-controls="dt-example-responsive"  aria-label="Last name: activate to sort column ascending">Sender Address</th>
    <th class="sorting" tabindex="0" aria-controls="dt-example-responsive"  aria-label="Position: activate to sort column ascending">Receiver Name</th>
    <th class="sorting" tabindex="0" aria-controls="dt-example-responsive"  aria-label="Office: activate to sort column ascending">Reciever Address</th>
    <th class="sorting" tabindex="0" aria-controls="dt-example-responsive"  aria-label="Age: activate to sort column ascending">Phone Number</th>
    <th class="sorting" tabindex="0" aria-controls="dt-example-responsive"  aria-label="Start date: activate to sort column ascending">Tracking Number</th>
    <th class="sorting" tabindex="0" aria-controls="dt-example-responsive" aria-label="Salary: activate to sort column ascending">Shipment Status</th>
    <th class="sorting" tabindex="0" aria-controls="dt-example-responsive"  aria-label="E-mail: activate to sort column ascending">Action(s)</th>
</tr>
</thead>


        
</table>

</div>
</div>
</div>



 <div class="modal fade" id="largemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="content">
                                <form method="post" action="/storedata">
                                <input type="hidden" name="_token" value="oQUEkerCLm24Y4En5jf9qNKZwnAaJcMxC1IPXOyR">
                                <legend> Sender's Information </legend>
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
                                                <input type="text" class="form-control" name="sender_phone_number">
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
                                                <input type="text" name="receiver_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Other Name</label>
                                                <input type="text" class="form-control" name="reciever_other_name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="reciever_last_name" class="form-control">
                                            </div>
                                        </div>
                                    </div>



                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Reciever Address</label>
                                                <input type="text" name="reciever_address" class="form-control">
                                            </div>
                                        </div>
                                    </div>



                                
                              <legend> Package Details</legend>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nearest Airport</label>
                                                <input type="text" name="near_airport" class="form-control">
                                            </div>
                                        </div>

                                        
                                

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Invoice Number</label>
                                                <input type="text" class="form-control" name="invoice_number">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tracking Number</label>
                                                <input type="text" name="tracking_number" class="form-control">
                                            </div>
                                        </div>
                                    </div>






                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Shipment Status</label>
                                                <select name="shipment_status" class="form-control">
                                                    <option value="Pick up initiated" name="shipment_status"> Pick up initiated</option>
                                                    <option value="Delivery in progress" name="shipment_status"> Delivery in progress </option>
                                                    <option value="In Transit" name="shipment_status"> In Transit </option>
                                                    <option value="Order Stopped" name="shipment_status"> Order Stopped </option>
                                                    <option value="Delivered" name="shipment_status"> Delivered </option>
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
                                                 <input type="text" class="form-control" name="mode_of_shipment">
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
                                                <label>Reciever's Phone Number</label>
                                                <input type="text" name="reciever_phone" class="form-control">
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
                                                <textarea rows="5" class="form-control" name="comment"> </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Add Shipment</button>
                                    <div class="clearfix"></div>
                                </form>
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
                                <form method="post" action="/activity">
                                <input type="hidden" name="_token" value="BBRhczWVPIEn0i2dKarln1w50D2WMQZyDsnkdXKG">
                                <legend> Activites </legend>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Activity </label>
                                                <input type="text" class="form-control" placeholder="Current activity" name="activity">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <input type="text" name="Current_location" class="form-control" placeholder="Enter Current Location">
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
                                                <input type="text" name="tracking_number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Update</label>
                                                <input type="date" class="form-control" name="Date_of_update">
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

                            

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Add Activity</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                    </div>
                </div>
     
        </div>
</div>




    <script type="text/javascript">document.addEventListener("DOMContentLoaded", function () {
                                        $("#dt-example-responsive").DataTable({
                                            "responsive": true,
                                            "initComplete": function(settings, json) {
                                                setTimeout(function(){
                                                    app._loading.hide($("#dt-ext-responsive"));
                                                },1000);
                                            }
                                        });
                                    });</script>

@endsection