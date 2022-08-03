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
                            <h3>Member ID</h3>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 630px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th style="text-align: center">S.No</th>
                                <th style="text-align: center">First Name</th>
                                <th style="text-align: center">Last Name</th>
                                <th style="text-align: center">Phone Number</th>
                                <th style="text-align: center">Date</th>
                                <th style="text-align: center">Code</th>
                                <th style="text-align: center">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($msps as $msp)
                                <tr>
                                <td style="text-align: center">{{$msp->id}}</td>
                                <td style="text-align: center">{{$msp->fname}}</td>
                                <td style="text-align: center">{{$msp->lname}}</td>
                                <td style="text-align: center">{{$msp->number}}</td>
                                <td style="text-align: center">{{$msp->date}}</td>
                                <td style="text-align: center">{{$msp->code}}</td>
                                <td style="text-align: center">
                                    
                                    <a href="manage_memberid/update_memberid/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-warning">Update</a>
                                    
                                    <a href="manage_memberid/delete_memberid/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-danger">Delete</a>
                                    
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="add_memberid" class="btn btn-primary">Add New Member ID</a>
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
