@extends('master')
@section('master')

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
                            <h3>Manage Other Service</h3>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 630px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th style="text-align: center">S.No</th>
                                <th style="text-align: center">Title</th>
                                <th style="text-align: center">Content</th>
                                <th style="text-align: center">Image</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $project)
                                <tr>
                                <td style="text-align: center">{{$project->id}}</td>
                                <td style="text-align: center">{{$project->title}}</td>
                                <td style="text-align: center">{!!$project->content!!}</td>
                                <td style="text-align: center"><img src="{{asset('gallery/otherservice/'.$project->image)}}" style="height: 100px; width: 150px;"></td>
                                <td style="text-align: center">{{$project->status==1?'Active' : 'Deactive'}}</td>
                                <td style="text-align: center">
                                
                                    <a href="manage_other_service/edit_other_service/{{Crypt::encrypt($project['id'])}}" type="submit" class="btn btn-success">Update</a>
                                    
                                    <a href="manage_other_service/update_other_service/{{Crypt::encrypt($project['id'])}}" type="submit" class="btn btn-warning">Active</a>
                                   
                                    <a href="manage_other_service/delete_other_service/{{Crypt::encrypt($project['id'])}}" type="submit" class="btn btn-danger">Delete</a>
                            
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="add_new_service" class="btn btn-primary">Add New Service</a>
                            <span class="pag" style="float: right">
                                {{-- {{ $projects->links('pagination::bootstrap-4') }} --}}
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