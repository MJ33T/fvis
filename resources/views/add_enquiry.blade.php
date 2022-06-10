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
                            <h3>Add New Enquiry</h3>
                        </div>
                        <div class="card-body">
                            <form action="add_enquiry" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name">
                                        <br>
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email">
                                        <br>
                                        <label for="">Mobile Number</label>
                                        <input type="text" class="form-control" name="number">
                                        <br>
                                        <label for="">Company Name</label>
                                        <input type="text" class="form-control" name="cmp">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Enquiry</button>
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
