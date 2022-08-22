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
                            <h3>Update PQF Details</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_membership/update_membership_pqfinfo" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="hidden" name="user_id" value="{{$msp->user_id}}">
                                        <label for="">Name the major company shareholders / owners and percentage of ownership</label>
                                        <textarea type="text" class="form-control" name="name_major">{{$msp->name_major}}</textarea>
                                        <br>
                                        <label for="">Company Name</label>
                                        <input type="text" class="form-control" name="com_name" value="{{$msp->com_name}}">
                                        <br>
                                        <label for="">Web Address</label>
                                        <input type="text" class="form-control" name="web_url" value="{{$msp->web_url}}">
                                        <br>
                                        <h5 style="color: #00a2ff">SCOPE OF PROJECT</h5>
                                        <br>
                                        <label for="">Provide a detailed description of the business, what the business does and/or is proposing to do</label>
                                        <textarea type="text" class="form-control" name="buss_disc">{{$msp->buss_disc}}</textarea>
                                        <br>
                                        <label for="">Number Of year in business</label>
                                        <input type="text" class="form-control" name="buss_year" value="{{$msp->buss_year}}">
                                        <br>
                                        <label for="">Number Of Employees</label>
                                        <input type="text" class="form-control" name="buss_emply" value="{{$msp->buss_emply}}">
                                        <br>
                                        <label for="">Do you have a Legal Representative or Broker for this Loan acquisition (if any)</label>
                                        <input type="text" class="form-control" name="broker" value="{{$msp->broker}}">
                                        <br>
                                        <h5 style="color: #00a2ff">INVESTMENT PURCHASES</h5>
                                        <br>
                                        <label for="">Length of Investment - how long will you need these invested funds</label>
                                        <textarea type="text" class="form-control" name="length_Investment">{{$msp->length_Investment}}</textarea>
                                        <br>
                                        <label for="">Assets to be purchased (attach a schedule if not enough space below)</label>
                                        <textarea type="text" class="form-control" name="assets_purch">{{$msp->assets_purch}}</textarea>
                                        <br>
                                        <h5 style="color: #00a2ff">FUNDING PROCESS</h5>
                                        <br>
                                        <label for="">Have you acquired all the licenses and permits from the government (is the project shovel ready?)</label>
                                        <textarea type="text" class="form-control" name="licenses_permits">{{$msp->licenses_permits}}</textarea>
                                        <br>
                                        <h5 style="color: #00a2ff">MANAGEMENT EXPERIENCE</h5>
                                        <br>
                                        <label for="">Briefly list your management experience</label>
                                        <textarea type="text" class="form-control" name="manag_exp">{{$msp->manag_exp}}</textarea>
                                        <br>
                                        <h5 style="color: #00a2ff">FUNDING PROCESS</h5>
                                        <br>
                                        <label for="">Ammount Of loan required</label>
                                        <textarea type="text" class="form-control" name="loan_req">{{$msp->loan_req}}</textarea>
                                        <br>
                                        <label for="">How much money do you need to reach your immediate goals</label>
                                        <textarea type="text" class="form-control" name="money_need">{{$msp->money_need}}</textarea>
                                        <br>
                                        <label for="">If applicable, please indicate the amount of funding already invested into this project</label>
                                        <textarea type="text" class="form-control" name="indicate_amount">{{$msp->indicate_amount}}</textarea>
                                        <br>
                                        <label for="">What are your Project / Venture Return on Investment (ROI)</label>
                                        <textarea type="text" class="form-control" name="ROI">{{$msp->ROI}}</textarea>
                                        <br>
                                        <label for="">How long have you been searching for funding</label>
                                        <textarea type="text" class="form-control" name="searching_funding">{{$msp->searching_funding}}</textarea>
                                        <br>
                                        <label for="">Which Companies or Investors have you contacted in the past</label>
                                        <textarea type="text" class="form-control" name="com_Investors">{{$msp->com_Investors}}</textarea>
                                        <br>
                                        <label for="">If your Project financing request has been rejected in the past, then why was it rejected?</label>
                                        <textarea type="text" class="form-control" name="financing_request">{{$msp->financing_request}}</textarea>
                                        <br>
                                        <label for="">What sort of collateral can you offer for this Loan finance: (if any please specify)</label>
                                        <textarea type="text" class="form-control" name="collateral">{{$msp->collateral}}</textarea>
                                        <br>
                                        <label for="">What is the net worth of company and value of the total assets? (If any please specify)</label>
                                        <textarea type="text" class="form-control" name="worth_company" >{{$msp->worth_company}}</textarea>
                                        <br>
                                        <label for="">Does your company own other properties outside this project venture</label>
                                        <textarea type="text" class="form-control" name="project_venture">{{$msp->project_venture}}</textarea>
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update PQF Details</button>
                        </div>
                    </form> 
                    </div>

                </div>
            </div>
        </div>
          <!-- Main row -->
    </section>
</div>

@endsection
