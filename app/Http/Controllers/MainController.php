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





class MainController extends Controller
{
    function show_our_partner(){
        if(session()->has('user')){
            $partners = OurPartner::paginate(10);
            return view('manage_partner', ['partners'=>$partners]);
        }
        else{
            return redirect('login');
        }
    }

    function add_partner_show(){
        if(session()->has('user')){
            return view('add_partner');
        }
        else{
            return redirect('login');
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
            return redirect('login');
        }
    }
    function update_partner_show($id){
        if(session()->has('user')){
            $iid = \Crypt::decrypt($id);
            $partner = OurPartner::find($iid);
            return view('update_partner', ['partner'=> $partner]);
        }
        else{
            return redirect('login');
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
            return redirect('login');
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
            return redirect('/login');
        }
    }



    function show_our_service(){
        if(session()->has('user')){
            $services = OurService::paginate(10);
            return view('manage_service', ['services'=>$services]);
        }
        else{
            return redirect('login');
        }
    }

    function add_service_show(){
        if(session()->has('user')){
            return view('add_service');
        }
        else{
            return redirect('login');
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
            return redirect('login');
        }
    }
    function update_service_show($id){
        if(session()->has('user')){
            $sid = \Crypt::decrypt($id);
            $service = OurService::find($sid);
            return view('update_service', ['service'=> $service]);
        }
        else{
            return redirect('login');
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
            return redirect('login');
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
            return redirect('/login');
        }
    }



    function show_our_project(){
        if(session()->has('user')){
            $projects = OurProject::paginate(10);
            return view('manage_project', ['projects'=>$projects]);
        }
        else{
            return redirect('login');
        }
    }

