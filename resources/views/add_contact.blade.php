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
                            <h3>Add New Contact</h3>
                        </div>
                        <div class="card-body">
                            <form action="add_contact" method="POST" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control" name="mn">
                                        <br>
                                        <label for="">Whatsapp Number</label>
                                        <input type="text" class="form-control" name="wn">
                                        <br>
                                        <label for="">Wechat ID</label>
                                        <input type="text" class="form-control" name="wid">
                                        <br>
                                        <label for="">Skype ID</label>
                                        <input type="text" class="form-control" name="sid">
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="ad">
                                        <br>
                                        <label for="">Country</label>
                                        <input type="text" class="form-control" name="coun">
                                        <br>
                                        <label for="">Message</label>
                                        <input type="text" class="form-control" name="msg">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Contact</button>
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
