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
                            <h3>Update ILRF Details</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_membership/update_membership_ilrfinfo" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 style="color: #00a2ff">Internal Loan Review</h5>
                                            </div>
                                            <div class="col-md">
                                                <input type="hidden" name="user_id" value="{{$msp->user_id}}">
                                                <label for="">Primary Officer</label>
                                                <input type="text" class="form-control" name="primary_off" value="{{$msp->primary_off}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">Date Prepared</label>
                                                <input type="text" class="form-control" name="date_pre" value="{{$msp->date_pre}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">Prepared By</label>
                                                <input type="text" class="form-control" name="prepared_by" value="{{$msp->prepared_by}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Loan Request (Business Information)</h5>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Borrower</label>
                                                <textarea type="text" class="form-control" name="loan_request">{{$msp->loan_request}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Business Information</h5>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Form</label>
                                                <input type="text" class="form-control" name="bussi_from" value="{{$msp->bussi_from}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">Organ Date</label>
                                                <input type="text" class="form-control" name="organ_date" value="{{$msp->organ_date}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">Type</label>
                                                <input type="text" class="form-control" name="type" value="{{$msp->type}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">Management</label>
                                                <input type="text" class="form-control" name="manag" value="{{$msp->manag}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <br>
                                                <label for="">Ownership</label>
                                                <input type="text" class="form-control" name="ownership" value="{{$msp->ownership}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <br>
                                                <label for="">Guarantors: Typically the owner of the business</label>
                                                <textarea type="text" class="form-control" name="guarantors" >{{$msp->guarantors}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <br>
                                                <label for="">Request</label>
                                                <textarea type="text" class="form-control" name="reque" >{{$msp->reque}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <br>
                                                <label for="">Purpose</label>
                                                <textarea type="text" class="form-control" name="purpose">{{$msp->purpose}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Terms</h5>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Type</label>
                                                <input type="text" class="form-control" name="terms_type" value="{{$msp->terms_type}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">Amount</label>
                                                <input type="text" class="form-control" name="terms_amount" value="{{$msp->terms_amount}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">Rate/Fees</label>
                                                <input type="text" class="form-control" name="terms_rate" value="{{$msp->terms_rate}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">Term</label>
                                                <input type="text" class="form-control" name="terms_term" value="{{$msp->terms_term}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">Repayment</label>
                                                <input type="text" class="form-control" name="terms_repay" value="{{$msp->terms_repay}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_type2" value="{{$msp->terms_type2}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_amount2" value="{{$msp->terms_amount2}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_rate2" value="{{$msp->terms_rate2}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_term2" value="{{$msp->terms_term2}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_repay2" value="{{$msp->terms_repay2}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_type3" value="{{$msp->terms_type3}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_amount3" value="{{$msp->terms_amount3}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_rate3" value="{{$msp->terms_rate3}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_term3" value="{{$msp->terms_term3}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_repay3" value="{{$msp->terms_repay3}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Source of Repayment</h5>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Primary</label>
                                                <input type="text" class="form-control" name="source_primary" value="{{$msp->source_primary}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">Secondary</label>
                                                <input type="text" class="form-control" name="source_secondary" value="{{$msp->source_secondary}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">Tertiary</label>
                                                <input type="text" class="form-control" name="source_teriary" value="{{$msp->source_teriary}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Collateral Description</label>
                                                <textarea type="text" class="form-control" name="source_desi">{{$msp->source_desi}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Collateral Valuation</h5>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Type</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Appraised Value</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">% of ADV</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Debt</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Avail.Equity</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">LTV</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Inventory</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_app" value="{{$msp->colla_app}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">30%</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_debt" value="{{$msp->colla_debt}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_avail" value="{{$msp->colla_avail}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="coll_ltv" value="{{$msp->coll_ltv}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Equipment</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_app2" value="{{$msp->colla_app2}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">75%</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_debt2" value="{{$msp->colla_debt2}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_avail2" value="{{$msp->colla_avail2}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="coll_ltv2" value="{{$msp->coll_ltv2}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Marketable Securities</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_app3" value="{{$msp->colla_app3}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">70%</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_debt3" value="{{$msp->colla_debt3}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_avail3" value="{{$msp->colla_avail3}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="coll_ltv3" value="{{$msp->coll_ltv3}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">C and R Property</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_app4" value="{{$msp->colla_app4}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">75%</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_debt4" value="{{$msp->colla_debt4}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_avail4" value="{{$msp->colla_avail4}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="coll_ltv4" value="{{$msp->coll_ltv4}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Vacant Land</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_app5" value="{{$msp->colla_app5}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">30-50%</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_debt5" value="{{$msp->colla_debt5}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_avail5" value="{{$msp->colla_avail5}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="coll_ltv5" value="{{$msp->coll_ltv5}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Accounts Receivable</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_app6" value="{{$msp->colla_app6}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">75% (0-90 days)</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_debt6" value="{{$msp->colla_debt6}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_avail6" value="{{$msp->colla_avail6}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="coll_ltv6" value="{{$msp->coll_ltv6}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Flood Hazard</label>
                                                <textarea type="text" class="form-control" name="flood_haz">{{$msp->flood_haz}}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Environmental Concerns</label>
                                                <textarea type="text" class="form-control" name="envi_concer">{{$msp->envi_concer}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Bow Debt</h5>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Type</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Open</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">High</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Bal.</label>
                                            </div>
                                            <div class="col-md">
                                                <label for=""># of REN</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Rate</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Terms</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Sec</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">LTV</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_type" value="{{$msp->bow_type}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_open" value="{{$msp->bow_open}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_high" value="{{$msp->bow_high}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_bal" value="{{$msp->bow_bal}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_ren" value="{{$msp->bow_ren}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_rate" value="{{$msp->bow_rate}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_terms" value="{{$msp->bow_terms}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_sec" value="{{$msp->bow_sec}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_ltv" value="{{$msp->bow_ltv}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_type2" value="{{$msp->bow_type2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_open2" value="{{$msp->bow_open2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_high2" value="{{$msp->bow_high2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_bal2" value="{{$msp->bow_bal2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_ren2" value="{{$msp->bow_ren2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_rate2" value="{{$msp->bow_rate2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_terms2" value="{{$msp->bow_terms2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_sec2" value="{{$msp->bow_sec2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_ltv2" value="{{$msp->bow_ltv2}}">
                                            </div> 
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_type3" value="{{$msp->bow_type3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_open3" value="{{$msp->bow_open3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_high3" value="{{$msp->bow_high3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_bal3" value="{{$msp->bow_bal3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_ren3" value="{{$msp->bow_ren3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_rate3" value="{{$msp->bow_rate3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_terms3" value="{{$msp->bow_terms3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_sec3" value="{{$msp->bow_sec3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_ltv3" value="{{$msp->bow_ltv3}}">
                                            </div> 
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Bow Payment History</label>
                                                <textarea type="text" class="form-control" name="bow_pay_his">{{$msp->bow_pay_his}}</textarea> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Line of Credit Usage</h5>
                                            </div>
                                            <div class="col-md-12">
                                                <label for=""># of Days at Zero</label>
                                                <textarea type="text" class="form-control" name="days_zero">{{$msp->days_zero}}</textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <br>
                                                <label for="">Other Debts</label>
                                                <textarea type="text" class="form-control" name="other_debts">{{$msp->other_debts}}</textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <br>
                                                <label for="">Low Balance</label>
                                                <textarea type="text" class="form-control" name="low_bal">{{$msp->low_bal}}</textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <br>
                                                <label for="">Other Debts</label>
                                                <textarea type="text" class="form-control" name="othter_debts2">{{$msp->othter_debts2}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Depository Relationship</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="">Name</label>
                                            </div>
                                            <div class="col">
                                                <label for="">Acct #</label>
                                            </div>
                                            <div class="col">
                                                <label for="">Type</label>
                                            </div>
                                            <div class="col">
                                                <label for="">Opened</label>
                                            </div>
                                            <div class="col">
                                                <label for=""># of REN</label>
                                            </div>
                                            <div class="col">
                                                <label for="">Balance</label>
                                            </div>
                                            <div class="col">
                                                <label for="">Avg. Col. Bal</label>
                                            </div>
                                            <div class="col">
                                                <label for="">Rate</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_name" value="{{$msp->dep_name}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_acct" value="{{$msp->dep_acct}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_type" value="{{$msp->dep_type}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_opened" value="{{$msp->dep_opened}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_ren" value="{{$msp->dep_ren}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_bal" value="{{$msp->dep_bal}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_avg" value="{{$msp->dep_avg}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_rate" value="{{$msp->dep_rate}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_name2" value="{{$msp->dep_name2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_acct2" value="{{$msp->dep_acct2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_type2" value="{{$msp->dep_type2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_opened2" value="{{$msp->dep_opened2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_ren2" value="{{$msp->dep_ren2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_bal2" value="{{$msp->dep_bal2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_avg2" value="{{$msp->dep_avg2}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_rate2" value="{{$msp->dep_rate2}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_name3" value="{{$msp->dep_name3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_acct3" value="{{$msp->dep_acct3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_type3" value="{{$msp->dep_type3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_opened3" value="{{$msp->dep_opened3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_ren3" value="{{$msp->dep_ren3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_bal3" value="{{$msp->dep_bal3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_avg3" value="{{$msp->dep_avg3}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_rate3" value="{{$msp->dep_rate3}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Average Cost of Funds</label>
                                                <textarea type="text" class="form-control" name="ave_cost_fund">{{$msp->ave_cost_fund}}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Trust Relationship</label>
                                                <textarea type="text" class="form-control" name="trust_relati">{{$msp->trust_relati}}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Background Information</label>
                                                <textarea type="text" class="form-control" name="back_info">{{$msp->back_info}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="color: #00a2ff">BUSINESS INFORMATION</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Business Name</label>
                                        <input type="text" class="form-control" name="buss_name" value="{{$msp->buss_name}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="com_address" value="{{$msp->com_address}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Telephone</label>
                                        <input type="text" class="form-control" name="buss_tel" value="{{$msp->buss_tel}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Tax I.D.</label>
                                        <input type="text" class="form-control" name="tax_id" value="{{$msp->tax_id}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Individual Name(s)</label>
                                        <input type="text" class="form-control" name="indi_name" value="{{$msp->indi_name}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="bussi_address" value="{{$msp->bussi_address}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Telephone</label>
                                        <input type="text" class="form-control" name="bussi_tel" value="{{$msp->bussi_tel}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Social Security</label>
                                        <input type="text" class="form-control" name="social_security" value="{{$msp->social_security}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Date of Birth</label>
                                        <input type="date" class="form-control" name="date_of_birth" value="{{$msp->date_of_birth}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Proprietorship</label>
                                        <input type="text" class="form-control" name="proprietorship" value="{{$msp->proprietorship}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Partnership</label>
                                        <input type="text" class="form-control" name="partnership" value="{{$msp->partnership}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Sub-Chapter S</label>
                                        <input type="text" class="form-control" name="sub_chapter" value="{{$msp->sub_chapter}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Non-Profit</label>
                                        <input type="text" class="form-control" name="non_profit" value="{{$msp->non_profit}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Individual</label>
                                        <input type="text" class="form-control" name="individual" value="{{$msp->individual}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">LLC</label>
                                        <input type="text" class="form-control" name="llc" value="{{$msp->llc}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 style="color: #00a2ff">Ownership Distribution: (List stockholders, partners, owner names)</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Name</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Title</label>
                                            </div>
                                            <div class="col-md">
                                                <label for=""># of Years</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_name" value="{{$msp->own_name}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_title" value="{{$msp->own_title}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_of_year" value="{{$msp->own_of_year}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_name2" value="{{$msp->own_name2}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_title2" value="{{$msp->own_title2}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_of_year2" value="{{$msp->own_of_year2}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_name3" value="{{$msp->own_name3}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_title3" value="{{$msp->own_title3}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_of_year3" value="{{$msp->own_of_year3}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Nature of Business</label>
                                                <input type="text" class="form-control" name="nature_bussi" value="{{$msp->nature_bussi}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">Year Established</label>
                                                <input type="text" class="form-control" name="year_estb" value="{{$msp->year_estb}}">
                                            </div>
                                            <div class="col-md">
                                                <label for="">Number of Employees</label>
                                                <input type="text" class="form-control" name="number_emply" value="{{$msp->number_emply}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Years at Present Location</label>
                                                <br>
                                                <input type="radio" name="own" value="Own"> Own
                                                <input type="radio" name="own" value="Lease"> Lease
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Accountant</label>
                                        <input type="text" class="form-control" name="accountant" value="{{$msp->accountant}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Telephone</label>
                                        <input type="text" class="form-control" name="acc_telephone" value="{{$msp->acc_telephone}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Insurance Agent</label>
                                        <input type="text" class="form-control" name="insur_agent" value="{{$msp->insur_agent}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Telephone</label>
                                        <input type="text" class="form-control" name="agent_no" value="{{$msp->agent_no}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Attorney</label>
                                        <input type="text" class="form-control" name="attorney" value="{{$msp->attorney}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Telephone</label>
                                        <input type="text" class="form-control" name="attorney_no" value="{{$msp->attorney_no}}">
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <h5 style="color: #00a2ff">FINANCIAL INFORMATION</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Bank of Account</label>
                                        <input type="text" class="form-control" name="bank_of_account" value="{{$msp->bank_of_account}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Account Number</label>
                                        <input type="text" class="form-control" name="accnt_no" value="{{$msp->accnt_no}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="color: #00a2ff">Credit Relationships: Please provide details of your business credit relationships below</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Name of Creditor</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Purpose of Loan</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Amount</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Presently Owing</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="n_creditor" value="{{$msp->n_creditor}}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="p_loan" value="{{$msp->p_loan}}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="r_ammonut" value="{{$msp->r_ammonut}}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="p_owing" value="{{$msp->p_owing}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="n_creditor2" value="{{$msp->n_creditor2}}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="p_loan2" value="{{$msp->p_loan2}}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="r_ammonut2" value="{{$msp->r_ammonut2}}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="p_owing2" value="{{$msp->p_owing2}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="n_creditor3" value="{{$msp->n_creditor3}}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="p_loan3" value="{{$msp->p_loan3}}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="r_ammonut3" value="{{$msp->r_ammonut3}}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="p_owing3" value="{{$msp->p_owing3}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="color: #00a2ff">LOAN REQUEST</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Amount of Loan Requested</label>
                                        <input type="text" class="form-control" name="amount_loan_req" value="{{$msp->amount_loan_req}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Type of Loan</label>
                                        <br>
                                        <input type="radio" name="line_credit" value="Line of Credit"> Line of Credit
                                        <input type="radio" name="line_credit" value="Term Loan"> Term Loan
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Requested Term of Loan</label>
                                        <input type="text" class="form-control" name="req_term_laon" value="{{$msp->req_term_laon}}">
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <br>
                                        <input type="radio" name="bussi_home" value="Business Home Equity Credit"> Business Home Equity Credit 
                                        <input type="radio" name="bussi_home" value="Commercial Real Estate"> Commercial Real Estate
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="color: #00a2ff">Specific Loan Purpose (Check all that apply)</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="checkbox" name="working_cap" value="{{$msp->working_cap}}"> Working Capital
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox"   name="state_type_loan" value="{{$msp->state_type_loan}}"> Other (State type of loan required and loan purpose)
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <input type="checkbox"  name="finan_purch" value="{{$msp->finan_purch}}"> Finance Purchase
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <input type="text" class="form-control"  name="finan_text" value="{{$msp->finan_text}}">
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <input type="checkbox"  name="fin_pur_estate" value="{{$msp->fin_pur_estate}}"> Finance Purchase of Real Estate
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <input type="text" class="form-control" name="fin_pur_text" value="{{$msp->fin_pur_text}}">
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <input type="checkbox"  name="fin_pur_bussi" value="{{$msp->fin_pur_bussi}}"> Finance Purchase of Business
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <input type="text" class="form-control" name="fin_pur_bussi_text" value="{{$msp->fin_pur_bussi_text}}">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox"  name="refin_exi_loan" value="{{$msp->refin_exi_loan}}"> Refinance Existing Loan or Debts
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="refin_exi_loan_text" value="{{$msp->refin_exi_loan_text}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="color: #00a2ff">Collateral Available* (Check all that apply)</h5>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="all_asset" value="{{$msp->all_asset}}"> All Assets (accounts receivable, inventory, machinery and equipment)
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="spe_equipment" value="{{$msp->spe_equipment}}"> Specific Equipment (Please attach equipment list, including serial numbers or description of Equipment, and invoices for new equipment.)
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="real_estate" value="{{$msp->real_estate}}">  Real Estate (Please attach property address, legal description and a copy of most recent tax bill.)
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Square Feet</label>
                                        <input type="text" class="form-control" name="square_feet" value="{{$msp->square_feet}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Acres</label>
                                        <input type="text" class="form-control" name="acres" value="{{$msp->acres}}">
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="cash_dep" value="{{$msp->cash_dep}}"> Cash on Deposit at (name of bank)
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <label for="">Branch</label>
                                        <input type="text" class="form-control" name="branch" value="{{$msp->branch}}">
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <label for="">Account #</label>
                                        <input type="text" class="form-control" name="account" value="{{$msp->account}}">
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="p_assets" value="{{$msp->p_assets}}"> Personal Assets (As described in Personal Financial Statement.)
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="color: #00a2ff">Guarantors** (Please list)</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Name</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Social Security #</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Address</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="guar_name" value="{{$msp->guar_name}}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="guar_security" value="{{$msp->guar_security}}">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="guar_add" value="{{$msp->guar_add}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="guar_name2" value="{{$msp->guar_name2}}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="guar_security2" value="{{$msp->guar_security2}}">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="guar_add2" value="{{$msp->guar_add2}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="guar_name3" value="{{$msp->guar_name3}}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="guar_security3" value="{{$msp->guar_security3}}">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="guar_add3" value="{{$msp->guar_add3}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-10">
                                        <label for="">BUSINESS BACKGROUND INFORMATION</label>
                                        <textarea type="text" class="form-control" name="bussi_back" >{{$msp->bussi_back}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-10">
                                        <label for="">PERSONAL BUSINESS EXPERIENCE</label>
                                        <textarea type="text" class="form-control" name="per_bussi_exp">{{$msp->per_bussi_exp}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Is the business an endorser, guarantor, or co-maker for any obligation not listed in the financial statements?</label>
                                        <br>
                                        <input type="radio" name="misc_yes" value="Yes"> Yes
                                        <input type="radio" name="misc_yes" value="No"> No
                                    </div>
                                    <div class="col-md-10">
                                        <br>
                                        <label for="">If yes, what is the contingent liability?</label>
                                        <input type="text" class="form-control" name="w_contingent" value="{{$msp->w_contingent}}">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Has the business or principal owner ever declared bankruptcy? (If yes, provide details on a separate sheet)</label>
                                        <br>
                                        <input type="radio" name="buss_pri_yes" value="Yes"> Yes
                                        <input type="radio" name="buss_pri_yes" value="No"> No
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <label for="">Is the business a defendant in any lawsuit? (If yes, provide details on a separate sheet.)</label>
                                        <br>
                                        <input type="radio" name="buss_defe_yes" value="Yes"> Yes
                                        <input type="radio" name="buss_defe_yes" value="No"> No
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <label for="">Are any of the business assets encumbered by liens or attachments of any type?</label>
                                        <br>
                                        <input type="radio" name="buss_ass_yes" value="Yes"> Yes
                                        <input type="radio" name="buss_ass_yes" value="No"> No
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">What</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">By Whom</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Account $</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="what" value="{{$msp->what}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="by_whom" value="{{$msp->by_whom}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="amnt" value="{{$msp->amnt}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="what2" value="{{$msp->what2}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="by_whom2" value="{{$msp->by_whom2}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="amnt2" value="{{$msp->amnt2}}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="what3" value="{{$msp->what3}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="by_whom3" value="{{$msp->by_whom3}}">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="amnt3" value="{{$msp->amnt3}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Does the business have a pension fund?</label>
                                        <br>
                                        <input type="radio" name="does_buss_yes" value="Yes"> Yes
                                        <input type="radio" name="does_buss_yes" value="No"> No
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Profit-sharing plan?</label>
                                        <br>
                                        <input type="radio" name="profit_yes" value="Yes"> Yes
                                        <input type="radio" name="profit_yes" value="No"> No
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">If so, does the plan have any unfunded pension liabilities?</label>
                                        <br>
                                        <input type="radio" name="ifso_yes" value="Yes"> Yes
                                        <input type="radio" name="ifso_yes" value="No"> No
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="color: #00a2ff">BUSINESS LOAN APPLICATION CHECKLIST</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="checkbox" name="buss_laon_app" value="{{$msp->buss_laon_app}}"> Business Loan Application
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="accont_pre_busi" value="{{$msp->accont_pre_busi}}"> Accountant-Prepared Business Financial Statements (Profit and Loss, Balance Sheet) for the past three fiscal years
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="buss_fed" value="{{$msp->buss_fed}}"> Business Federal Tax Returns for past three fiscal years
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="in_financial" value="{{$msp->in_financial}}"> Interim Financial Statements (if available)
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="most_recent" value="{{$msp->most_recent}}"> Most Recent Federal Tax Returns for each principal owner listed in the first section of the Business Loan Application
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="per_finacial" value="{{$msp->per_finacial}}"> Personal Financial Statement
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="org_papers" value="{{$msp->org_papers}}"> Organizational Papers (Articles, dba papers, etc.)
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="other2" value="{{$msp->other2}}"> OTHER
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <textarea type="text" class="form-control" name="other_text">{{$msp->other_text}}</textarea>
                                    </div>
                                </div>


                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update ILRF Details</button>
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
