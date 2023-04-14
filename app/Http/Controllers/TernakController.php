<?php

namespace App\Http\Controllers;

use App\Models\Ternak;
use Illuminate\Http\Request;

class TernakController extends Controller
{

        public function tampil(){
            return view('tabelternak');
        }
        public function index(){
            $data = Ternak::all();
            // dd($data);
            return view('tabelternak',compact('data'));
        }
    
        public function tambahternak(){
            return view('tambahternak');
        }
        public function insertdataternak(Request $request){
           // dd($request->all());
            Ternak::create($request->all());
            return redirect()->route('tabelternak')->with('success','Data Berhasil Di Tambahkan');
        }
        public function tampilternak($id){
            $data = Ternak::find($id);
           //dd($data);
            return view('tampilternak', compact(['data']));
         }
    
         public function updatedataternak(Request $request, $id){
            $data = Ternak::find($id);
            $data->update($request->all());
            return redirect()->route('ternak')->with('success','Data Berhasil Di Update');
    
         }
         public function deletedataternak($id){
            $data = Ternak::find($id);
            $data->delete();
           return redirect()->route('ternak')->with('success','Data Berhasil Di Delete');    
    
         }
         public function tabelternak(){
            $data = Ternak::all();
           // dd($data);
            return view('tabelternak', compact(['data']));
         }
         public function formternak(){
            $data = Ternak::all();
           // dd($data);
            return view('formternak', compact(['data']));
         }
    }