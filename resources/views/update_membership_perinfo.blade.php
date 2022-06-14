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
                            <h3>Update Personal Information</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_membership/update_membership_perinfo" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="user_id" value="{{$msp['user_id']}}">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" name="f_name" value="{{$msp->f_name}}">
                                        <br>
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" name="l_name" value="{{$msp->l_name}}">
                                        <br>
                                        <label for="">email</label>
                                        <input type="text" class="form-control" name="email" value="{{$msp->email}}">
                                        <br>
                                        <label for="">Mobile Number</label>
                                        <input type="text" class="form-control" name="m_no" value="{{$msp->m_no}}">
                                        <br>
                                        <label for="">Home Phone</label>
                                        <input type="text" class="form-control" name="h_phone" value="{{$msp->h_phone}}">
                                        <br>
                                        <label for="">Address One</label>
                                        <input type="text" class="form-control" name="add_one" value="{{$msp->add_one}}">
                                        <br>
                                        <label for="">Address Two</label>
                                        <input type="text" class="form-control" name="add_two" value="{{$msp->add_two}}">
                                        <br>
                                        <label for="">Country</label>
                                        <input type="text" class="form-control" name="country" value="{{$msp->country}}">
                                        <br>
                                        <label for="">Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" value="{{$msp->dob}}">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Personal Information</button>
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
