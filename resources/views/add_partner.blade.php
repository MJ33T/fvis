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
                            <h3>Add New Partner</h3>
                        </div>
                        <div class="card-body">
                            <form action="add_partner" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter Title">
                                        <br>
                                        <label for="">Chinese Title</label>
                                        <input type="text" class="form-control" name="chinese_title" placeholder="Enter Chinese Title">
                                        <br>
                                        <label for="">Website URL</label>
                                        <input type="text" class="form-control" name="website_url" placeholder="Enter Website URL">
                                        <br>
                                        <label for="">Chinese Website URL</label>
                                        <input type="text" class="form-control" name="chinese_website_url" placeholder="Enter Chinese Website URL">
                                        <br>
                                        <label for="">Upload Logo</label>
                                        <input type="file" class="form-control" name="upload_logo" required placeholder="Select Image">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Partner</button>
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
