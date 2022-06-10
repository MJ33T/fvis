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
                            <form action="/admin/manage_gallery/update_image" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Title</label>
                                        <input type="hidden" name="id" value="{{$image->id}}">
                                        <input type="text" class="form-control" value="{{$image->title}}" name="title" placeholder="Enter Image Title">
                                        <br>
                                        <label for="">Chinese Title</label>
                                        <input type="text" class="form-control" name="chinese_title" value="{{$image->chinese_title}}" placeholder="Enter Image Chinese Title">
                                        <br>
                                        <label for="">Preview Image : </label>
                                        <img src="{{asset('gallery/images/'.$image->image)}}" style="height: 100px; width: 150px;">
                                        <br>
                                        <label for="">Upload Image</label>
                                        <input type="file" class="form-control" name="upload_image" placeholder="Select Image">
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Image</button>
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
