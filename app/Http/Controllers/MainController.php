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
use App\Models\IlrfData;
use App\Models\OtherService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;




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
                $destination = public_path('gallery/logos/').$partner->logo;
                if(File::exists($destination)){
                    File::delete($destination);
                }
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
            $destination = public_path('gallery/logos/').$data->logo;
            if(File::exists($destination)){
                File::delete($destination);
            }
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
                $destination = public_path('gallery/services/').$service->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
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
            $destination = public_path('gallery/services/').$data->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
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
            $project = OurProject::find($req->id);

            if($req->file('upload_image')){
                $destination = public_path('gallery/projects/').$project->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
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
            $destination = public_path('gallery/projects/').$data->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
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
                $destination = public_path('gallery/cars/').$car->carimage;
                if(File::exists($destination)){
                    File::delete($destination);
                }
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
            $destination = public_path('gallery/cars/').$data->carimage;
            if(File::exists($destination)){
                File::delete($destination);
            }
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
            return redirect('admin/manage_investment_block');

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
            $msp->message = $req->message;
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
                $msp['photo']= $filename;
            }
            if($req->file('med_img')){
                $file= $req->file('med_img');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/testimonial/med_img/'), $filename);
                $msp['medal_image']= $filename;
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
                $destination = public_path('gallery/testimonial/img/').$msp->photo;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file= $req->file('img');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/testimonial/img/'), $filename);
                $msp->photo= $filename;
            }
            if($req->file('med_img')){
                $destination_med = public_path('gallery/testimonial/med_img/').$msp->medal_image;
                if(File::exists($destination_med)){
                    File::delete($destination_med);
                }
                $file= $req->file('med_img');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/testimonial/med_img/'), $filename);
                $msp->medal_image= $filename;
            }
            $msp->name = $req->name;
            $msp->chinese_name = $req->ch_name;
            $msp->company_name = $req->med_name;
            $msp->review = $req->rev;
            $msp->chinese_review = $req->ch_rev;
            $msp->update();
            return redirect('admin/manage_testimonial');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_testimonial($id){
        if(session()->has('user')){
            $mid = \Crypt::decrypt($id);
            $data = Testimonials::find($mid);
            $destination = public_path('gallery/testimonial/img/').$data->photo;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $destination_med = public_path('gallery/testimonial/med_img/').$data->medal_image;
            if(File::exists($destination_med)){
                File::delete($destination_med);
            }
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
            $ibs = UserList::orderBy('created_at', 'DESC')->paginate(10);
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
            if($req->file('image')){
                $file= $req->file('image');
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
            if($req->file('image')){
                $destination= public_path('gallery/banner/').$msp->bannerImage;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file= $req->file('image');
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
            $destination = public_path('gallery/banner/').$data->bannerImage;
            if(File::exists($destination)){
                File::delete($destination);
            }
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
            if($msp == null){
                return back()->with('error', 'Not Yet Apporved');
            }
            else{
                return view('update_membership_cisinfo', ['msp'=> $msp]);
            }
            
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
            if($msp == null){
                return back()->with('error', 'Not Yet Apporved');
            }
            else{
                return view('update_membership_pqfinfo', ['msp'=> $msp]);
            }
            
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
            $msp = IlrfData::where(['user_id'=>$pid])->first();
            if($msp == null){
                return back()->with('error', 'Not Yet Apporved');
            }
            else{
                return view('update_membership_ilrfinfo', ['msp'=> $msp]);
            }
            
        }
        else{
            return redirect('admin');
        }
    }

    function update_membership_ilrfinfo(Request $req){
        if(session()->has('user')){
            $msp = IlrfData::where(['user_id'=>$req->user_id])->first();

            $msp->primary_off = $req->primary_off;
            $msp->prepared_by = $req->prepared_by;
            $msp->date_pre = $req->date_pre;
            $msp->loan_request = $req->loan_request;
            $msp->bussi_from = $req->bussi_from;
            $msp->organ_date = $req->organ_date;
            $msp->type = $req->type;
            $msp->manag = $req->manag;
            $msp->ownership = $req->ownership;
            $msp->guarantors = $req->guarantors;
            $msp->reque = $req->reque;
            $msp->purpose = $req->purpose;
            $msp->terms_type = $req->terms_type;
            $msp->terms_amount = $req->terms_amount;
            $msp->terms_rate = $req->terms_rate; 
            $msp->terms_term = $req->terms_term;
            $msp->terms_type2 = $req->terms_type2;
            $msp->terms_amount2 = $req->terms_amount2;
            $msp->terms_rate2 = $req->terms_rate2;
            $msp->terms_term2 = $req->terms_term2;
            $msp->terms_repay2 = $req->terms_repay2;
            $msp->terms_type3 = $req->terms_type3;
            $msp->terms_amount3 = $req->terms_amount3;
            $msp->terms_rate3 = $req->terms_rate3;
            $msp->terms_term3 = $req->terms_term3;
            $msp->terms_repay3 = $req->terms_repay3;
            $msp->source_primary = $req->source_primary;
            $msp->source_secondary = $req->source_secondary;
            $msp->source_teriary = $req->source_teriary;
            $msp->source_desi = $req->source_desi;
            $msp->colla_app = $req->colla_app;
            $msp->colla_debt = $req->colla_debt;
            $msp->colla_avail = $req->colla_avail;
            $msp->coll_ltv = $req->coll_ltv;
            $msp->colla_app2 = $req->colla_app2;
            $msp->colla_debt2 = $req->colla_debt2;
            $msp->colla_avail2 = $req->colla_avail2;
            $msp->coll_ltv2 = $req->coll_ltv2;
            $msp->colla_app3 = $req->colla_app3;
            $msp->colla_debt3 = $req->colla_debt3;
            $msp->colla_avail3 = $req->colla_avail3;
            $msp->coll_ltv3 = $req->coll_ltv3;
            $msp->colla_app4 = $req->colla_app4;
            $msp->colla_debt4 = $req->colla_debt4;
            $msp->colla_avail4 = $req->colla_avail4;
            $msp->coll_ltv4 = $req->coll_ltv4;   
            $msp->colla_app5 = $req->colla_app5;
            $msp->colla_debt5 = $req->colla_debt5;
            $msp->colla_avail5 = $req->colla_avail5;
            $msp->coll_ltv5 = $req->coll_ltv5;
            $msp->colla_app6 = $req->colla_app6;
            $msp->colla_debt6 = $req->colla_debt6;
            $msp->colla_avail6 = $req->colla_avail6;
            $msp->coll_ltv6 = $req->coll_ltv6;
            $msp->flood_haz = $req->flood_haz;
            $msp->envi_concer = $req->envi_concer;
            $msp->bow_type = $req->bow_type;
            $msp->bow_open = $req->bow_open;
            $msp->bow_high = $req->bow_high;
            $msp->bow_bal = $req->bow_bal;
            $msp->bow_ren = $req->bow_ren;
            $msp->bow_rate = $req->bow_rate;
            $msp->bow_terms = $req->bow_terms;
            $msp->bow_sec = $req->bow_sec;
            $msp->bow_ltv = $req->bow_ltv;
            $msp->bow_type2 = $req->bow_type2;
            $msp->bow_open2 = $req->bow_open2;
            $msp->bow_high2 = $req->bow_high2;
            $msp->bow_bal2 = $req->bow_bal2;
            $msp->bow_ren2 = $req->bow_ren2;
            $msp->bow_rate2 = $req->bow_rate2;
            $msp->bow_terms2 = $req->bow_terms2;
            $msp->bow_sec2 = $req->bow_sec2;
            $msp->bow_ltv2 = $req->bow_ltv2;
            $msp->bow_type3 = $req->bow_type3;
            $msp->bow_open3 = $req->bow_open3;
            $msp->bow_high3 = $req->bow_high3;
            $msp->bow_bal3 = $req->bow_bal3;
            $msp->bow_ren3 = $req->bow_ren3;
            $msp->bow_rate3 = $req->bow_rate3;
            $msp->bow_terms3 = $req->bow_terms3;
            $msp->bow_sec3 = $req->bow_sec3;
            $msp->bow_ltv3 = $req->bow_ltv3;
            $msp->bow_pay_his = $req->bow_pay_his;
            $msp->low_bal = $req->low_bal;
            $msp->other_debts = $req->other_debts;
            $msp->days_zero = $req->days_zero;
            $msp->othter_debts2 = $req->othter_debts2;
            $msp->dep_name = $req->dep_name;
            $msp->dep_acct = $req->dep_acct;
            $msp->dep_type = $req->dep_type;
            $msp->dep_opened = $req->dep_opened;
            $msp->dep_ren = $req->dep_ren;
            $msp->dep_bal = $req->dep_bal;
            $msp->dep_avg = $req->dep_avg;
            $msp->dep_rate = $req->dep_rate;
            $msp->dep_name2 = $req->dep_name2;
            $msp->dep_acct2 = $req->dep_acct2;
            $msp->dep_type2 = $req->dep_type2;
            $msp->dep_opened2 = $req->dep_opened2;
            $msp->dep_ren2 = $req->dep_ren2;
            $msp->dep_bal2 = $req->dep_bal2;
            $msp->dep_avg2 = $req->dep_avg2;
            $msp->dep_rate2 = $req->dep_rate2;
            $msp->dep_name3 = $req->dep_name3;
            $msp->dep_acct3 = $req->dep_acct3;
            $msp->dep_type3 = $req->dep_type3;
            $msp->dep_opened3 = $req->dep_opened3;
            $msp->dep_ren3 = $req->dep_ren3;
            $msp->dep_bal3 = $req->dep_bal3;
            $msp->dep_avg3 = $req->dep_avg3;
            $msp->dep_rate3 = $req->dep_rate3;
            $msp->ave_cost_fund = $req->ave_cost_fund;
            $msp->trust_relati = $req->trust_relati;
            $msp->back_info = $req->back_info;
            $msp->buss_name = $req->buss_name;
            $msp->buss_tel = $req->buss_tel;
            $msp->com_address = $req->com_address;
            $msp->tax_id = $req->tax_id;
            $msp->indi_name = $req->indi_name;
            $msp->bussi_address = $req->bussi_address;
            $msp->bussi_tel = $req->bussi_tel;
            $msp->social_security = $req->social_security;
            $msp->date_of_birth = $req->date_of_birth;
            $msp->proprietorship = $req->proprietorship;
            $msp->partnership = $req->partnership;
            $msp->sub_chapter = $req->sub_chapter;
            $msp->non_profit = $req->non_profit;
            $msp->individual = $req->individual;
            $msp->llc = $req->llc;
            $msp->own_name = $req->own_name;
            $msp->own_title = $req->own_title;
            $msp->own_of_year = $req->own_of_year;
            $msp->own_name2 = $req->own_name2;
            $msp->own_title2 = $req->own_title2;
            $msp->own_of_year2 = $req->own_of_year2;
            $msp->own_name3 = $req->own_name3;
            $msp->own_title3 = $req->own_title3;
            $msp->own_of_year3 = $req->own_of_year3;
            $msp->nature_bussi = $req->nature_bussi;
            $msp->year_estb = $req->year_estb;
            $msp->number_emply = $req->number_emply;
            $msp->own = $req->own;
            $msp->accountant = $req->accountant;
            $msp->acc_telephone = $req->acc_telephone;
            $msp->insur_agent = $req->insur_agent;
            $msp->agent_no = $req->agent_no;
            $msp->attorney = $req->attorney;
            $msp->attorney_no = $req->attorney_no;
            $msp->bank_of_account = $req->bank_of_account;
            $msp->accnt_no = $req->accnt_no;
            $msp->n_creditor = $req->n_creditor;
            $msp->p_loan = $req->p_loan;
            $msp->r_ammonut = $req->r_ammonut;
            $msp->p_owing = $req->p_owing;
            $msp->n_creditor2 = $req->n_creditor2;
            $msp->p_loan2 = $req->p_loan2;
            $msp->r_ammonut2 = $req->r_ammonut2;
            $msp->p_owing2 = $req->p_owing2;
            $msp->n_creditor3 = $req->n_creditor3;
            $msp->p_loan3 = $req->p_loan3;
            $msp->r_ammonut3 = $req->r_ammonut3;
            $msp->p_owing3 = $req->p_owing3;
            $msp->amount_loan_req = $req->amount_loan_req;
            $msp->line_credit = $req->line_credit;
            $msp->term_laon = $req->term_laon;
            $msp->req_term_laon = $req->req_term_laon;
            $msp->bussi_home = $req->bussi_home;
            $msp->commer_real = $req->commer_real;
            $msp->working_cap = $req->working_cap;
            $msp->state_type_loan = $req->state_type_loan;
            $msp->finan_purch = $req->finan_purch;
            $msp->finan_text = $req->finan_text;
            $msp->fin_pur_estate = $req->fin_pur_estate;
            $msp->fin_pur_text = $req->fin_pur_text;
            $msp->fin_pur_bussi = $req->fin_pur_bussi;
            $msp->fin_pur_bussi_text = $req->fin_pur_bussi_text;
            $msp->refin_exi_loan = $req->refin_exi_loan;
            $msp->refin_exi_loan_text = $req->refin_exi_loan_text;
            $msp->all_asset = $req->all_asset;
            $msp->spe_equipment = $req->spe_equipment;
            $msp->real_estate = $req->real_estate;
            $msp->square_feet = $req->square_feet;
            $msp->acres = $req->acres;
            $msp->cash_dep = $req->cash_dep;
            $msp->branch = $req->branch;
            $msp->account = $req->account;
            $msp->p_assets = $req->p_assets;
            $msp->guar_name = $req->guar_name;
            $msp->guar_security = $req->guar_security;
            $msp->guar_add = $req->guar_add;
            $msp->guar_name2 = $req->guar_name2;
            $msp->guar_security2 = $req->guar_security2;
            $msp->guar_add2 = $req->guar_add2;
            $msp->guar_name3 = $req->guar_name3;
            $msp->guar_security3 = $req->guar_security3;
            $msp->guar_add3 = $req->guar_add3;
            $msp->bussi_back = $req->bussi_back;
            $msp->per_bussi_exp = $req->per_bussi_exp;
            $msp->misc_yes = $req->misc_yes;
            $msp->buss_end_yes = $req->buss_end_yes;
            $msp->w_contingent = $req->w_contingent;
            $msp->buss_pri_yes = $req->buss_pri_yes;
            $msp->buss_defe_yes = $req->buss_defe_yes;
            $msp->buss_ass_yes = $req->buss_ass_yes;
            $msp->what = $req->what;
            $msp->by_whom = $req->by_whom;
            $msp->amnt = $req->amnt;
            $msp->what2 = $req->what2;
            $msp->by_whom2 = $req->by_whom2;
            $msp->amnt2 = $req->amnt2;
            $msp->what3 = $req->what3;
            $msp->by_whom3 = $req->by_whom3;
            $msp->amnt3 = $req->amnt3;
            $msp->does_buss_yes = $req->does_buss_yes;
            $msp->profit_yes = $req->profit_yes;
            $msp->ifso_yes = $req->ifso_yes;
            $msp->buss_laon_app = $req->buss_laon_app;
            $msp->accont_pre_busi = $req->accont_pre_busi;
            $msp->buss_fed = $req->buss_fed;
            $msp->in_financial = $req->in_financial;
            $msp->most_recent = $req->most_recent;
            $msp->per_finacial = $req->per_finacial;
            $msp->org_papers = $req->org_papers;
            $msp->other2 = $req->other2;
            $msp->other_text = $req->other_text;
            
            $msp->update();
            return redirect('admin/manage_membership');

        }
        else{
            return redirect('admin');
        }
    }
    

    function approve_cis_form_show(){
        if(session()->has('user')){
            $msps = DB::table('cis_data')->get();
            
            return view('approve_cis_form', ['msps' => $msps]);
        }
        else{
            return redirect('admin');
        }
    }
    function approve_pqf_form_show(){
        if(session()->has('user')){
            $msps = DB::table('pqf_data')->get();
            return view('approve_pqf_form', ['msps' => $msps]);
        }
        else{
            return redirect('admin');
        }
    }
    function approve_ilrf_form_show(){
        if(session()->has('user')){
            $msps = IlrfData::all();
            return view('approve_ilrf_form', ['msps' => $msps]);
        }
        else{
            return redirect('admin');
        }
    }
    function approve_inspection_show(){
        if(session()->has('user')){
            $msps = DB::table('inspections')->get();
            return view('approve_inspection', ['msps' => $msps]);
        }
        else{
            return redirect('admin');
        }
    }
    function approve_premiun_retainer_show(){
        if(session()->has('user')){
            $msps = DB::table('premiun_retainers')->get();
            return view('approve_premiun_retainer', ['msps' => $msps]);
        }
        else{
            return redirect('admin');
        }
    }
    function approve_closing_show(){
        if(session()->has('user')){
            $msps = DB::table('closings')->get();
            return view('approve_closing', ['msps' => $msps]);
        }
        else{
            return redirect('admin');
        }
    }
    function approve_collateral_show(){
        if(session()->has('user')){
            $msps = DB::table('collaterals')->get();
            return view('approve_collateral', ['msps' => $msps]);
        }
        else{
            return redirect('admin');
        }
    }
    function approve_spv_show(){
        if(session()->has('user')){
            $msps = DB::table('s_p_v_s')->get();
            return view('approve_spv', ['msps' => $msps]);
        }
        else{
            return redirect('admin');
        }
    }

    function change_cis_status($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = CisData::find($pid);
            if($msp->status == 0){
                $msp->status = 1;
            }
            else if($msp->status == 1){
                $msp->status = 0;
            }
            $msp->update();
            return redirect('admin/approve_cis_form');
        }
        else{
            return redirect('admin');
        }
        
    }

    function change_ilrf_status($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = IlrfData::find($pid);
            if($msp->status == 0){
                $msp->status = 1;
            }
            else if($msp->status == 1){
                $msp->status = 0;
            }
            $msp->update();
            return redirect('admin/approve_ilrf_form');
        }
        else{
            return redirect('admin');
        }
        
    }

    function change_pqf_status($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = PqfData::find($pid);
            if($msp->status == 0){
                $msp->status = 1;
            }
            else if($msp->status == 1){
                $msp->status = 0;
            }
            $msp->update();
            return redirect('admin/approve_pqf_form');
        }
        else{
            return redirect('admin');
        }
        
    }

    function view_cis($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = CisData::find($pid);
            return view('view_cis', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
        
    }
    function view_pqf($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = PqfData::find($pid);
            return view('view_pqf', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        }
        
    }
    function view_ilrf($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = IlrfData::find($pid);
            return view('view_ilrf', ['msp'=> $msp]); 
        }
        else{
            return redirect('admin');
        }
        
    }

    function change_password_user_list_show($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = UserList::find($pid);
            return view('change_password_user', ['msp'=> $msp]);
        }
        else{
            return redirect('admin');
        } 
    }

    function change_password_user_list(Request $req){
        if(session()->has('user')){
            $msp = UserList::where(['id'=>$req->id])->first();
            $msp->password = $req->password;
            $msp->update();
            return redirect('admin/manage_user_list');
        }
        else{
            return redirect('admin');
        }
    }

    function search_user(Request $req){
        if(session()->has('user')){
            $search = $req->search;
            $results = UserList::query()
            ->where('f_name', 'LIKE', "%{$search}%")
            ->orWhere('l_name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->orWhere('acceptance_code', 'LIKE', "%{$search}%")
            ->get();
            return view('search_result_user', ['results' => $results]);
        }
        else{
            return redirect('admin');
        }
        
    }

    function search_acceptance(Request $req){
        if(session()->has('user')){
            $search = $req->search;
            $results = Acceptance::query()
            ->where('u_name', 'LIKE', "%{$search}%")
            ->orWhere('a_code', 'LIKE', "%{$search}%")
            ->get();
            return view('search_result_acceptance', ['results' => $results]);
        }
        else{
            return redirect('admin');
        }
    }

    function manage_other_service_view(){
        if(session()->has('user')){
            $service = OtherService::paginate(10);
            return view('manage_other_service',['services' => $service]);
        }
        else{
            return redirect('admin');
        }
    }

    function add_new_service_view(){
        if(session()->has('user')){
            return view('add_new_service');
        }
        else{
            return redirect('admin');
        }
    }

    function add_other_service(Request $req){
        if(session()->has('user')){
            $otherservice = new OtherService();
            if($req->file('upload_image')){
                $file= $req->file('upload_image');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/otherservice/'), $filename);
                $otherservice['image']= $filename;
            }
            $otherservice->title = $req->title;
            $otherservice->content = $req->content;
            $otherservice->status = 1;
            if($otherservice->save()){
                return redirect('admin/manage_other_service');
            }
        }
        else{
            return redirect('admin');
        }
    }

    function change_status_other_service($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = OtherService::find($pid);
            if($msp->status == 0){
                $msp->status = 1;
            }
            else if($msp->status == 1){
                $msp->status = 0;
            }
            $msp->update();
            return back();
        }
        else{
            return redirect('admin');
        }
    }

    function delete_other_service($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = OtherService::find($pid);
            $destination = public_path('gallery/otherservice/').$msp->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            if($msp->delete()){
                return back();
            }
            
        }
        else{
            return redirect('admin');
        }
    }

    function edit_other_service($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $msp = OtherService::find($pid);
            return view('update_other_service', ['services' => $msp]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_other_service(Request $req){
        if(session()->has('user')){
            $service = OtherService::find($req->id);
            $service->title = $req->title;
            if($req->file('upload_image')){
                $destination = public_path('gallery/otherservice/').$service->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file= $req->file('upload_image');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/otherservice/'), $filename);
                $service->image= $filename;
            }
            $service->content = $req->content;
            if($service->update()){
                return redirect('admin/manage_other_service');
            }
        }
        else{
            return redirect('admin');
        }
    }


    // function show_update_membership_ilrfinfo(){
    //     return view('update_membership_ilrfinfo');
    // }
}
