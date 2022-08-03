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
                            <h3>Update Enquiry</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_enquiry/update_enquiry" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="{{$msp->id}}">
                                        <label for="">Subject</label>
                                        <input type="text" class="form-control" name="cmp" value="{{$msp->company_name}}">
                                        <br>
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$msp->name}}">
                                        <br>
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{$msp->email}}">
                                        <br>
                                        <label for="">Mobile Number</label>
                                        <input type="text" class="form-control" name="number" value="{{$msp->number}}">
                                        <br>
                                        <label for="">Message</label>
                                        <textarea type="text" class="form-control" name="message" value="">{{$msp->message}}</textarea>
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Enquiry</button>
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
