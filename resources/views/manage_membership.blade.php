@php
  use App\Models\CisData;
  use App\Models\PqfData;
  use App\Models\IlrfData;
@endphp

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
                            <h3>Manage Membership User</h3>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 630px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th style="text-align: center">S.No</th>
                                <th style="text-align: center">Name</th>
                                <th style="text-align: center">Email</th>
                                <th style="text-align: center">Acceptance Code</th>
                                <th style="text-align: center">Action</th>
                                <th>Delete</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($msps as $msp)
                                <tr>
                                <td style="text-align: center">{{$msp->id}}</td>
                                <td style="text-align: center">{{$msp->f_name.' '.$msp->l_name}}</td>
                                <td style="text-align: center">{{$msp->email}}</td>
                                <td style="text-align: center">{{$msp->acceptance_code}}</td>
                                <td style="text-align: center">
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-sm btn-warning btn-white dropdown-toggle" aria-expanded="true">
                                          Update
                                          {{-- <i class="ace-icon fa fa-angle-down icon-on-right"></i> --}}
                                        </button>
                                        <ul class="dropdown-menu">
            
                                          <!-- <li class="divider"></li> -->
                                          
                                          <li>
                                            <a href="manage_membership/update_membership_perinfo/{{Crypt::encrypt($msp['user_id'])}}"> Personal Information</a>
                                          </li>
                                          
                                          <li class="divider"></li>
                                          <li>
                                            <a href="manage_membership/update_membership_cominfo/{{Crypt::encrypt($msp['user_id'])}}"> Company Information</a>
                                          </li>
                                          <li class="divider"></li>
                                          
                                          <li>
                                            <a href="manage_membership/update_membership_cisinfo/{{Crypt::encrypt($msp['user_id'])}}"> CIS Details</a>
                                          </li>
                                          
                                          <li></li>
                                          
                                         
                                            
                                          <li class="divider"></li>
                                          
                                          
                                          <li>
                                            <a href="manage_membership/update_membership_pqfinfo/{{Crypt::encrypt($msp['user_id'])}}"> PQF Details</a>
                                          </li>
                                          <li class="divider"></li>
                                          
                                          
                                          <li></li>
                                          <li>
                                            <a href="manage_membership/update_membership_ilrfinfo/{{Crypt::encrypt($msp['user_id'])}}"> ILRF Details</a>
                                          </li>
                                         
                                        </ul>
                                      </div>
                                    {{-- <a href="manage_social/update_social/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-warning">Update</a> --}}
                                    
                                </td>
                                <td><a href="manage_membership/delete_membership/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-danger">Delete</a></td>
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
</style>

@endsection
