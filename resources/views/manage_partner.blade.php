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
                            <h3>Manage Partner</h3>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 630px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th style="text-align: center">S.No</th>
                                <th style="text-align: center">Title</th>
                                <th style="text-align: center">Logo</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($partners as $partner)
                                <tr>
                                <td style="text-align: center">{{$partner->id}}</td>
                                <td style="text-align: center">{{$partner->title}}</td>
                                <td style="text-align: center"><img src="{{asset('gallery/logos/'.$partner->logo)}}" style="height: 100px; width: 150px;"></td>
                                <td style="text-align: center">{{$partner->status==1?'Active' : 'Deactive'}}</td>
                                <td style="text-align: center">
                                    <div class="row">
                                    <div class="col">
                                    <a href="manage_partner/update_partner/{{Crypt::encrypt($partner['id'])}}" type="submit" class="btn btn-warning">Update</a>
                                    </div>
                                    <div class="col">
                                    <a href="manage_partner/delete_partner/{{Crypt::encrypt($partner['id'])}}" type="submit" class="btn btn-danger">Delete</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="add_partner" class="btn btn-primary">Add New Partner</a>
                            <span class="pag" style="float: right">
                                {{ $partners->links('pagination::bootstrap-4') }}
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
