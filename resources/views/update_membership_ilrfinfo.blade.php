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
                            <h3>Update ILRF Details</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_membership/update_membership_ilrfinfo" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="user_id" value="{{$msp['user_id']}}">
                                        <label for="">Company Name</label>
                                        <input type="text" class="form-control" name="com_name" value="{{$msp->com_name}}">
                                        <br>
                                        <label for="">Company Number</label>
                                        <input type="text" class="form-control" name="com_phone" value="{{$msp->com_phone}}">
                                        <br>
                                        <label for="">Company Address</label>
                                        <input type="text" class="form-control" name="com_add" value="{{$msp->com_add}}">
                                        <br>
                                        <label for="">Company Country</label>
                                        <input type="text" class="form-control" name="company_country" value="{{$msp->company_country}}">
                                        <br>
                                        <label for="">Company Fax</label>
                                        <input type="text" class="form-control" name="com_fax" value="{{$msp->com_fax}}">
                                        <br>
                                        <label for="">Company Email</label>
                                        <input type="text" class="form-control" name="com_email" value="{{$msp->com_email}}">
                                        <br>
                                        <label for="">Company Website</label>
                                        <input type="text" class="form-control" name="web_url" value="{{$msp->web_url}}">

                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update ILRF Details</button>
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
