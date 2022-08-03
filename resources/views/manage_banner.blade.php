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
                            <h3>Manage Bannner</h3>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 630px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th style="text-align: center">S.No</th>
                                <th style="text-align: center">Title</th>
                                <th style="text-align: center">Description</th>
                                <th style="text-align: center">Target URL</th>
                                <th style="text-align: center">Banner Image</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($msps as $msp)
                                <tr>
                                <td style="text-align: center">{{$msp->id}}</td>
                                <td style="text-align: center">{{$msp->banner_title}}</td>
                                <td style="text-align: center">{{'This banner for the '.$msp->pagetype}}</td>
                                <td style="text-align: center">{{$msp->pagetype}}</td>
                                <td style="text-align: center"><img src="{{asset('gallery/banner/'.$msp->bannerImage)}}" style="height: 100px; width: 150px;"></td>
                                <td style="text-align: center">{{$msp->status == 1?'Active':'Deactive'}}</td>
                                <td style="text-align: center">
                                    
                                    <a href="manage_banner/update_banner/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-warning">Update</a>
                                    
                                    <a href="manage_banner/delete_banner/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-danger">Delete</a>
                                    
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="add_banner" class="btn btn-primary">Add New Banner</a>
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
