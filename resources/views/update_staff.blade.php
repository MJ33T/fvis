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
                            <h3>Update Staff</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_staff/update_staff" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="{{$msp->id}}">
                                        <label for="">Employee ID</label>
                                        <input type="text" class="form-control" value="{{$msp->employee_id}}" name="employee_id" placeholder="Enter Employee ID">
                                        <br>
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" value="{{$msp->name}}" name="name" placeholder="Enter Name">
                                        <br>
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" value="{{$msp->email}}" name="email" placeholder="Enter Email">
                                        <br>
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" value="{{$msp->phone}}" name="phone" placeholder="Enter Phone">
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" value="{{$msp->address}}" name="address" placeholder="Enter Address">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Staff</button>
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
