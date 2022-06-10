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
                            <h3>Car List</h3>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 630px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th style="text-align: center">S.No</th>
                                <th style="text-align: center">Title</th>
                                <th style="text-align: center">Image</th>
                                <th style="text-align: center">Offer</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cars as $car)
                                <tr>
                                <td style="text-align: center">{{$car->id}}</td>
                                <td style="text-align: center">{{$car->carname}}</td>
                                <td style="text-align: center"><img src="{{asset('gallery/cars/'.$car->carimage)}}" style="height: 100px; width: 150px;"></td>
                                <td style="text-align: center">{{$car->caroffer}}</td>
                                <td style="text-align: center">{{$car->status}}</td>
                                <td style="text-align: center">
                                    <div class="row">
                                    <div class="col">
                                    <a href="manage_car/update_car/{{Crypt::encrypt($car['id'])}}" type="submit" class="btn btn-warning">Update</a>
                                    </div>
                                    <div class="col">
                                    <a href="manage_car/delete_car/{{Crypt::encrypt($car['id'])}}" type="submit" class="btn btn-danger">Delete</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="add_car" class="btn btn-primary">Add New Car</a>
                            <span class="pag" style="float: right">
                                {{ $cars->links('pagination::bootstrap-4') }}
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
