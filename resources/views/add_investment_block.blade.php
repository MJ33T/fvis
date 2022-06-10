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
                            <h3>Add New Investment Block</h3>
                        </div>
                        <div class="card-body">
                            <form action="add_investment_block" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Investment Block Name</label>
                                        <input type="text" class="form-control" name="ibname" placeholder="Enter Investment Block Name">
                                        <br>
                                        <label for="">Currency</label>
                                        <input type="text" class="form-control" name="cur" placeholder="Enter Currency">
                                        <br>
                                        <label for="">Price</label>
                                        <input type="text" class="form-control" name="price" placeholder="Enter Price">
                                        <br>
                                        <label for="">Offers</label>
                                        <input type="text" class="form-control" name="of" placeholder="Enter Offers">
                                        <br>
                                        <label for="">Description</label>
                                        <input type="text" class="form-control" name="des" placeholder="Enter Description">
                                        <br>
                                        <label for="">One Time Investors Introduction Fee</label>
                                        <input type="text" class="form-control" name="otiifee" placeholder="Enter One Time Investors Introduction Fee">
                                        <br>
                                        <label for="">Investment Monthly Income</label>
                                        <input type="text" class="form-control" name="imi" placeholder="Enter Investment Monthly Income">
                                        <br>
                                        <label for="">Lock in Preiod</label>
                                        <input type="text" class="form-control" name="lp" placeholder="Enter Lock in Preiod">
                                        <br>
                                        <label for="">Extension Option</label>
                                        <input type="text" class="form-control" name="eo" placeholder="Extension Option">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Investment Block</button>
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
