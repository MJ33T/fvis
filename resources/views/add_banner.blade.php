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
                            <h3>Add New Banner</h3>
                        </div>
                        <div class="card-body">
                            <form action="add_banner" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Title</label>
                                        <input type="text" class="form-control" name="banner_title" placeholder="Enter Title">
                                        <br>
                                        <label for="">Banner For</label>
                                        <select class="form-control" name="pagetype">
                                            <option selected>Homepage</option>
                                            <option >Financing</option>
                                            <option >Trading</option>
                                            <option >Login</option>
                                            <option >Signup</option>
                                            <option >Investment</option>
                                            <option >Consultancy</option>
                                            <option >Others</option>
                                        </select>
                                        <br>
                                        <label for="">Description</label>
                                        <input type="text" class="form-control" name="des" placeholder="Enter Description">
                                        <br>
                                        <label for="">Target URL</label>
                                        <input type="text" class="form-control" name="target_url" placeholder="Enter Target URL">
                                        <br>
                                        <label for="">Upload Banner</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Banner</button>
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
