<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier (Request $request){
        if($request->has('search')){
            $data = Supplier::where('nama','LIKE','%'.$request->search.'%')->paginate(5);
        }else{

        $data = Supplier::paginate(5);
        }
        return view('layouts/datasupplier',compact('data'));
    }

    public function tambahsupplier (){

        return view('layouts/tambahsupplier');
    }

    public function insertsupplier (Request $request){
        $data = Supplier::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotosupplier/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('supplier');
    }

    public function tampilanedit($id){
        $data = Supplier::find($id);
        //dd($data);
        return view('layouts/editsupplier', compact('data'));

    }

    public function updatesupplier(Request $request, $id){
        $data = Supplier::find($id);
        $data->update($request->all());
        return redirect()->route('supplier');
    }

    public function deletesupplier($id){
        $data = Supplier::find($id);
        $data->delete();
        return redirect()->route('supplier');
    }
    //
}
