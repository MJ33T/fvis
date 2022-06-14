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
                            <h3>Update CIS Details</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/manage_membership/update_membership_cisinfo" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="user_id" value="{{$msp['user_id']}}">
                                        <label for="">User Name</label>
                                        <input type="text" class="form-control" name="username" value="{{$msp->username}}">
                                        <br>
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" name="f_name" value="{{$msp->f_name}}">
                                        <br>
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" name="l_name" value="{{$msp->l_name}}">
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{$msp->address}}">
                                        <br>
                                        <label for="">Mobile</label>
                                        <input type="text" class="form-control" name="mobile" value="{{$msp->mobile}}">
                                        <br>
                                        <label for="">Home Number</label>
                                        <input type="text" class="form-control" name="h_tell_no" value="{{$msp->h_tell_no}}">
                                        <br>
                                        <label for="">Fax No</label>
                                        <input type="text" class="form-control" name="fax_no" value="{{$msp->fax_no}}">
                                        <br>
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{$msp->email}}">
                                        <br>
                                        <label for="">Languages Spoken</label>
                                        <input type="text" class="form-control" name="lang_spoke" value="{{$msp->lang_spoke}}">
                                        <br>
                                        <label for="">Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" value="{{$msp->dob}}">
                                        <br>
                                        <label for="">Place of Birth - City/Country</label>
                                        <input type="text" class="form-control" name="birth_place" value="{{$msp->birth_place}}">
                                        <br>
                                        <label for="">I.D./Social Security - Number</label>
                                        <input type="text" class="form-control" name="social_security_no" value="{{$msp->social_security_no}}">
                                        <br>
                                        <label for="">Country of Citizenship</label>
                                        <input type="text" class="form-control" name="citizenship" value="{{$msp->citizenship}}">
                                        <br>
                                        <label for="">Passport Number</label>
                                        <input type="text" class="form-control" name="pass_no" value="{{$msp->pass_no}}">
                                        <br>
                                        <label for="">Issuing Authority</label>
                                        <input type="text" class="form-control" name="issuing_authority" value="{{$msp->issuing_authority}}">
                                        <br>
                                        <label for="">Date of Issue</label>
                                        <input type="date" class="form-control" name="date_issue" value="{{$msp->date_issue}}">
                                        <br>
                                        <label for="">Date of Expiry</label>
                                        <input type="date" class="form-control" name="date_expiry" value="{{$msp->date_expiry}}">
                                        <br>
                                        <label for="">Country</label>
                                        <input type="text" class="form-control" name="country" value="{{$msp->country}}">
                                        <br>
                                        <label for="">Business Activities - Describe</label>
                                        <input type="text" class="form-control" name="buss_activities" value="{{$msp->buss_activities}}">
                                        <br>
                                        <label for="">Business Name</label>
                                        <input type="text" class="form-control" name="buss_name" value="{{$msp->buss_name}}">
                                        <br>
                                        <label for="">Place of Activities</label>
                                        <input type="text" class="form-control" name="place_activities" value="{{$msp->place_activities}}">
                                        <br>
                                        <h5 style="color: #00a2ff">Bank Coordinate (2)</h5>
                                        <br>
                                        <label for="">Bank Name</label>
                                        <input type="text" class="form-control" name="bank_name" value="{{$msp->bank_name}}">
                                        <br>
                                        <label for="">Bank Branch</label>
                                        <input type="text" class="form-control" name="bank_branch" value="{{$msp->bank_branch}}">
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="bank_add" value="{{$msp->bank_add}}">
                                        <br>
                                        <label for="">Account Name</label>
                                        <input type="text" class="form-control" name="acc_name" value="{{$msp->acc_name}}">
                                        <br>
                                        <label for="">Account Number</label>
                                        <input type="text" class="form-control" name="acc_no" value="{{$msp->acc_no}}">
                                        <br>
                                        <label for="">Account Signatory</label>
                                        <input type="text" class="form-control" name="acc_siganorty" value="{{$msp->acc_siganorty}}">
                                        <br>
                                        <label for="">SWIFT Code</label>
                                        <input type="text" class="form-control" name="swift_code" value="{{$msp->swift_code}}">
                                        <br>
                                        <label for="">IBAN/Sort Code/ABA No</label>
                                        <input type="text" class="form-control" name="IBAN_no" value="{{$msp->IBAN_no}}">
                                        <br>
                                        <label for="">Bank Officer Name</label>
                                        <input type="text" class="form-control" name="bank_officer_name" value="{{$msp->bank_officer_name}}">
                                        <br>
                                        <label for="">Telephone Number</label>
                                        <input type="text" class="form-control" name="bank_tell_no" value="{{$msp->bank_tell_no}}">
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 style="color: #00a2ff">Languages/Translator</h5>
                                        <label for="">Does the Signatory speak English?</label>
                                        <input type="text" class="form-control" name="sing_speak_eng" value="{{$msp->sing_speak_eng}}">
                                        <br>
                                        <label for="">If No - Name of Translator</label>
                                        <input type="text" class="form-control" name="translator_name" value="{{$msp->translator_name}}">
                                        <br>
                                        <label for="">Translator Tel No</label>
                                        <input type="text" class="form-control" name="translator_tell" value="{{$msp->translator_tell}}">
                                        <br>
                                        <label for="">Translator e-mail address</label>
                                        <input type="text" class="form-control" name="translator_email" value="{{$msp->translator_email}}">
                                        <br>
                                        <h5 style="color: #00a2ff">Legal Advisor – (if required)</h5>
                                        <br>
                                        <label for="">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" value="{{$msp->full_name}}">
                                        <br>
                                        <label for="">Company</label>
                                        <input type="text" class="form-control" name="cpmpany" value="{{$msp->cpmpany}}">
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="com_address" value="{{$msp->com_address}}">
                                        <br>
                                        <label for="">Telephone Number</label>
                                        <input type="text" class="form-control" name="com_tell" value="{{$msp->com_tell}}">
                                        <br>
                                        <label for="">Fax Number</label>
                                        <input type="text" class="form-control" name="com_fax" value="{{$msp->com_fax}}">
                                        <br>
                                        <label for="">Email Address</label>
                                        <input type="text" class="form-control" name="com_email" value="{{$msp->com_email}}">
                                        <br>
                                        <h5 style="color: #00a2ff">Bank Information – Company</h5>
                                        <br>
                                        <label for="">Bank Name</label>
                                        <input type="text" class="form-control" name="b_name" value="{{$msp->b_name}}">
                                        <br>
                                        <label for="">Branch Name</label>
                                        <input type="text" class="form-control" name="br_name" value="{{$msp->br_name}}">
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="b_add" value="{{$msp->b_add}}">
                                        <br>
                                        <label for="">Account Name</label>
                                        <input type="text" class="form-control" name="b_acc_name" value="{{$msp->b_acc_name}}">
                                        <br>
                                        <label for="">Account Number</label>
                                        <input type="text" class="form-control" name="b_acc_no" value="{{$msp->b_acc_no}}">
                                        <br>
                                        <label for="">SWIFT Code</label>
                                        <input type="text" class="form-control" name="b_swift_code" value="{{$msp->b_swift_code}}">
                                        <br>
                                        <h5 style="color: #00a2ff">Client Information Sheet</h5>
                                        <br>
                                        <label for="">IBAN/Sort Code/ABA No</label>
                                        <input type="text" class="form-control" name="iban_aba_no" value="{{$msp->iban_aba_no}}">
                                        <br>
                                        <label for="">Account Signatory (1)</label>
                                        <input type="text" class="form-control" name="acc_signatory1" value="{{$msp->acc_signatory1}}">
                                        <br>
                                        <label for="">Account Signatory (2)</label>
                                        <input type="text" class="form-control" name="acc_signatory2" value="{{$msp->acc_signatory2}}">
                                        <br>
                                        <label for="">Bank Officer Name (1)</label>
                                        <input type="text" class="form-control" name="b_officer1" value="{{$msp->b_officer1}}">
                                        <br>
                                        <label for="">Bank Officer Name (2)</label>
                                        <input type="text" class="form-control" name="b_officer2" value="{{$msp->b_officer2}}">
                                        <br>
                                        <label for="">Telephone Number</label>
                                        <input type="text" class="form-control" name="b_tell_no" value="{{$msp->b_tell_no}}">
                                        <br>
                                        <label for="">Fax Number</label>
                                        <input type="text" class="form-control" name="b_fax_no" value="{{$msp->b_fax_no}}">
                                    </div>
                                </div>
                                
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update CIS Details</button>
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
