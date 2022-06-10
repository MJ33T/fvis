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
                            <h3>Update Contact</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_contact/update_contact" method="POST">
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
                                        <input type="text" class="form-control" value="{{$msp->number}}" name="mn">
                                        <br>
                                        <label for="">Whatsapp Number</label>
                                        <input type="text" class="form-control" value="{{$msp->whatsapp}}" name="wn">
                                        <br>
                                        <label for="">Wechat ID</label>
                                        <input type="text" class="form-control" value="{{$msp->wechat}}" name="wid">
                                        <br>
                                        <label for="">Skype ID</label>
                                        <input type="text" class="form-control" value="{{$msp->skype}}" name="sid">
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" value="{{$msp->address}}" name="ad">
                                        <br>
                                        <label for="">Country</label>
                                        <input type="text" class="form-control" value="{{$msp->country}}" name="coun">
                                        <br>
                                        <label for="">Message</label>
                                        <input type="text" class="form-control" value="{{$msp->address}}" name="msg">
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Contact</button>
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
