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
                            <h3>Membership Plan</h3>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 630px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th style="text-align: center">S.No</th>
                                <th style="text-align: center">Membership Plan Name</th>
                                <th style="text-align: center">Membership Plan Fee</th>
                                <th style="text-align: center">Max Loan</th>
                                <th style="text-align: center">Investment</th>
                                <th style="text-align: center">Investment Duration</th>
                                <th style="text-align: center">Monthly Fixed Income</th>
                                <th style="text-align: center">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($msps as $msp)
                                <tr>
                                <td style="text-align: center">{{$msp->id}}</td>
                                <td style="text-align: center">{{$msp->plan_name}}</td>
                                <td style="text-align: center">{{$msp->plan_fee}}</td>
                                <td style="text-align: center">{{$msp->annual_membership_fee}}</td>
                                <td style="text-align: center">{{$msp->investment}}</td>
                                <td style="text-align: center">{{$msp->investment_duration}}</td>
                                <td style="text-align: center">{{$msp->monthly_fix_income}}</td>
                                <td style="text-align: center">
                                    <div class="row">
                                    <div class="col">
                                    <a href="manage_membership_plan/update_membership_plan/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-warning">Update</a>
                                    </div>
                                    <div class="col">
                                    <a href="manage_membership_plan/delete_membership_plan/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-danger">Delete</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="add_membership_plan" class="btn btn-primary">Add New Membership Plan</a>
                            <span class="pag" style="float: right">
                                {{ $msps->links('pagination::bootstrap-4') }}
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
          <!-- Main row -->
    </section>
</div>
<style>
    .w-5{
        display: inline;
    }
</style>

@endsection
