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
                            <h3>Manage Gallery</h3>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 630px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th style="text-align: center">S.No</th>
                                <th style="text-align: center">Title</th>
                                <th style="text-align: center">Image</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($gallerys as $gallery)
                                <tr>
                                <td style="text-align: center">{{$gallery->id}}</td>
                                <td style="text-align: center">{{$gallery->title}}</td>
                                <td style="text-align: center"><img src="{{asset('gallery/images/'.$gallery->image)}}" style="height: 100px; width: 150px;"></td>
                                <td style="text-align: center">{{$gallery->status}}</td>
                                <td style="text-align: center">
                                    
                                    <a href="manage_gallery/update_image/{{Crypt::encrypt($gallery['id'])}}" type="submit" class="btn btn-warning">Update</a>
                                    
                                    <a href="manage_gallery/delete_image/{{Crypt::encrypt($gallery['id'])}}" type="submit" class="btn btn-danger">Delete</a>
                                    
                                    
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="add_image" class="btn btn-primary">Add New Image</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
          <!-- Main row -->
    </section>
</div>

@endsection
