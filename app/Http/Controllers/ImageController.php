<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Session;

class ImageController extends Controller
{
    function show_gallery(){
        if(session()->has('user')){
            $gallerys = Gallery::paginate(10);
            return view('gallery', ['gallerys'=>$gallerys]);
        }
        else{
            return redirect('login');
        }
    }
    function add_image_show(){
        if(session()->has('user')){
            return view('add_image');
        }
        else{
            return redirect('login');
        }
    }

    function add_image(Request $req){
        if(session()->has('user')){
            $image = new Gallery;
            if($req->file('upload_image')){
                $file= $req->file('upload_image');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('gallery/images/'), $filename);
                $image->image= $filename;
            }
            $image->title = $req->title;
            $image->chinese_title = $req->chinese_title;
            $image->status = true;
            $image->save();
            return redirect('admin/manage_gallery');

        }
        else{
            return redirect('login');
        }
    }

    function update_image_show($id){
        if(session()->has('user')){
            $iid = \Crypt::decrypt($id);
            $image = Gallery::find($iid);
            return view('update_image', ['image'=> $image]);
        }
        else{
            return redirect('login');
        }
    }

    function update_image(Request $req){
        if(session()->has('user')){
            $image = Gallery::find($req->id);
            if($req->file('upload_image')){
                $file= $req->file('upload_image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/Images'), $filename);
                $image['image']= $filename;
            }
            $image->title = $req->title;
            $image->chinese_title = $req->chinese_title;
            $image->status = true;
            $image->update();
            return redirect('admin/manage_gallery');

        }
        else{
            return redirect('login');
        }
    }

    function delete_image($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $data = Gallery::find($pid);

            $data->delete();
            return redirect('admin/manage_gallery');
        }
        else{
            return redirect('/login');
        }
    }
}
