@extends('Dashboard.index')


@section('content')

		<div class="container">
            <div class="container-fluid col-md-offset-2" style="width:100%; ">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Activity</h4>
                            </div>
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
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tracking Number</label>
                                                <input type="text" name="tracking_number" class="form-control">
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
        </div>

@endsection