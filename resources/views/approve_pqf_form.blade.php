@php
    use App\Models\MembershipUser;
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
                            <h3>Approve PQF Form</h3>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 630px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th style="text-align: center">S.No</th>
                                <th style="text-align: center">Name</th>
                                <th style="text-align: center">User Name</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($msps as $msp)
                                @php            
                                    $data = MembershipUser::where(['user_id'=>$msp->user_id])->first();     
                                @endphp
                                <tr>
                                    <td style="text-align: center">{{$msp->id}}</td>
                                    <td style="text-align: center">{{$data->f_name.' '.$data->l_name}}</td>
                                    <td style="text-align: center">{{$data->email}}</td>
                                    <td style="text-align: center">{{($msp->status == 1)? 'Active' : 'Deactive'}}</td>
                                    <td style="text-align: center">
                                        <a href="approve_pqf_form/view_pqf/{{Crypt::encrypt($msp->id)}}" type="submit" class="btn btn-primary">View</a>
                                        <a href="approve_pqf_form/change_status/{{Crypt::encrypt($msp->id)}}" type="submit" class="btn btn-warning">Change Status</a>   
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <span class="pag" style="float: right">
                                {{-- {{ $msps->links('pagination::bootstrap-4') }} --}}
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