    function add_project_show(){
        if(session()->has('user')){
            return view('add_project');
        }
        else{
            return redirect('login');
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
            return redirect('login');
        }
    }
    function update_project_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $project = OurProject::find($pid);
            return view('update_project', ['project'=> $project]);
        }
        else{
            return redirect('login');
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
            return redirect('login');
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
            return redirect('/login');
        }
    }




    function show_car(){
        if(session()->has('user')){
            $cars = CarList::paginate(10);
            return view('manage_car', ['cars'=>$cars]);
        }
        else{
            return redirect('login');
        }
    }

    function add_car_show(){
        if(session()->has('user')){
            return view('add_car');
        }
        else{
            return redirect('login');
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
            return redirect('login');
        }
    }
    function update_car_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $car = CarList::find($pid);
            return view('update_car', ['car'=> $car]);
        }
        else{
            return redirect('login');
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
            return redirect('login');
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
            return redirect('/login');
        }
    }


    function show_membership_plan(){
        if(session()->has('user')){
            $msps = MembershipPlan::paginate(10);
            return view('manage_membership_plan', ['msps'=>$msps]);
        }
        else{
            return redirect('login');
        }
    }

    function add_membership_plan_show(){
        if(session()->has('user')){
            return view('add_membership_plan');
        }
        else{
            return redirect('login');
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
            return redirect('login');
        }
    }
    function update_membership_plan_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = MembershipPlan::find($pid);
            return view('update_membership_plan', ['msp'=> $msp]);
        }
        else{
            return redirect('login');
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
            return redirect('login');
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
            return redirect('/login');
        }
    }


    function show_investment_block(){
        if(session()->has('user')){
            $ibs = InvestmentBlock::paginate(10);
            return view('manage_investment_block', ['msps'=>$ibs]);
        }
        else{
            return redirect('login');
        }
    }

    function add_investment_block_show(){
        if(session()->has('user')){
            return view('add_investment_block');
        }
        else{
            return redirect('login');
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
            return redirect('login');
        }
    }
    function update_investment_block_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = InvestmentBlock::find($pid);
            return view('update_investment_block', ['msp'=> $msp]);
        }
        else{
            return redirect('login');
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
            return redirect('login');
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
            return redirect('/login');
        }
    }


    function show_contact(){
        if(session()->has('user')){
            $ibs = Contact::paginate(10);
            return view('manage_contact', ['msps'=>$ibs]);
        }
        else{
            return redirect('login');
        }
    }

    function add_contact_show(){
        if(session()->has('user')){
            return view('add_contact');
        }
        else{
            return redirect('login');
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
            return redirect('login');
        }
    }
    function update_contact_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = Contact::find($pid);
            return view('update_contact', ['msp'=> $msp]);
        }
        else{
            return redirect('login');
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
            return redirect('login');
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
            return redirect('/login');
        }
    }


    function show_free_consultation(){
        if(session()->has('user')){
            $ibs = FreeConsultation::paginate(10);
            return view('manage_free_consultation', ['msps'=>$ibs]);
        }
        else{
            return redirect('login');
        }
    }

    function add_free_consultation_show(){
        if(session()->has('user')){
            return view('add_free_consultation');
        }
        else{
            return redirect('login');
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
            return redirect('login');
        }
    }
    function update_free_consultation_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = FreeConsultation::find($pid);
            return view('update_free_consultation', ['msp'=> $msp]);
        }
        else{
            return redirect('login');
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
            return redirect('login');
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
            return redirect('/login');
        }
    }


    function show_enquiry(){
        if(session()->has('user')){
            $ibs = Enquiry::paginate(10);
            return view('manage_enquiry', ['msps'=>$ibs]);
        }
        else{
            return redirect('login');
        }
    }

    function add_enquiry_show(){
        if(session()->has('user')){
            return view('add_enquiry');
        }
        else{
            return redirect('login');
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
            return redirect('login');
        }
    }
    function update_enquiry_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = Enquiry::find($pid);
            return view('update_enquiry', ['msp'=> $msp]);
        }
        else{
            return redirect('login');
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
            return redirect('login');
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
            return redirect('/login');
        }
    }


    function show_newsletter(){
        if(session()->has('user')){
            $ibs = Newsletter::paginate(10);
            return view('manage_newsletter', ['msps'=>$ibs]);
        }
        else{
            return redirect('login');
        }
    }

    function add_newsletter_show(){
        if(session()->has('user')){
            return view('add_newsletter');
        }
        else{
            return redirect('login');
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
            return redirect('login');
        }
    }
    function update_newsletter_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = Newsletter::find($pid);
            return view('update_newsletter', ['msp'=> $msp]);
        }
        else{
            return redirect('login');
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
            return redirect('login');
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
            return redirect('/login');
        }
    }

    function show_memberid(){
        if(session()->has('user')){
            $ibs = MemberId::paginate(10);
            return view('manage_memberid', ['msps'=>$ibs]);
        }
        else{
            return redirect('login');
        }
    }

    function add_memberid_show(){
        if(session()->has('user')){
            return view('add_memberid');
        }
        else{
            return redirect('login');
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
            return redirect('login');
        }
    }
    function update_memberid_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = MemberId::find($pid);
            return view('update_memberid', ['msp'=> $msp]);
        }
        else{
            return redirect('login');
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
            return redirect('login');
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
            return redirect('/login');
        }
    }

    function show_testimonial(){
        if(session()->has('user')){
            $ibs = Testimonials::paginate(10);
            return view('manage_testimonial', ['msps'=>$ibs]);
        }
        else{
            return redirect('login');
        }
    }

    function add_testimonial_show(){
        if(session()->has('user')){
            return view('add_testimonial');
        }
        else{
            return redirect('login');
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
            return redirect('login');
        }
    }
    function update_testimonial_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = Testimonials::find($pid);
            return view('update_testimonial', ['msp'=> $msp]);
        }
        else{
            return redirect('login');
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
            return redirect('login');
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
            return redirect('/login');
        }
    }



    function show_acceptance(){
        if(session()->has('user')){
            $ibs = Acceptance::paginate(10);
            return view('manage_acceptance', ['msps'=>$ibs]);
        }
        else{
            return redirect('login');
        }
    }

    function add_acceptance_show(){
        if(session()->has('user')){
            return view('add_acceptance');
        }
        else{
            return redirect('login');
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
            return redirect('login');
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
            return redirect('/login');
        }
    }


    function show_user_list(){
        if(session()->has('user')){
            $ibs = UserList::paginate(10);
            return view('manage_user_list', ['msps'=>$ibs]);
        }
        else{
            return redirect('login');
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
            return redirect('/login');
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
            return redirect('/login');
        }
    }
    
}
