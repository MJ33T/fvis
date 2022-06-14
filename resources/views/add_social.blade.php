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
                            <h3>Add New Social Link</h3>
                        </div>
                        <div class="card-body">
                            <form action="add_social" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter Title">
                                        <br>
                                        <label for="">Social URL</label>
                                        <input type="text" class="form-control" name="social_url" placeholder="Enter Social URL">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Social Link</button>
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
