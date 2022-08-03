<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\File;
use Session;

class ImageController extends Controller
{
    function show_gallery(){
        if(session()->has('user')){
            $gallerys = Gallery::paginate(10);
            return view('gallery', ['gallerys'=>$gallerys]);
        }
        else{
            return redirect('admin');
        }
    }
    function add_image_show(){
        if(session()->has('user')){
            return view('add_image');
        }
        else{
            return redirect('admin');
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
            return redirect('admin');
        }
    }

    function update_image_show($id){
        if(session()->has('user')){
            $iid = \Crypt::decrypt($id);
            $image = Gallery::find($iid);
            return view('update_image', ['image'=> $image]);
        }
        else{
            return redirect('admin');
        }
    }

    function update_image(Request $req){
        if(session()->has('user')){
            $image = Gallery::find($req->id);
            if($req->file('update_image')){
                $destination = public_path('gallery/images/').$image->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file= $req->file('update_image');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file->move(public_path('gallery/images/'), $filename);
                $image->image= $filename;
            }
            $image->title = $req->title;
            $image->chinese_title = $req->chinese_title;
            $image->status = true;
            $image->update();
            return redirect('admin/manage_gallery');

        }
        else{
            return redirect('admin');
        }
    }

    function delete_image($id){
        if(session()->has('user')){
            $pid = \Crypt::decrypt($id);
            $data = Gallery::find($pid);
            $destination = public_path('gallery/images/').$data->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $data->delete();
            return redirect('admin/manage_gallery');
        }
        else{
            return redirect('admin');
        }
    }
}
