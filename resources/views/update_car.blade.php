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
                            <h3>Update Image</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_car/update_car" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="{{$car->id}}">
                                        <label for="">Car Name</label>
                                        <input type="text" class="form-control" value="{{$car->carname}}" name="carname" placeholder="Enter Image Title">
                                        <br>
                                        <label for="">Offer</label>
                                        <input type="text" class="form-control" name="offer" value="{{$car->caroffer}}" placeholder="Enter Image Chinese Title">
                                        <br>
                                        <label for="">Preview Image : </label>
                                        <img src="{{asset('gallery/cars/'.$car->carimage)}}" style="height: 100px; width: 150px;">
                                        <br>
                                        <label for="">Upload Image</label>
                                        <input type="file" class="form-control" name="upload_image" placeholder="Select Image">
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Car</button>
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
