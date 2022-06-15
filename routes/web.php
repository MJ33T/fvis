<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MainController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/admin');
});

Route::view('/admin/dashboard', 'dashboard');

Route::view('/admin', "login");

Route::post('/admin', [UserController::class, 'login']);

Route::get('/admin/manage_gallery', [ImageController::class, 'show_gallery']);

Route::get('/admin/add_image', [ImageController::class, 'add_image_show']);

Route::post('/admin/add_image', [ImageController::class, 'add_image']);

Route::get('admin/manage_gallery/update_image/{id}', [ImageController::class, 'update_image_show']);

Route::post('/admin/manage_gallery/update_image', [ImageController::class, 'update_image']);

Route::get('/admin/manage_gallery/delete_image/{id}', [ImageController::class, 'delete_image']);

Route::get('/admin/manage_partner', [MainController::class, 'show_our_partner']);

Route::get('/admin/add_partner', [MainController::class, 'add_partner_show']);

Route::post('/admin/add_partner', [MainController::class, 'add_partner']);

Route::get('admin/manage_partner/update_partner/{id}', [MainController::class, 'update_partner_show']);

Route::post('/admin/manage_partner/update_partner', [MainController::class, 'update_partner']);

Route::get('/admin/manage_partner/delete_partner/{id}', [MainController::class, 'delete_partner']);

Route::get('/admin/manage_service', [MainController::class, 'show_our_service']);

Route::get('/admin/add_service', [MainController::class, 'add_service_show']);

Route::post('/admin/add_service', [MainController::class, 'add_service']);

Route::get('admin/manage_service/update_service/{id}', [MainController::class, 'update_service_show']);

Route::post('/admin/manage_service/update_service', [MainController::class, 'update_service']);

Route::get('/admin/manage_service/delete_service/{id}', [MainController::class, 'delete_service']);

Route::get('/admin/manage_project', [MainController::class, 'show_our_project']);

Route::get('/admin/add_project', [MainController::class, 'add_project_show']);

Route::post('/admin/add_project', [MainController::class, 'add_project']);

Route::get('admin/manage_project/update_project/{id}', [MainController::class, 'update_project_show']);

Route::post('/admin/manage_project/update_project', [MainController::class, 'update_project']);

Route::get('/admin/manage_project/delete_project/{id}', [MainController::class, 'delete_project']);

Route::get('/admin/manage_car', [MainController::class, 'show_car']);

Route::get('/admin/add_car', [MainController::class, 'add_car_show']);

Route::post('/admin/add_car', [MainController::class, 'add_car']);

Route::get('admin/manage_car/update_car/{id}', [MainController::class, 'update_car_show']);

Route::post('/admin/manage_car/update_car', [MainController::class, 'update_car']);

Route::get('/admin/manage_car/delete_car/{id}', [MainController::class, 'delete_car']);

Route::get('/admin/manage_membership_plan', [MainController::class, 'show_membership_plan']);

Route::get('/admin/add_membership_plan', [MainController::class, 'add_membership_plan_show']);

Route::post('/admin/add_membership_plan', [MainController::class, 'add_membership_plan']);

Route::get('admin/manage_membership_plan/update_membership_plan/{id}', [MainController::class, 'update_membership_plan_show']);

Route::post('/admin/manage_membership_plan/update_membership_plan', [MainController::class, 'update_membership_plan']);

Route::get('/admin/manage_membership_plan/delete_membership_plan/{id}', [MainController::class, 'delete_membership_plan']);

Route::get('/admin/manage_investment_block', [MainController::class, 'show_investment_block']);

Route::get('/admin/add_investment_block', [MainController::class, 'add_investment_block_show']);

Route::post('/admin/add_investment_block', [MainController::class, 'add_investment_block']);

Route::get('admin/manage_investment_block/update_investment_block/{id}', [MainController::class, 'update_investment_block_show']);

Route::post('/admin/manage_investment_block/update_investment_block', [MainController::class, 'update_investment_block']);

Route::get('/admin/manage_investment_block/delete_investment_block/{id}', [MainController::class, 'delete_investment_block']);

Route::get('/admin/manage_contact', [MainController::class, 'show_contact']);

Route::get('/admin/add_contact', [MainController::class, 'add_contact_show']);

Route::post('/admin/add_contact', [MainController::class, 'add_contact']);

Route::get('admin/manage_contact/update_contact/{id}', [MainController::class, 'update_contact_show']);

Route::post('/admin/manage_contact/update_contact', [MainController::class, 'update_contact']);

Route::get('/admin/manage_contact/delete_contact/{id}', [MainController::class, 'delete_contact']);

Route::get('/admin/manage_free_consultation', [MainController::class, 'show_free_consultation']);

Route::get('/admin/add_free_consultation', [MainController::class, 'add_free_consultation_show']);

Route::post('/admin/add_free_consultation', [MainController::class, 'add_free_consultation']);

Route::get('admin/manage_free_consultation/update_free_consultation/{id}', [MainController::class, 'update_free_consultation_show']);

Route::post('/admin/manage_free_consultation/update_free_consultation', [MainController::class, 'update_free_consultation']);

Route::get('/admin/manage_free_consultation/delete_free_consultation/{id}', [MainController::class, 'delete_free_consultation']);

Route::get('/admin/manage_enquiry', [MainController::class, 'show_enquiry']);

Route::get('/admin/add_enquiry', [MainController::class, 'add_enquiry_show']);

Route::post('/admin/add_enquiry', [MainController::class, 'add_enquiry']);

Route::get('admin/manage_enquiry/update_enquiry/{id}', [MainController::class, 'update_enquiry_show']);

Route::post('/admin/manage_enquiry/update_enquiry', [MainController::class, 'update_enquiry']);

