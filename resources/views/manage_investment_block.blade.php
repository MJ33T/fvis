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
                            <h3>Investment Block</h3>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 630px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th style="text-align: center">S.No</th>
                                <th style="text-align: center">Investment Block Name</th>
                                <th style="text-align: center">Currency</th>
                                <th style="text-align: center">Price</th>
                                <th style="text-align: center">Description</th>
                                <th style="text-align: center">Offers</th>
                                <th style="text-align: center">One Time Investors Introduction Fee</th>
                                <th style="text-align: center">Investment Monthly Income</th>
                                <th style="text-align: center">Lock in Preiod</th>
                                <th style="text-align: center">Extension Option</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($msps as $msp)
                                <tr>
                                <td style="text-align: center">{{$msp->id}}</td>
                                <td style="text-align: center">{{$msp->name}}</td>
                                <td style="text-align: center">{{$msp->currency}}</td>
                                <td style="text-align: center">{{$msp->price}}</td>
                                <td style="text-align: center">{{$msp->discription}}</td>
                                <td style="text-align: center">{{$msp->offers}}</td>
                                <td style="text-align: center">{{$msp->one_time_investors_introduction_fee}}</td>
                                <td style="text-align: center">{{$msp->investment_monthly_income}}</td>
                                <td style="text-align: center">{{$msp->extension_option}}</td>
                                <td style="text-align: center">{{$msp->status}}</td>

                                <td style="text-align: center">
                                    <div class="row">
                                    <div class="col">
                                    <a href="manage_investment_block/update_investment_block/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-warning">Update</a>
                                    </div>
                                    <div class="col">
                                    <a href="manage_investment_block/delete_investment_block/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-danger">Delete</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="add_investment_block" class="btn btn-primary">Add New Investment Block</a>
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
