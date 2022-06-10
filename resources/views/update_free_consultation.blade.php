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
                            <h3>Add New Free Consultation</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_free_consultation/update_free_consultation" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="{{$msp->id}}">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" value="{{$msp->name}}" name="name">
                                        <br>
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" value="{{$msp->email}}" name="email">
                                        <br>
                                        <label for="">Mobile Number</label>
                                        <input type="text" class="form-control" value="{{$msp->phone}}" name="phone">
                                        <br>
                                        <label for="">Message</label>
                                        <input type="text" class="form-control" value="{{$msp->message}}" name="msg">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Free Consultation</button>
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
