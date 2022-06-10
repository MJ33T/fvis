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
                            <h3>Add New Membership Plan</h3>
                        </div>
                        <div class="card-body">
                            <form action="add_membership_plan" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Membership Plan Name</label>
                                        <input type="text" class="form-control" name="mspname" placeholder="Enter Membership Plan Name">
                                        <br>
                                        <label for="">Membership Plan Fee</label>
                                        <input type="text" class="form-control" name="mspfee" placeholder="Enter Membership Plan Fee">
                                        <br>
                                        <label for="">Max Loan</label>
                                        <input type="text" class="form-control" name="mspmloan" placeholder="Enter Max Loan">
                                        <br>
                                        <label for="">Investment</label>
                                        <input type="text" class="form-control" name="investment" placeholder="Enter Investment">
                                        <br>
                                        <label for="">Investment Duration</label>
                                        <input type="text" class="form-control" name="investmentD" placeholder="Enter Investment">
                                        <br>
                                        <label for="">Monthly Fixed Income</label>
                                        <input type="text" class="form-control" name="mspmfi" placeholder="Enter Monthly Fixed Income">
                                        <br>
                                        <label for="">Position</label>
                                        <input type="text" class="form-control" name="position" placeholder="Enter Position">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Membership Plan</button>
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
