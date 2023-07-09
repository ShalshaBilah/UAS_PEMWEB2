<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function obat(Request $request){
        if($request->has('search')){
            $data = Obat::where('nama','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
            $data = Obat::paginate(5);
        }
        $data = Obat::paginate(5);
        return view('layouts\dataobat', compact('data'));    
    }

    public function tambahobat(){
        $data = Obat::all();
        return view('layouts\tambahobat', compact('data'));    
    }

    public function insertobat(Request $request){
        $data = Obat::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoobat/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('obat')->with('success', 'Data Berhasil di Tambahkan');
    }

    public function tampilkandata($id){
        $data = Obat::find($id);
        // dd($data);
        return view('layouts\tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Obat::find($id);
        $data->update($request->all());
        return redirect()->route('obat')->with('success', 'Data Behasil Di Update');
    }

    public function delete($id){
        $data = Obat::find($id);
        $data->delete();
        return redirect()->route('obat')->with('success', 'Data Behasil Di Hapus');
    }
}
