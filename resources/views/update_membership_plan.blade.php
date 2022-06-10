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
                            <h3>Update Membership Plan</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_membership_plan/update_membership_plan" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="{{$msp->id}}">
                                        <label for="">Membership Plan Name</label>
                                        <input type="text" class="form-control" name="mspname" value="{{$msp->plan_name}}" placeholder="Enter Membership Plan Name">
                                        <br>
                                        <label for="">Membership Plan Fee</label>
                                        <input type="text" class="form-control" name="mspfee" value="{{$msp->plan_fee}}" placeholder="Enter Membership Plan Fee">
                                        <br>
                                        <label for="">Max Loan</label>
                                        <input type="text" class="form-control" name="mspmloan" value="{{$msp->annual_membership_fee}}" placeholder="Enter Max Loan">
                                        <br>
                                        <label for="">Investment</label>
                                        <input type="text" class="form-control" name="investment" value="{{$msp->investment}}" placeholder="Enter Investment">
                                        <br>
                                        <label for="">Investment Duration</label>
                                        <input type="text" class="form-control" name="investmentD" value="{{$msp->investment_duration}}" placeholder="Enter Investment">
                                        <br>
                                        <label for="">Monthly Fixed Income</label>
                                        <input type="text" class="form-control" name="mspmfi" value="{{$msp->monthly_fix_income}}" placeholder="Enter Monthly Fixed Income">
                                        <br>
                                        <label for="">Position</label>
                                        <input type="text" class="form-control" name="position" value="{{$msp->position}}" placeholder="Enter Position">
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Membership Plan</button>
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
