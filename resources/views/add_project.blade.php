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
                            <h3>Add New Project</h3>
                        </div>
                        <div class="card-body">
                            <form action="add_project" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter Title">
                                        <br>
                                        <label for="">Chinese Title</label>
                                        <input type="text" class="form-control" name="chinese_title" placeholder="Enter Chinese Title">
                                        <br>
                                        <label for="">Upload Image</label>
                                        <input type="file" class="form-control" name="upload_image" required placeholder="Select Image">
                                        <br>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="ckeditor form-control" name="content"></textarea>                
                                        </div>
                                        <div class="form-group">
                                            <label>Chinese Description</label>
                                            <textarea class="ckeditor form-control" name="chinese_content"></textarea>                
                                        </div>
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Project</button>
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
