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
                            <h3>Contact List</h3>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 630px;">
                            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th style="text-align: center">S.No</th>
                                <th style="text-align: center">Name</th>
                                <th style="text-align: center">Email</th>
                                <th style="text-align: center">Mobile Number</th>
                                <th style="text-align: center">Whatsapp Number</th>
                                <th style="text-align: center">Wechat ID</th>
                                <th style="text-align: center">Skype ID<</th>
                                <th style="text-align: center">Address</th>
                                <th style="text-align: center">Country</th>
                                <th style="text-align: center">Message</th>
                                <th style="text-align: center">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($msps as $msp)
                                <tr>
                                <td style="text-align: center">{{$msp->id}}</td>
                                <td style="text-align: center">{{$msp->name}}</td>
                                <td style="text-align: center">{{$msp->email}}</td>
                                <td style="text-align: center">{{$msp->number}}</td>
                                <td style="text-align: center">{{$msp->whatsapp}}</td>
                                <td style="text-align: center">{{$msp->wechat}}</td>
                                <td style="text-align: center">{{$msp->skype}}</td>
                                <td style="text-align: center">{{$msp->address}}</td>
                                <td style="text-align: center">{{$msp->country}}</td>
                                <td style="text-align: center">{{$msp->message}}</td>

                                <td style="text-align: center">
                                    
                                    <a href="manage_contact/update_contact/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-warning">Update</a>
                                    <a href="manage_contact/delete_contact/{{Crypt::encrypt($msp['id'])}}" type="submit" class="btn btn-danger">Delete</a>
                                    
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                            
                        </div>
                        <div class="card-footer">
                            <a href="add_contact" class="btn btn-primary">Add New Contact</a>
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
