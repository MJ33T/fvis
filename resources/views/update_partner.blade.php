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
                            <h3>Update Partner</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_partner/update_partner" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Title</label>
                                        <input type="hidden" name="id" value="{{$partner->id}}">
                                        <input type="text" class="form-control" value="{{$partner->title}}" name="title" placeholder="Enter Partner Title">
                                        <br>
                                        <label for="">Chinese Title</label>
                                        <input type="text" class="form-control" name="chinese_title" value="{{$partner->chinese_title}}" placeholder="Enter Image Chinese Title">
                                        <br>
                                        <label for="">Website URL</label>
                                        <input type="text" class="form-control" name="website_url" value="{{$partner->web_url}}" placeholder="Enter Image Chinese Title">
                                        <br>
                                        <label for="">Chinese Website URL</label>
                                        <input type="text" class="form-control" name="chinese_website_url" value="{{$partner->chinese_web_url}}" placeholder="Enter Image Chinese Title">
                                        <br>
                                        <label for="">Upload Image</label>
                                        <input type="file" class="form-control" name="upload_logo" placeholder="Select Image">
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Partner</button>
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
