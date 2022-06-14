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
                            <h3>Add New Staff</h3>
                        </div>
                        <div class="card-body">
                            <form action="add_staff" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Employee ID</label>
                                        <input type="text" class="form-control" name="employee_id" placeholder="Enter Employee ID">
                                        <br>
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name">
                                        <br>
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Enter Email">
                                        <br>
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone">
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="Enter Address">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Staff</button>
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
