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
                            <h3>Edit Other Service</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_other_service/updated_other_service" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Title</label>
                                        <input type="hidden" name="id" value="{{$services->id}}">
                                        <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{$services->title}}">
                                        <br>
                                        <label for="">Upload Image</label>
                                        <input type="file" class="form-control" name="upload_image"  placeholder="Select Image">
                                        <br>
                                        <label for="">Preview Image: </label>
                                        <img src="{{asset('gallery/otherservice/'.$services->image)}}" style="height: 100px; width: 150px;">
                                        <br>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="ckeditor form-control" name="content">{{$services->content}}</textarea>                
                                        </div>
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Other Service</button>
                        </div>
                    </form> 
                    </div>

                </div>
            </div>
        </div>
          <!-- Main row -->
    </section>
</div>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>

@endsection
