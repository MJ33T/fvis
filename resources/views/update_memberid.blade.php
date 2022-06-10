@extends('master')
@section('master')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <br>
    <section class="content">
        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Update Member ID</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_memberid/update_memberid" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="{{$msp->id}}">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" name="fname" value="{{$msp->fname}}" placeholder="Enter First Name">
                                        <br>
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" name="lname" value="{{$msp->lname}}" placeholder="Enter Last Name">
                                        <br>
                                        <label for="">Phone Number</label>
                                        <input type="text" class="form-control" name="number" value="{{$msp->number}}" placeholder="Enter Phone Number">
                                        <br>
                                        <label for="">Date</label>
                                        <input type="text" class="form-control" name="date" value="{{$msp->date}}" placeholder="Enter Date">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Member ID</button>
                        </div>
                    </form> 
                    </div>

                </div>
            </div>
        </div>
          <!-- Main row -->
    </section>
</div>

@endsection
