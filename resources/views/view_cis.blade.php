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
                            <h3>CIS Details <a style="float: right" href="/admin/approve_cis_form" class="btn btn-primary">Back</a></h3>
                        </div>
                        <div class="card-body">
                            
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <label for="">User Name</label>
                                        <input type="text" class="form-control" name="username" value="{{$msp->username}}" disabled>
                                        <br>
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" name="f_name" value="{{$msp->f_name}}" disabled>
                                        <br>
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" name="l_name" value="{{$msp->l_name}}" disabled>
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{$msp->address}}" disabled>
                                        <br>
                                        <label for="">Mobile</label>
                                        <input type="text" class="form-control" name="mobile" value="{{$msp->mobile}}" disabled>
                                        <br>
                                        <label for="">Home Number</label>
                                        <input type="text" class="form-control" name="h_tell_no" value="{{$msp->h_tell_no}}" disabled>
                                        <br>
                                        <label for="">Fax No</label>
                                        <input type="text" class="form-control" name="fax_no" value="{{$msp->fax_no}}" disabled>
                                        <br>
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{$msp->email}}" disabled>
                                        <br>
                                        <label for="">Languages Spoken</label>
                                        <input type="text" class="form-control" name="lang_spoke" value="{{$msp->lang_spoke}}" disabled>
                                        <br>
                                        <label for="">Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" value="{{$msp->dob}}" disabled>
                                        <br>
                                        <label for="">Place of Birth - City/Country</label>
                                        <input type="text" class="form-control" name="birth_place" value="{{$msp->birth_place}}" disabled>
                                        <br>
                                        <label for="">I.D./Social Security - Number</label>
                                        <input type="text" class="form-control" name="social_security_no" value="{{$msp->social_security_no}}" disabled>
                                        <br>
                                        <label for="">Country of Citizenship</label>
                                        <input type="text" class="form-control" name="citizenship" value="{{$msp->citizenship}}" disabled>
                                        <br>
                                        <label for="">Passport Number</label>
                                        <input type="text" class="form-control" name="pass_no" value="{{$msp->pass_no}}" disabled>
                                        <br>
                                        <label for="">Issuing Authority</label>
                                        <input type="text" class="form-control" name="issuing_authority" value="{{$msp->issuing_authority}}" disabled>
                                        <br>
                                        <label for="">Date of Issue</label>
                                        <input type="date" class="form-control" name="date_issue" value="{{$msp->date_issue}}" disabled>
                                        <br>
                                        <label for="">Date of Expiry</label>
                                        <input type="date" class="form-control" name="date_expiry" value="{{$msp->date_expiry}}" disabled>
                                        <br>
                                        <label for="">Country</label>
                                        <input type="text" class="form-control" name="country" value="{{$msp->country}}" disabled>
                                        <br>
                                        <label for="">Business Activities - Describe</label>
                                        <input type="text" class="form-control" name="buss_activities" value="{{$msp->buss_activities}}" disabled>
                                        <br>
                                        <label for="">Business Name</label>
                                        <input type="text" class="form-control" name="buss_name" value="{{$msp->buss_name}}" disabled>
                                        <br>
                                        <label for="">Place of Activities</label>
                                        <input type="text" class="form-control" name="place_activities" value="{{$msp->place_activities}}" disabled>
                                        <br>
                                        <h5 style="color: #00a2ff">Bank Coordinate (2)</h5>
                                        <br>
                                        <label for="">Bank Name</label>
                                        <input type="text" class="form-control" name="bank_name" value="{{$msp->bank_name}}" disabled>
                                        <br>
                                        <label for="">Bank Branch</label>
                                        <input type="text" class="form-control" name="bank_branch" value="{{$msp->bank_branch}}" disabled>
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="bank_add" value="{{$msp->bank_add}}" disabled>
                                        <br>
                                        <label for="">Account Name</label>
                                        <input type="text" class="form-control" name="acc_name" value="{{$msp->acc_name}}" disabled>
                                        <br>
                                        <label for="">Account Number</label>
                                        <input type="text" class="form-control" name="acc_no" value="{{$msp->acc_no}}" disabled>
                                        <br>
                                        <label for="">Account Signatory</label>
                                        <input type="text" class="form-control" name="acc_siganorty" value="{{$msp->acc_siganorty}}" disabled>
                                        <br>
                                        <label for="">SWIFT Code</label>
                                        <input type="text" class="form-control" name="swift_code" value="{{$msp->swift_code}}" disabled>
                                        <br>
                                        <label for="">IBAN/Sort Code/ABA No</label>
                                        <input type="text" class="form-control" name="IBAN_no" value="{{$msp->IBAN_no}}" disabled>
                                        <br>
                                        <label for="">Bank Officer Name</label>
                                        <input type="text" class="form-control" name="bank_officer_name" value="{{$msp->bank_officer_name}}" disabled>
                                        <br>
                                        <label for="">Telephone Number</label>
                                        <input type="text" class="form-control" name="bank_tell_no" value="{{$msp->bank_tell_no}}" disabled>
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 style="color: #00a2ff">Languages/Translator</h5>
                                        <label for="">Does the Signatory speak English?</label>
                                        <input type="text" class="form-control" name="sing_speak_eng" value="{{$msp->sing_speak_eng}}" disabled>
                                        <br>
                                        <label for="">If No - Name of Translator</label>
                                        <input type="text" class="form-control" name="translator_name" value="{{$msp->translator_name}}" disabled>
                                        <br>
                                        <label for="">Translator Tel No</label>
                                        <input type="text" class="form-control" name="translator_tell" value="{{$msp->translator_tell}}" disabled> 
                                        <br>
                                        <label for="">Translator e-mail address</label>
                                        <input type="text" class="form-control" name="translator_email" value="{{$msp->translator_email}}" disabled>
                                        <br>
                                        <h5 style="color: #00a2ff">Legal Advisor – (if required)</h5>
                                        <br>
                                        <label for="">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" value="{{$msp->full_name}}" disabled>
                                        <br>
                                        <label for="">Company</label>
                                        <input type="text" class="form-control" name="cpmpany" value="{{$msp->cpmpany}}" disabled>
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="com_address" value="{{$msp->com_address}}" disabled>
                                        <br>
                                        <label for="">Telephone Number</label>
                                        <input type="text" class="form-control" name="com_tell" value="{{$msp->com_tell}}" disabled>
                                        <br>
                                        <label for="">Fax Number</label>
                                        <input type="text" class="form-control" name="com_fax" value="{{$msp->com_fax}}" disabled>
                                        <br>
                                        <label for="">Email Address</label>
                                        <input type="text" class="form-control" name="com_email" value="{{$msp->com_email}}" disabled>
                                        <br>
                                        <h5 style="color: #00a2ff">Bank Information – Company</h5>
                                        <br>
                                        <label for="">Bank Name</label>
                                        <input type="text" class="form-control" name="b_name" value="{{$msp->b_name}}" disabled>
                                        <br>
                                        <label for="">Branch Name</label>
                                        <input type="text" class="form-control" name="br_name" value="{{$msp->br_name}}" disabled>
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="b_add" value="{{$msp->b_add}}" disabled>
                                        <br>
                                        <label for="">Account Name</label>
                                        <input type="text" class="form-control" name="b_acc_name" value="{{$msp->b_acc_name}}" disabled>
                                        <br>
                                        <label for="">Account Number</label>
                                        <input type="text" class="form-control" name="b_acc_no" value="{{$msp->b_acc_no}}" disabled>
                                        <br>
                                        <label for="">SWIFT Code</label>
                                        <input type="text" class="form-control" name="b_swift_code" value="{{$msp->b_swift_code}}" disabled>
                                        <br>
                                        <h5 style="color: #00a2ff">Client Information Sheet</h5>
                                        <br>
                                        <label for="">IBAN/Sort Code/ABA No</label>
                                        <input type="text" class="form-control" name="iban_aba_no" value="{{$msp->iban_aba_no}}" disabled>
                                        <br>
                                        <label for="">Account Signatory (1)</label>
                                        <input type="text" class="form-control" name="acc_signatory1" value="{{$msp->acc_signatory1}}" disabled>
                                        <br>
                                        <label for="">Account Signatory (2)</label>
                                        <input type="text" class="form-control" name="acc_signatory2" value="{{$msp->acc_signatory2}}" disabled>
                                        <br>
                                        <label for="">Bank Officer Name (1)</label>
                                        <input type="text" class="form-control" name="b_officer1" value="{{$msp->b_officer1}}" disabled>
                                        <br>
                                        <label for="">Bank Officer Name (2)</label>
                                        <input type="text" class="form-control" name="b_officer2" value="{{$msp->b_officer2}}" disabled>
                                        <br>
                                        <label for="">Telephone Number</label>
                                        <input type="text" class="form-control" name="b_tell_no" value="{{$msp->b_tell_no}}" disabled>
                                        <br>
                                        <label for="">Fax Number</label>
                                        <input type="text" class="form-control" name="b_fax_no" value="{{$msp->b_fax_no}}" disabled>
                                    </div>
                                </div>
                                
                            

                        </div>
                        
                    
                    </div>

                </div>
            </div>
        </div>
          <!-- Main row -->
    </section>
</div>

@endsection
