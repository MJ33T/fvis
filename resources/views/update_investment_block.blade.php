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
                            <h3>Update Investment Block</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_membership_plan/update_membership_plan" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="{{$msp->id}}">
                                        <label for="">Investment Block Name</label>
                                        <input type="text" class="form-control" name="ibname" value="{{$msp->name}}" placeholder="Enter Investment Block Name">
                                        <br>
                                        <label for="">Currency</label>
                                        <input type="text" class="form-control" name="cur" value="{{$msp->currency}}" placeholder="Enter Currency">
                                        <br>
                                        <label for="">Price</label>
                                        <input type="text" class="form-control" name="price" value="{{$msp->price}}" placeholder="Enter Price">
                                        <br>
                                        <label for="">Description</label>
                                        <input type="text" class="form-control" name="des" value="{{$msp->discription}}" placeholder="Enter Description">
                                        <br>
                                        <label for="">One Time Investors Introduction Fee</label>
                                        <input type="text" class="form-control" name="otiifee" value="{{$msp->one_time_investors_introduction_fee}}" placeholder="Enter One Time Investors Introduction Fee">
                                        <br>
                                        <label for="">Investment Monthly Income</label>
                                        <input type="text" class="form-control" name="imi" value="{{$msp->investment_monthly_income}}" placeholder="Enter Investment Monthly Income">
                                        <br>
                                        <label for="">Lock in Preiod</label>
                                        <input type="text" class="form-control" name="lp" value="{{$msp->lock_in_preiod}}" placeholder="Enter Lock in Preiod">
                                        <br>
                                        <label for="">Extension Option</label>
                                        <input type="text" class="form-control" name="eo" value="{{$msp->extension_option}}" placeholder="Extension Option">
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Investment Block</button>
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
