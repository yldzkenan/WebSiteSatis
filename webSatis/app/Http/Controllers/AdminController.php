<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;
use Session;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function login(Request $req)
    {
        $admin=Admin::where(['email'=>$req->email])->first();
        if(!$admin||!Hash::check($req->password, $admin->password))
        {
            return redirect('/adminlog');
        } 
        else
        {
            $req->session()->put('Admin',$admin);
            return view('/admin');
        }
    }

    function register(Request $req){
        $admin= new Admin;
        $admin->name=$req->name;
        $admin->email=$req->email;
        $admin->password=Hash::make($req->password);
        $admin->save();
        return redirect('/adminlog');
    }

    function index()
    {
        $admins = DB::select('select * from admins');
        return view('/admin',['admins'=>$admins]);
    }
    function kullanicigetir()
    {
        $data['tum_kullanicilar']=User::get();
        return view('adminkullanicilar',$data);
    }
    function urungetir()
    {
        $data['tum_urunler']=Product::get();
        return view('adminurunler',$data);
    }

    function ekle()
    {
        return view('adminkullaniciekle');
    }
    function ekle_post(Request $req)
    {
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/adminkullanicilar');
    }

    function urun_ekle()
    {
        return view('adminurunekle');
    }
    function urun_ekle_post(Request $req)
    {
        $product= new Product;
        $product->name=$req->name;
        $product->price=$req->price;
        $product->description=$req->description;
        $product->category=$req->category;
        $product->gallery=$req->gallery;
        $product->save();
        return redirect('/adminurunler');
    }

    function duzenle($id){
        $data['kullanici_bilgileri']=User::find($id);
        return view('adminkullaniciduzenle',$data);
    }

    function duzenle_post(Request $req){
        $user=User::find($req->input('id'));
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->save();
        return redirect('/adminkullanicilar');
    }

    function sil($id){
        User::where('id',$id)->delete();
        return redirect('/adminkullanicilar');
    }

    function urunlerDuzenle($id){
        $data['urun_bilgileri']=Product::find($id);
        return view('adminurunduzenle',$data);
    }

    function urunlerDuzenle_post(Request $req){
        $user=Product::find($req->input('id'));
        $user->name=$req->input('name');
        $user->price=$req->input('price');
        $user->category=$req->input('category');
        $user->description=$req->input('description');
        $user->gallery=$req->input('gallery');
        $user->save();
        return redirect('/adminurunler');
    }

    function urunlerSil($id){
        Product::where('id',$id)->delete();
        return redirect('/adminurunler');
    }


    function adminGetir()
    {
        $data['tum_adminler']=Admin::get();
        return view('admingoster',$data);
    }

    function adminEkle()
    {
        return view('adminekleme');
    }
    function adminEkle_post(Request $req)
    {
        $user= new Admin;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/admingoster');
    }

    function adminDuzenle($id){
        $data['admin_bilgileri']=Admin::find($id);
        return view('adminduzenleme',$data);
    }

    function adminDuzenle_post(Request $req){
        $user=Admin::find($req->input('id'));
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->save();
        return redirect('/admingoster');
    }
    function adminSil($id){
        Admin::where('id',$id)->delete();
        return redirect('/admingoster');
    }

}
