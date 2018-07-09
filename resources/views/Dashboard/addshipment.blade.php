@extends('Dashboard.index')

@section('content')
<div class="content">
<div class="container-fluid col-md-offset-2" style="width:100%; ">
	<div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Shipment</h4>
                            </div>
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
                                                <input type="text" class="form-control" name="invoice">
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
                                                <textarea rows="5" class="form-control" name="comment"> </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="clearfix"></div>
                                </form>
                                <button type="button" id="AddButton" class="btn btn-info btn-fill pull-right">Add Shipment</button>
                            </div>
                        </div>
                    </div>



                   <!--  <div class="col-md-4">
                        
                    </div> -->
                    </div>
      </div>
  </div>

@endsection