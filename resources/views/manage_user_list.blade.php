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
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>User List</h3>
                                </div>
                                <div class="col-md-6">
                                    <form action="/admin/search_user" method="POST">
                                        @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control search_input" name="search" placeholder="Search">
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary custom_btn" >Search</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 630px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th style="text-align: center">S.No</th>
                                <th style="text-align: center">Name</th>
                                <th style="text-align: center">Email</th>
                                <th style="text-align: center">Password</th>
                                <th style="text-align: center">Created At</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($msps as $msp)
                                <tr>
                                <td style="text-align: center">{{$msp->id}}</td>
                                <td style="text-align: center">{{$msp->f_name.' '.$msp->l_name}}</td>
                                <td style="text-align: center">{{$msp->email}}</td>
                                <td style="text-align: center">{{$msp->password}}</td>
                                <td style="text-align: center">{{$msp->created_at}}</td>
                                <td style="text-align: center">{{$msp->status==1?'Active' : 'Deactive'}}</td>
                                <td style="text-align: center">
                                    
                                    <a href="manage_user_list/change_status_user_list/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-primary">Status</a>
                                    <a href="manage_user_list/change_password_user_list/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-warning">Change Password</a>
                                    <a href="manage_user_list/delete_user_list/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-danger">Delete</a>
                                    
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            
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
    .custom_btn{
        margin-left: 80%
    }
    .search_input{
        margin-left: 80%
    }
</style>

@endsection
