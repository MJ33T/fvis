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
                            <h3>Update Newsletter</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_newsletter/update_newsletter" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="{{$msp->id}}">
                                        <label for="">Subscriber Email</label>
                                        <input type="text" class="form-control" name="subemail" value="{{$msp->subs_email}}">
                                        <br>
                                        <label for="">Subscribe Date</label>
                                        <input type="date" class="form-control" name="subdate" value="{{$msp->subscribe_date}}">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Newsletter</button>
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
