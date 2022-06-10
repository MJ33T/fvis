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
                            <h3>Manage Testimonial</h3>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 630px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th style="text-align: center">S.No</th>
                                <th style="text-align: center">Name</th>
                                <th style="text-align: center">Medal Name</th>
                                <th style="text-align: center">Review</th>
                                <th style="text-align: center">Medal Image</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($msps as $msp)
                                <tr>
                                <td style="text-align: center">{{$msp->id}}</td>
                                <td style="text-align: center">{{$msp->name}}</td>
                                <td style="text-align: center">{{$msp->company_name}}</td>
                                <td style="text-align: center">{{$msp->review}}</td>
                                <td style="text-align: center"><img src="{{asset('gallery/testimonial/med_image/'.$msp->med_image)}}" style="height: 100px; width: 150px;"></td>
                                <td style="text-align: center">{{$msp->status}}</td>
                                <td style="text-align: center">
                                    
                                    <a href="manage_testimonial/update_testimonial/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-warning">Update</a>
                                    
                                    <a href="manage_testimonial/delete_testimonial/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-danger">Delete</a>
                                    
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="add_testimonial" class="btn btn-primary">Add New Testimonial</a>
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
