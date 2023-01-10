<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PetaController extends Controller
{
    public function index()
    {
        $petas = DB::select('select * from petaBidang');
        return view('peta_bidang.index')->with('petas',$petas);
    }
    public function delete(Request $request)
    {
        try{
            $deleted = DB::table('petaBidang')->where('id',$request->input('id'))->get();
            $filePath = "images/".$deleted[0]->namaGambar;
            if(File::exists($filePath)){
                File::delete($filePath);
            }
            DB::table('petaBidang')->where('id',$request->input('id'))->delete();
        }catch(\Exception $e)
        {
            return redirect()->route('admin.index')->with('failed','Data Peta Bidang Gagal Dihapus');
        }
        return redirect()->route('admin.index')->with('success','Data Peta Bidang Berhasil Dihapus');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nomor' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'file' => 'required|mimes:jpg,jpeg'
        ]);
        $file = $request->file('file');
        $fileName = time() . '.' . $file->getClientOriginalName();
        $request->file->move(public_path('images'), $fileName);
        try{
            DB::table('petaBidang')->insert([
                'nomor' => $request->input('nomor'),
                'judul' => $request->input('judul'),
                'deskripsi' => $request->input('deskripsi'),
                'namaGambar' => $fileName,
                'created_at'=> now(),
                'updated_at' => now()
            ]);
        }catch(\Exception $e)
        {
            return redirect()->route('admin.index')->with('failed','Peta Bidang Gagal Ditambahkan');
        }
        return redirect()->route('admin.index')->with('success','Peta Bidang Berhasil Ditambahkan');
    }
}
