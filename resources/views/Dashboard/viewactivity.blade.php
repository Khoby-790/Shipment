@extends('Dashboard.index')

@section('content')


<div class="card-body">
    <h4 id="rw-dt-responsive">All Activity</h4>
<p class="subtitle margin-bottom-20">List of all available activity in the system.</p>
<div id="dt-example-responsive_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
    <div class="row">
    <div class="col-sm-12 col-md-6">
    <div class="dataTables_length" id="dt-example-responsive_length">
    <label>Show <select name="dt-example-responsive_length" aria-controls="dt-example-responsive" class="form-control form-control-sm">
    <option value="10">10</option>
<option value="25">25</option>
<option value="50">50</option>
<option value="100">100</option>
</select> entries</label>
</div>
</div>
<div class="col-sm-12 col-md-6">
    <div id="dt-example-responsive_filter" class="dataTables_filter">
    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dt-example-responsive">
</label>
</div>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
    <table id="dt-example-responsive" class="table table-bordered dataTable dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="dt-example-responsive_info" style="width: 100%;">
    <thead>
    <tr role="row">
    <th class="sorting_asc" tabindex="0" aria-controls="dt-example-responsive"  aria-sort="ascending" aria-label="First name: activate to sort column descending">ACTIVITY </th>
    <th class="sorting" tabindex="0" aria-controls="dt-example-responsive"  aria-label="Last name: activate to sort column ascending">LOCATION</th>
    <th class="sorting" tabindex="0" aria-controls="dt-example-responsive"  aria-label="Position: activate to sort column ascending">PURPOSE OF ACTIVITY</th>
    <th class="sorting" tabindex="0" aria-controls="dt-example-responsive"  aria-label="Office: activate to sort column ascending">TRACKING NUMBER</th>
    <th class="sorting" tabindex="0" aria-controls="dt-example-responsive"  aria-label="Age: activate to sort column ascending">DATE OF UPDATE</th>
    <th class="sorting" tabindex="0" aria-controls="dt-example-responsive"  aria-label="Start date: activate to sort column ascending">TIME OF UPDATE</th>
    <th class="sorting" tabindex="0" aria-controls="dt-example-responsive"  aria-label="E-mail: activate to sort column ascending">Action(s)</th>
</tr>
</thead>
    <tbody>
    <tr role="row" class="odd">
        <td tabindex="0" class="sorting_1">Airi</td>
    <td>Satou</td>
    <td>Accountant</td>
    <td>Tokyo</td>
    <td>33</td>
    <td>2008/11/28</td>
    <td>
        <button data-toggle="modal" data-target="#activity_modal" class="btn btn-secondary">Edit Activity</button>
    </td>
    <td>
        <button class="btn btn-danger">Delete Activity</button>
    </td>
</tr>
    
    </tbody>



</table>
</div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-5">
    <div class="dataTables_info" id="dt-example-responsive_info" role="status" aria-live="polite">Showing 1 to 10 of 30 entries</div>
</div>
<div class="col-sm-12 col-md-7">
    <div class="dataTables_paginate paging_simple_numbers" id="dt-example-responsive_paginate">
    <ul class="pagination">
        <li class="paginate_button page-item previous disabled" id="dt-example-responsive_previous">
    <a href="#" aria-controls="dt-example-responsive" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
</li><li class="paginate_button page-item active">
        <a href="#" aria-controls="dt-example-responsive" data-dt-idx="1" tabindex="0" class="page-link">1</a>
</li>
    <li class="paginate_button page-item ">
        <a href="#" aria-controls="dt-example-responsive" data-dt-idx="2" tabindex="0" class="page-link">2</a>
</li>
    <li class="paginate_button page-item ">
        <a href="#" aria-controls="dt-example-responsive" data-dt-idx="3" tabindex="0" class="page-link">3</a>
</li>

<li class="paginate_button page-item next" id="dt-example-responsive_next">
    <a href="#" aria-controls="dt-example-responsive" data-dt-idx="4" tabindex="0" class="page-link">Next</a>.
</li>
</ul>
</div>
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

                            

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Activity</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                    </div>
                </div>
     
        </div>
</div>




    <script type="text/javascript">document.addEventListener("DOMContentLoaded", function () {
                                        app._loading.show($("#dt-ext-responsive"),{spinner: true});
                                        $("#dt-example-responsive").DataTable({
                                            "responsive": true,
                                            "initComplete": function(settings, json) {
                                                setTimeout(function(){
                                                    app._loading.hide($("#dt-ext-responsive"));
                                                },1000);
                                            }
                                        });
                                    });</script></div>

@endsection