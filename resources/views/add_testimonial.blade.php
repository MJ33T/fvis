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
                            <h3>Add New Testimonial</h3>
                        </div>
                        <div class="card-body">
                            <form action="add_testimonial" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name">
                                        <br>
                                        <label for="">Chinese Name</label>
                                        <input type="text" class="form-control" name="ch_name" placeholder="Enter Chinese Name">
                                        <br>
                                        <label for="">Medal Name</label>
                                        <input type="text" class="form-control" name="med_name" placeholder="Enter Medal Name">
                                        <br>
                                        <label for="">Chinese Medal Name</label>
                                        <input type="text" class="form-control" name="ch_med_name" placeholder="Enter Chinese Medal Name">
                                        <br>
                                        <label for="">Review</label>
                                        <input type="text" class="form-control" name="rev" placeholder="Enter Review">
                                        <br>
                                        <label for="">Chinese Review</label>
                                        <input type="text" class="form-control" name="ch_rev" placeholder="Enter Chinese Review">
                                        <br>
                                        <label for="">Image</label>
                                        <input type="file" class="form-control" name="img">
                                        <br>
                                        <label for="">Medal Image</label>
                                        <input type="file" class="form-control" name="med_img">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Testimonial</button>
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