Route::get('/admin/manage_enquiry/delete_enquiry/{id}', [MainController::class, 'delete_enquiry']);

Route::get('/admin/manage_newsletter', [MainController::class, 'show_newsletter']);

Route::get('/admin/add_newsletter', [MainController::class, 'add_newsletter_show']);

Route::post('/admin/add_newsletter', [MainController::class, 'add_newsletter']);

Route::get('admin/manage_newsletter/update_newsletter/{id}', [MainController::class, 'update_newsletter_show']);

Route::post('/admin/manage_newsletter/update_newsletter', [MainController::class, 'update_newsletter']);

Route::get('/admin/manage_newsletter/delete_newsletter/{id}', [MainController::class, 'delete_newsletter']);

Route::get('/admin/manage_memberid', [MainController::class, 'show_memberid']);

Route::get('/admin/add_memberid', [MainController::class, 'add_memberid_show']);

Route::post('/admin/add_memberid', [MainController::class, 'add_memberid']);

Route::get('admin/manage_memberid/update_memberid/{id}', [MainController::class, 'update_memberid_show']);

Route::post('/admin/manage_memberid/update_memberid', [MainController::class, 'update_memberid']);

Route::get('/admin/manage_memberid/delete_memberid/{id}', [MainController::class, 'delete_memberid']);

Route::get('/admin/manage_testimonial', [MainController::class, 'show_testimonial']);

Route::get('/admin/add_testimonial', [MainController::class, 'add_testimonial_show']);

Route::post('/admin/add_testimonial', [MainController::class, 'add_testimonial']);

Route::get('admin/manage_testimonial/update_testimonial/{id}', [MainController::class, 'update_testimonial_show']);

Route::post('/admin/manage_testimonial/update_testimonial', [MainController::class, 'update_testimonial']);

Route::get('/admin/manage_testimonial/delete_testimonial/{id}', [MainController::class, 'delete_testimonial']);

Route::get('/admin/manage_acceptance', [MainController::class, 'show_acceptance']);

Route::get('/admin/add_acceptance', [MainController::class, 'add_acceptance_show']);

Route::post('/admin/add_acceptance', [MainController::class, 'add_acceptance']);

Route::get('/admin/manage_acceptance/delete_acceptance/{id}', [MainController::class, 'delete_acceptance']);

Route::get('/admin/manage_user_list', [MainController::class, 'show_user_list']);

Route::post('manage_user_list/change_status_user_list/{id}', [MainController::class, 'change_status_user_list']);

Route::get('/admin/manage_user_list/delete_user_list/{id}', [MainController::class, 'delete_user_list']);


Route::get('/admin/manage_banner', [MainController::class, 'show_banner']);

Route::get('/admin/add_banner', [MainController::class, 'add_banner_show']);

Route::post('/admin/add_banner', [MainController::class, 'add_banner']);

Route::get('admin/manage_banner/update_banner/{id}', [MainController::class, 'update_banner_show']);

Route::post('/admin/manage_banner/update_banner', [MainController::class, 'update_banner']);

Route::get('/admin/manage_banner/delete_banner/{id}', [MainController::class, 'delete_banner']);


Route::get('/admin/manage_social', [MainController::class, 'show_social']);

Route::get('/admin/add_social', [MainController::class, 'add_social_show']);

Route::post('/admin/add_social', [MainController::class, 'add_social']);

Route::get('admin/manage_social/update_social/{id}', [MainController::class, 'update_social_show']);

Route::post('/admin/manage_social/update_social', [MainController::class, 'update_social']);

Route::get('/admin/manage_social/delete_social/{id}', [MainController::class, 'delete_social']);



Route::get('/admin/manage_staff', [MainController::class, 'show_staff']);

Route::get('/admin/add_staff', [MainController::class, 'add_staff_show']);

Route::post('/admin/add_staff', [MainController::class, 'add_staff']);

Route::get('admin/manage_staff/update_staff/{id}', [MainController::class, 'update_staff_show']);

Route::post('/admin/manage_staff/update_staff', [MainController::class, 'update_staff']);

Route::get('/admin/manage_staff/delete_staff/{id}', [MainController::class, 'delete_staff']);



Route::get('/admin/manage_membership', [MainController::class, 'show_membership']);

Route::get('/admin/manage_membership/delete_membership/{id}', [MainController::class, 'delete_membership']);




Route::get('admin/manage_membership/update_membership_perinfo/{id}', [MainController::class, 'update_membership_perinfo_show']);

Route::post('/admin/manage_membership/update_membership_perinfo', [MainController::class, 'update_membership_perinfo']);




Route::get('admin/manage_membership/update_membership_cominfo/{id}', [MainController::class, 'update_membership_cominfo_show']);

Route::post('/admin/manage_membership/update_membership_cominfo', [MainController::class, 'update_membership_cominfo']);





Route::get('admin/manage_membership/update_membership_cisinfo/{id}', [MainController::class, 'update_membership_cisinfo_show']);

Route::post('/admin/manage_membership/update_membership_cisinfo', [MainController::class, 'update_membership_cisinfo']);





Route::get('admin/manage_membership/update_membership_pqfinfo/{id}', [MainController::class, 'update_membership_pqfinfo_show']);

Route::post('/admin/manage_membership/update_membership_pqfinfo', [MainController::class, 'update_membership_pqfinfo']);



Route::get('admin/manage_membership/update_membership_ilrfinfo/{id}', [MainController::class, 'update_membership_ilrfinfo_show']);

Route::post('/admin/manage_membership/update_membership_ilrfinfo', [MainController::class, 'update_membership_ilrfinfo']);


Route::get('admin/manage_membership/show_update_membership_ilrfinfo', [MainController::class, 'show_update_membership_ilrfinfo']);





