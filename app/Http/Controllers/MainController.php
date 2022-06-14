<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurPartner;
use App\Models\OurService;
use App\Models\OurProject;
use App\Models\CarList;
use App\Models\MembershipPlan;
use App\Models\InvestmentBlock;
use App\Models\Contact;
use App\Models\FreeConsultation;
use App\Models\Enquiry;
use App\Models\Newsletter;
use App\Models\MemberId;
use App\Models\Testimonials;
use App\Models\Acceptance;
use App\Models\UserList;
use App\Models\Banner;
use App\Models\Social;
use App\Models\ManageStaff;
use App\Models\MembershipUser;
use App\Models\CisData;
use App\Models\PqfData;




class MainController extends Controller
{
    function show_our_partner(){
        if(session()->has('user')){
            $partners = OurPartner::paginate(10);
            return view('manage_partner', ['partners'=>$partners]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_partner_show(){
        if(session()->has('user')){
            return view('add_partner');
        }
        else{
            return redirect('admin');
        }
    }

    function add_partner(Request $req){
        if(session()->has('user')){
            $partner = new OurPartner;
            if($req->file('upload_logo')){
                $file= $req->file('upload_logo');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/logos/'), $filename);
                $partner['logo']= $filename;
            }
            $partner->title = $req->title;
            $partner->chinese_title = $req->chinese_title;
            $partner->web_url = $req->website_url;
            $partner->chinese_web_url = $req->chinese_website_url;	
            $partner->status = true;
            $partner->save();
            return redirect('admin/manage_partner');

        }
        else{
            return redirect('admin');
        }
    }
    function update_partner_show($id){
        if(session()->has('user')){
            $iid = \Crypt::decrypt($id);
            $partner = OurPartner::find($iid);
            return view('update_partner', ['partner'=> $partner]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_partner(Request $req){
        if(session()->has('user')){
            $partner = OurPartner::find($req->id);
            if($req->file('upload_logo')){
                $file= $req->file('upload_logo');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('public/Images'), $filename);
                $partner['logo']= $filename;
            }
            $partner->title = $req->title;
            $partner->chinese_title = $req->chinese_title;
            $partner->web_url = $req->website_url;
            $partner->chinese_web_url = $req->chinese_website_url;
            $partner->status = true;
            $partner->update();
            return redirect('admin/manage_partner');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_partner($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $data = OurPartner::find($pid);

            $data->delete();
            return redirect('admin/manage_partner');
        }
        else{
            return redirect('admin');
        }
    }



    function show_our_service(){
        if(session()->has('user')){
            $services = OurService::paginate(10);
            return view('manage_service', ['services'=>$services]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_service_show(){
        if(session()->has('user')){
            return view('add_service');
        }
        else{
            return redirect('admin');
        }
    }

    function add_service(Request $req){
        if(session()->has('user')){
            $service = new OurService;
            if($req->file('upload_image')){
                $file= $req->file('upload_image');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/services/'), $filename);
                $service['image']= $filename;
            }
            $service->title = $req->title;
            $service->content = $req->content;
            $service->status = true;
            $service->save();
            return redirect('admin/manage_service');

        }
        else{
            return redirect('admin');
        }
    }
    function update_service_show($id){
        if(session()->has('user')){
            $sid = \Crypt::decrypt($id);
            $service = OurService::find($sid);
            return view('update_service', ['service'=> $service]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_service(Request $req){
        if(session()->has('user')){
            $service = OurService::find($req->id);
            if($req->file('upload_image')){
                $file= $req->file('upload_image');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/services/'), $filename);
                $service->image= $filename;
            }
            $service->title = $req->title;
            $service->content = $req->content;
            $service->status = true;
            $service->update();
            return redirect('admin/manage_service');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_service($id){
        if(session()->has('user')){
            $sid = \Crypt::decrypt($id);
            $data = OurService::find($sid);

            $data->delete();
            return redirect('admin/manage_service');
        }
        else{
            return redirect('admin');
        }
    }



    function show_our_project(){
        if(session()->has('user')){
            $projects = OurProject::paginate(10);
            return view('manage_project', ['projects'=>$projects]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_project_show(){
        if(session()->has('user')){
            return view('add_project');
        }
        else{
            return redirect('admin');
        }
    }

    function add_project(Request $req){
        if(session()->has('user')){
            $project = new OurProject;
            if($req->file('upload_image')){
                $file= $req->file('upload_image');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/projects/'), $filename);
                $project['image']= $filename;
            }
            $project->title = $req->title;
            $project->chinese_title = $req->chinese_title;
            $project->content = $req->content;
            $project->chinese_content = $req->chinese_content;
            $project->status = true;
            $project->save();
            return redirect('admin/manage_project');

        }
        else{
            return redirect('admin');
        }
    }
    function update_project_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $project = OurProject::find($pid);
            return view('update_project', ['project'=> $project]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_project(Request $req){
        if(session()->has('user')){
            $project = OurService::find($req->id);
            if($req->file('upload_image')){
                $file= $req->file('upload_image');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/projects/'), $filename);
                $project->image= $filename;
            }
            $project->title = $req->title;
            $project->content = $req->content;
            $project->status = true;
            $project->update();
            return redirect('admin/manage_project');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_project($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $data = OurProject::find($pid);

            $data->delete();
            return redirect('admin/manage_project');
        }
        else{
            return redirect('admin');
        }
    }




    function show_car(){
        if(session()->has('user')){
            $cars = CarList::paginate(10);
            return view('manage_car', ['cars'=>$cars]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_car_show(){
        if(session()->has('user')){
            return view('add_car');
        }
        else{
            return redirect('admin');
        }
    }

    function add_car(Request $req){
        if(session()->has('user')){
            $car = new CarList;
            if($req->file('upload_image')){
                $file= $req->file('upload_image');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/cars/'), $filename);
                $car['carimage']= $filename;
            }
            $car->carname = $req->carname;
            $car->caroffer = $req->offer;
            $car->status = true;
            $car->save();
            return redirect('admin/manage_car');

        }
        else{
            return redirect('admin');
        }
    }
    function update_car_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $car = CarList::find($pid);
            return view('update_car', ['car'=> $car]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_car(Request $req){
        if(session()->has('user')){
            $car = CarList::find($req->id);
            if($req->file('upload_image')){
                $file= $req->file('upload_image');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/cars/'), $filename);
                $car->carimage= $filename;
            }
            $car->carname = $req->carname;
            $car->caroffer = $req->offer;
            $car->status = true;
            $car->update();
            return redirect('admin/manage_car');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_car($id){
        if(session()->has('user')){
            $cid = \Crypt::decrypt($id);
            $data = CarList::find($cid);

            $data->delete();
            return redirect('admin/manage_car');
        }
        else{
            return redirect('admin');
        }
    }


    function show_membership_plan(){
        if(session()->has('user')){
            $msps = MembershipPlan::paginate(10);
            return view('manage_membership_plan', ['msps'=>$msps]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_membership_plan_show(){
        if(session()->has('user')){
            return view('add_membership_plan');
        }
        else{
            return redirect('admin');
        }
    }

    function add_membership_plan(Request $req){
        if(session()->has('user')){
            $msp = new MembershipPlan;
            $msp->plan_name = $req->mspname;
            $msp->plan_fee = $req->mspfee;
            $msp->annual_membership_fee = $req->mspmloan;
            $msp->investment = $req->investment;
            $msp->investment_duration = $req->investmentD;
            $msp->monthly_fix_income = $req->mspmfi;
            $msp->position = $req->position;
            $msp->save();
            return redirect('admin/manage_membership_plan');

        }
        else{
            return redirect('admin');
        }
    }
    function update_membership_plan_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = MembershipPlan::find($pid);
            return view('update_membership_plan', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_membership_plan(Request $req){
        if(session()->has('user')){
            $msp = MembershipPlan::find($req->id);
            $msp->plan_name = $req->mspname;
            $msp->plan_fee = $req->mspfee;
            $msp->annual_membership_fee = $req->mspmloan;
            $msp->investment = $req->investment;
            $msp->investment_duration = $req->investmentD;
            $msp->monthly_fix_income = $req->mspmfi;
            $msp->position = $req->position;
            $msp->update();
            return redirect('admin/update_membership_plan');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_membership_plan($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = MembershipPlan::find($mid);

            $data->delete();
            return redirect('admin/manage_membership_plan');
        }
        else{
            return redirect('admin');
        }
    }


    function show_investment_block(){
        if(session()->has('user')){
            $ibs = InvestmentBlock::paginate(10);
            return view('manage_investment_block', ['msps'=>$ibs]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_investment_block_show(){
        if(session()->has('user')){
            return view('add_investment_block');
        }
        else{
            return redirect('admin');
        }
    }

    function add_investment_block(Request $req){
        if(session()->has('user')){
            $msp = new InvestmentBlock;
            $msp->name = $req->ibname;
            $msp->currency = $req->cur;
            $msp->price = $req->price;
            $msp->discription = $req->des;
            $msp->one_time_investors_introduction_fee = $req->otiifee;
            $msp->investment_monthly_income = $req->imi;
            $msp->lock_in_period = $req->lp;
            $msp->extension_option = $req->eo;
            $msp->offers = $req->of;
            $msp->save();
            return redirect('admin/manage_investment_block');

        }
        else{
            return redirect('admin');
        }
    }
    function update_investment_block_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = InvestmentBlock::find($pid);
            return view('update_investment_block', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_investment_block(Request $req){
        if(session()->has('user')){
            $msp = InvestmentBlock::find($req->id);
            $msp->name = $req->ibname;
            $msp->currency = $req->cur;
            $msp->price = $req->price;
            $msp->discription = $req->des;
            $msp->one_time_investors_introduction_fee = $req->otiifee;
            $msp->investment_monthly_income = $req->imi;
            $msp->lock_in_period = $req->lp;
            $msp->extension_option = $req->eo;
            $msp->offers = $req->of;
            $msp->update();
            return redirect('admin/update_investment_block');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_investment_block($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = InvestmentBlock::find($mid);
            $data->delete();
            return redirect('admin/manage_investment_block');
        }
        else{
            return redirect('admin');
        }
    }


    function show_contact(){
        if(session()->has('user')){
            $ibs = Contact::paginate(10);
            return view('manage_contact', ['msps'=>$ibs]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_contact_show(){
        if(session()->has('user')){
            return view('add_contact');
        }
        else{
            return redirect('admin');
        }
    }

    function add_contact(Request $req){
        if(session()->has('user')){
            $msp = new Contact;
            $msp->name = $req->name;
            $msp->email = $req->email;
            $msp->country = $req->coun;
            $msp->number = $req->mn;
            $msp->whatsapp = $req->wn;
            $msp->wechat = $req->wid;
            $msp->skype = $req->sid;
            $msp->address = $req->ad;
            $msp->message = $req->msg;
            $msp->save();
            return redirect('admin/manage_contact');

        }
        else{
            return redirect('admin');
        }
    }
    function update_contact_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = Contact::find($pid);
            return view('update_contact', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_contact(Request $req){
        if(session()->has('user')){
            $msp = Contact::find($req->id);
            $msp->name = $req->name;
            $msp->email = $req->email;
            $msp->country = $req->coun;
            $msp->number = $req->mn;
            $msp->whatsapp = $req->wn;
            $msp->wechat = $req->wid;
            $msp->skype = $req->sid;
            $msp->address = $req->ad;
            $msp->message = $req->msg;
            $msp->update();
            return redirect('admin/manage_contact');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_contact($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = Contact::find($mid);
            $data->delete();
            return redirect('admin/manage_contact');
        }
        else{
            return redirect('admin');
        }
    }


    function show_free_consultation(){
        if(session()->has('user')){
            $ibs = FreeConsultation::paginate(10);
            return view('manage_free_consultation', ['msps'=>$ibs]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_free_consultation_show(){
        if(session()->has('user')){
            return view('add_free_consultation');
        }
        else{
            return redirect('admin');
        }
    }

    function add_free_consultation(Request $req){
        if(session()->has('user')){
            $msp = new FreeConsultation;
            $msp->name = $req->name;
            $msp->email = $req->email;
            $msp->phone = $req->phone;
            $msp->message = $req->msg;
            
            $msp->save();
            return redirect('admin/manage_free_consultation');

        }
        else{
            return redirect('admin');
        }
    }
    function update_free_consultation_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = FreeConsultation::find($pid);
            return view('update_free_consultation', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_free_consultation(Request $req){
        if(session()->has('user')){
            $msp = FreeConsultation::find($req->id);
            $msp->name = $req->name;
            $msp->email = $req->email;
            $msp->country = $req->coun;
            $msp->number = $req->mn;
            $msp->whatsapp = $req->wn;
            $msp->wechat = $req->wid;
            $msp->skype = $req->sid;
            $msp->address = $req->ad;
            $msp->message = $req->msg;
            $msp->update();
            return redirect('admin/update_free_consultation');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_free_consultation($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = FreeConsultation::find($mid);
            $data->delete();
            return redirect('admin/manage_free_consultation');
        }
        else{
            return redirect('admin');
        }
    }


    function show_enquiry(){
        if(session()->has('user')){
            $ibs = Enquiry::paginate(10);
            return view('manage_enquiry', ['msps'=>$ibs]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_enquiry_show(){
        if(session()->has('user')){
            return view('add_enquiry');
        }
        else{
            return redirect('admin');
        }
    }

    function add_enquiry(Request $req){
        if(session()->has('user')){
            $msp = new Enquiry;
            $msp->name = $req->name;
            $msp->email = $req->email;
            $msp->number = $req->number;
            $msp->company_name = $req->cmp;
            $msp->save();
            return redirect('admin/manage_enquiry');

        }
        else{
            return redirect('admin');
        }
    }
    function update_enquiry_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = Enquiry::find($pid);
            return view('update_enquiry', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_enquiry(Request $req){
        if(session()->has('user')){
            $msp = Enquiry::find($req->id);
            $msp->name = $req->name;
            $msp->email = $req->email;
            $msp->number = $req->number;
            $msp->company_name = $req->cmp;
            $msp->update();
            return redirect('admin/update_enquiry');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_enquiry($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = Enquiry::find($mid);
            $data->delete();
            return redirect('admin/manage_enquiry');
        }
        else{
            return redirect('admin');
        }
    }


    function show_newsletter(){
        if(session()->has('user')){
            $ibs = Newsletter::paginate(10);
            return view('manage_newsletter', ['msps'=>$ibs]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_newsletter_show(){
        if(session()->has('user')){
            return view('add_newsletter');
        }
        else{
            return redirect('admin');
        }
    }

    function add_newsletter(Request $req){
        if(session()->has('user')){
            $msp = new Newsletter;
            $msp->subs_email = $req->subemail;
            $msp->subscribe_date = $req->subdate;
            $msp->save();
            return redirect('admin/manage_newsletter');

        }
        else{
            return redirect('admin');
        }
    }
    function update_newsletter_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = Newsletter::find($pid);
            return view('update_newsletter', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_newsletter(Request $req){
        if(session()->has('user')){
            $msp = Newsletter::find($req->id);
            $msp->subs_email = $req->subemail;
            $msp->subscribe_date = $req->subdate;
            $msp->update();
            return redirect('admin/update_newsletter');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_newsletter($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = Newsletter::find($mid);
            $data->delete();
            return redirect('admin/manage_newsletter');
        }
        else{
            return redirect('admin');
        }
    }

    function show_memberid(){
        if(session()->has('user')){
            $ibs = MemberId::paginate(10);
            return view('manage_memberid', ['msps'=>$ibs]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_memberid_show(){
        if(session()->has('user')){
            return view('add_memberid');
        }
        else{
            return redirect('admin');
        }
    }

    function add_memberid(Request $req){
        if(session()->has('user')){
            $msp = new MemberId;
            $msp->fname = $req->fname;
            $msp->lname = $req->lname;
            $msp->number = $req->number;
            $msp->date = $req->date;
            $msp->save();
            return redirect('admin/manage_memberid');

        }
        else{
            return redirect('admin');
        }
    }
    function update_memberid_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = MemberId::find($pid);
            return view('update_memberid', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_memberid(Request $req){
        if(session()->has('user')){
            $msp = MemberId::find($req->id);
            $msp->fname = $req->fname;
            $msp->lname = $req->lname;
            $msp->number = $req->number;
            $msp->date = $req->date;
            $msp->update();
            return redirect('admin/update_memberid');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_memberid($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = MemberId::find($mid);
            $data->delete();
            return redirect('admin/manage_memberid');
        }
        else{
            return redirect('admin');
        }
    }

    function show_testimonial(){
        if(session()->has('user')){
            $ibs = Testimonials::paginate(10);
            return view('manage_testimonial', ['msps'=>$ibs]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_testimonial_show(){
        if(session()->has('user')){
            return view('add_testimonial');
        }
        else{
            return redirect('admin');
        }
    }

    function add_testimonial(Request $req){
        if(session()->has('user')){
            $msp = new Testimonials;
            if($req->file('img')){
                $file= $req->file('img');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/testimonial/img/'), $filename);
                $car['photo']= $filename;
            }
            if($req->file('med_img')){
                $file= $req->file('med_img');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/testimonial/med_img/'), $filename);
                $car['medal_image']= $filename;
            }
            $msp->name = $req->name;
            $msp->chinese_name = $req->ch_name;
            $msp->company_name = $req->med_name;
            $msp->review = $req->rev;
            $msp->chinese_review = $req->ch_rev;
            $msp->save();
            return redirect('admin/manage_testimonial');

        }
        else{
            return redirect('admin');
        }
    }
    function update_testimonial_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = Testimonials::find($pid);
            return view('update_testimonial', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_testimonial(Request $req){
        if(session()->has('user')){
            $msp = Testimonials::find($req->id);
            if($req->file('img')){
                $file= $req->file('img');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/testimonial/img/'), $filename);
                $car['photo']= $filename;
            }
            if($req->file('med_img')){
                $file= $req->file('med_img');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/testimonial/med_img/'), $filename);
                $car['medal_image']= $filename;
            }
            $msp->name = $req->name;
            $msp->chinese_name = $req->ch_name;
            $msp->company_name = $req->med_name;
            $msp->review = $req->rev;
            $msp->chinese_review = $req->ch_rev;
            $msp->update();
            return redirect('admin/update_testimonial');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_testimonial($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = Testimonials::find($mid);
            $data->delete();
            return redirect('admin/manage_testimonial');
        }
        else{
            return redirect('admin');
        }
    }



    function show_acceptance(){
        if(session()->has('user')){
            $ibs = Acceptance::paginate(10);
            return view('manage_acceptance', ['msps'=>$ibs]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_acceptance_show(){
        if(session()->has('user')){
            return view('add_acceptance');
        }
        else{
            return redirect('admin');
        }
    }

    function add_acceptance(Request $req){
        if(session()->has('user')){
            $msp = new Acceptance;
            $msp->u_name = $req->u_email;
            $code = 'FVIS-'.rand(10, 100000);
            $msp->a_code = $code;
            $msp->save();
            return redirect('admin/manage_acceptance');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_acceptance($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = Acceptance::find($mid);
            $data->delete();
            return redirect('admin/manage_acceptance');
        }
        else{
            return redirect('admin');
        }
    }


    function show_user_list(){
        if(session()->has('user')){
            $ibs = UserList::paginate(10);
            return view('manage_user_list', ['msps'=>$ibs]);
        }
        else{
            return redirect('admin');
        }
    }
    function change_status_user_list($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = UserList::find($mid);
            if($data->status == '1'){
                $data->status = '0';
            }else if($data->status == '0'){
                $data->status = '1';
            }
        $data->update();
        return redirect('admin/manage_user_list');
        }
        else{
            return redirect('admin');
        }
    }
    function delete_user_list($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = UserList::find($mid);
            $data->delete();
            return redirect('admin/manage_user_list');
        }
        else{
            return redirect('admin');
        }
    }


    function show_banner(){
        if(session()->has('user')){
            $ibs = Banner::paginate(10);
            return view('manage_banner', ['msps'=>$ibs]);
        }
        else{
            return redirect('login');
        }
    }

    function add_banner_show(){
        if(session()->has('user')){
            return view('add_banner');
        }
        else{
            return redirect('admin');
        }
    }

    function add_banner(Request $req){
        if(session()->has('user')){
            $msp = new Banner;
            if($req->file('bannerImage')){
                $file= $req->file('bannerImage');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/banner/'), $filename);
                $msp['bannerImage']= $filename;
            }
            
            $msp->banner_title = $req->banner_title;
            $msp->target_url = $req->target_url;
            $msp->des = $req->des;
            $msp->pagetype = $req->pagetype;
            $msp->save();
            return redirect('admin/manage_banner');

        }
        else{
            return redirect('admin');
        }
    }
    function update_banner_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = Banner::find($pid);
            return view('update_banner', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_banner(Request $req){
        if(session()->has('user')){
            $msp = Banner::find($req->id);
            if($req->file('bannerImage')){
                $file= $req->file('bannerImage');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/banner/'), $filename);
                $msp['bannerImage']= $filename;
            }
            
            $msp->banner_title = $req->banner_title;
            $msp->target_url = $req->target_url;
            $msp->des = $req->des;
            $msp->pagetype = $req->pagetype;
            $msp->update();
            return redirect('admin/manage_banner');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_banner($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = Banner::find($mid);
            $data->delete();
            return redirect('admin/manage_banner');
        }
        else{
            return redirect('admin');
        }
    }



    function show_social(){
        if(session()->has('user')){
            $ibs = Social::paginate(10);
            return view('manage_social', ['msps'=>$ibs]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_social_show(){
        if(session()->has('user')){
            return view('add_social');
        }
        else{
            return redirect('admin');
        }
    }

    function add_social(Request $req){
        if(session()->has('user')){
            $msp = new Social;
            
            $msp->title = $req->title;
            $msp->social_url = $req->social_url;
            $msp->status = true;
            $msp->save();
            return redirect('admin/manage_social');

        }
        else{
            return redirect('admin');
        }
    }
    function update_social_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = Social::find($pid);
            return view('update_social', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_social(Request $req){
        if(session()->has('user')){
            $msp = Social::find($req->id);
            
            $msp->title = $req->title;
            $msp->social_url = $req->social_url;
            $msp->status = true;
            $msp->update();
            return redirect('admin/manage_social');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_social($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = Social::find($mid);
            $data->delete();
            return redirect('admin/manage_social');
        }
        else{
            return redirect('admin');
        }
    }

    function show_staff(){
        if(session()->has('user')){
            $ibs = ManageStaff::paginate(10);
            return view('manage_staff', ['msps'=>$ibs]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_staff_show(){
        if(session()->has('user')){
            return view('add_staff');
        }
        else{
            return redirect('admin');
        }
    }

    function add_staff(Request $req){
        if(session()->has('user')){
            $msp = new ManageStaff;
            
            $msp->employee_id = $req->employee_id;
            $msp->name = $req->name;
            $msp->email = $req->email;
            $msp->phone = $req->phone;
            $msp->address = $req->address;

            $msp->save();
            return redirect('admin/manage_staff');

        }
        else{
            return redirect('admin');
        }
    }
    function update_staff_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = ManageStaff::find($pid);
            return view('update_staff', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_staff(Request $req){
        if(session()->has('user')){
            $msp = ManageStaff::find($req->id);
            
            $msp->employee_id = $req->employee_id;
            $msp->name = $req->name;
            $msp->email = $req->email;
            $msp->phone = $req->phone;
            $msp->address = $req->address;
            $msp->update();
            return redirect('admin/manage_staff');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_staff($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = ManageStaff::find($mid);
            $data->delete();
            return redirect('admin/manage_membership');
        }
        else{
            return redirect('admin');
        }
    }

    function show_membership(){
        if(session()->has('user')){
            $ibs = MembershipUser::paginate(10);
            return view('manage_membership', ['msps'=>$ibs]);
        }
        else{
            return redirect('admin');
        }
    }


    function delete_membership($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = MembershipUser::find($mid);
            $data->delete();
            return redirect('admin/manage_membership');
        }
        else{
            return redirect('admin');
        }
    }





    function update_membership_perinfo_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = MembershipUser::where(['user_id'=>$pid])->first();
            return view('update_membership_perinfo', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_membership_perinfo(Request $req){
        if(session()->has('user')){
            $msp = MembershipUser::where(['user_id'=>$req->user_id])->first();
            
            $msp->f_name = $req->f_name;
            $msp->l_name = $req->l_name;
            $msp->email = $req->email;
            $msp->m_no = $req->m_no;
            $msp->h_phone = $req->h_phone;
            $msp->add_one = $req->add_one;
            $msp->add_two = $req->add_two;
            $msp->country = $req->country;
            $msp->dob = $req->dob;


            $msp->update();
            return redirect('admin/manage_membership');

        }
        else{
            return redirect('admin');
        }
    }






    function update_membership_cominfo_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = MembershipUser::where(['user_id'=>$pid])->first();
            return view('update_membership_cominfo', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_membership_cominfo(Request $req){
        if(session()->has('user')){
            $msp = MembershipUser::where(['user_id'=>$req->user_id])->first();
            
            $msp->com_name = $req->com_name;
            $msp->com_phone = $req->com_phone;
            $msp->com_add = $req->com_add;
            $msp->company_country = $req->company_country;
            $msp->com_fax = $req->com_fax;
            $msp->com_email = $req->com_email;
            $msp->web_url = $req->web_url;

            $msp->update();
            return redirect('admin/manage_membership');

        }
        else{
            return redirect('admin');
        }
    }






    function update_membership_cisinfo_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = CisData::where(['user_id'=>$pid])->first();
            return view('update_membership_cisinfo', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_membership_cisinfo(Request $req){
        if(session()->has('user')){
            $msp = CisData::where(['user_id'=>$req->user_id])->first();
            
            $msp->username = $req->username;
            $msp->f_name = $req->f_name;
            $msp->l_name = $req->l_name;
            $msp->address = $req->address;
            $msp->mobile = $req->mobile;
            $msp->h_tell_no = $req->h_tell_no;
            $msp->fax_no = $req->fax_no;
            $msp->email = $req->email;
            $msp->lang_spoke = $req->lang_spoke;
            $msp->dob = $req->dob;
            $msp->birth_place = $req->birth_place;
            $msp->social_security_no = $req->social_security_no;
            $msp->citizenship = $req->citizenship;
            $msp->issuing_authority = $req->issuing_authority;
            $msp->date_issue = $req->date_issue;
            $msp->date_expiry = $req->date_expiry;
            $msp->buss_activities = $req->buss_activities;
            $msp->buss_name = $req->buss_name;
            $msp->place_activities = $req->place_activities;
            $msp->bank_name = $req->bank_name;
            $msp->bank_branch = $req->bank_branch;
            $msp->acc_no = $req->acc_no;
            $msp->acc_siganorty = $req->acc_siganorty;
            $msp->swift_code = $req->swift_code;
            $msp->IBAN_no = $req->IBAN_no;
            $msp->bank_officer_name = $req->bank_officer_name;
            $msp->bank_tell_no = $req->bank_tell_no;
            $msp->sing_speak_eng = $req->sing_speak_eng;
            $msp->translator_name = $req->translator_name;
            $msp->translator_tell = $req->translator_tell;
            $msp->translator_email = $req->translator_email;
            $msp->full_name = $req->full_name;
            $msp->cpmpany = $req->cpmpany;
            $msp->com_address = $req->com_address;
            $msp->com_tell = $req->com_tell;
            $msp->com_fax = $req->com_fax;
            $msp->com_email = $req->com_email;
            $msp->b_name = $req->b_name;
            $msp->br_name = $req->br_name;
            $msp->b_add = $req->b_add;
            $msp->b_acc_name = $req->b_acc_name;
            $msp->b_acc_no = $req->b_acc_no;
            $msp->b_swift_code = $req->b_swift_code;
            $msp->iban_aba_no = $req->iban_aba_no;
            $msp->acc_signatory1 = $req->acc_signatory1;
            $msp->acc_signatory2 = $req->acc_signatory2;
            $msp->b_officer1 = $req->b_officer1;
            $msp->b_officer2 = $req->b_officer2;
            $msp->b_tell_no = $req->b_tell_no;
            $msp->b_fax_no = $req->b_fax_no;
            $msp->pass_no = $req->pass_no;
            $msp->country = $req->country;
            $msp->status = true;

            $msp->update();
            return redirect('admin/manage_membership');

        }
        else{
            return redirect('admin');
        }
    }








    function update_membership_pqfinfo_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = PqfData::where(['user_id'=>$pid])->first();
            return view('update_membership_pqfinfo', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_membership_pqfinfo(Request $req){
        if(session()->has('user')){
            $msp = PqfData::where(['user_id'=>$req->user_id])->first();
            
            $msp->name_major = $req->name_major;
            $msp->com_name = $req->com_name;
            $msp->web_url = $req->web_url;
            $msp->buss_disc = $req->buss_disc;
            $msp->buss_year = $req->buss_year;
            $msp->broker = $req->broker;
            $msp->length_Investment = $req->length_Investment;
            $msp->assets_purch = $req->assets_purch;
            $msp->licenses_permits = $req->licenses_permits;
            $msp->loan_req = $req->loan_req;
            $msp->money_need = $req->money_need;
            $msp->indicate_amount = $req->indicate_amount;
            $msp->ROI = $req->ROI;
            $msp->searching_funding = $req->searching_funding;
            $msp->com_Investors = $req->com_Investors;
            $msp->financing_request = $req->financing_request;
            $msp->collateral = $req->collateral;
            $msp->worth_company = $req->worth_company;
            $msp->project_venture = $req->project_venture;
            
            $msp->update();
            return redirect('admin/manage_membership');

        }
        else{
            return redirect('admin');
        }
    }







    function update_membership_ilrfinfo_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = CisData::where(['user_id'=>$pid])->first();
            return view('update_membership_ilrfinfo', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_membership_ilrfinfo(Request $req){
        if(session()->has('user')){
            $msp = CisData::where(['user_id'=>$req->user_id])->first();
            
            // $msp->employee_id = $req->employee_id;
            
            $msp->update();
            return redirect('admin/manage_membership');

        }
        else{
            return redirect('admin');
        }
    }
    
}
