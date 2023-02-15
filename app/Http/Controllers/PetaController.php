<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class PetaController extends Controller
{
    public function search(Request $request){
        if(!empty($request->input('keyword'))){
            $hasil = DB::table('petaBidang')->where('nomor','like','%'.$request->input('keyword').'%')->get();
            return response()->json($hasil);
        }
        else{
            return response()->json([]);
        }
    }
    public function showToGuest(Request $request)
    {
        if($request->input("nomor"))
        {
            $nomor = $request->input('nomor');
            $petaBidang = DB::table('petaBidang')->where('nomor',$nomor)->first();
            if($petaBidang)
            {
                return view('peta_bidang.ViewPeta')->with('petaBidang',$petaBidang);
            }else{
                return view('peta_bidang.ViewPeta');
            }
        }
        return view('peta_bidang.templateUser');
    }
    public function index()
    {
        $namaAdmin = Auth::user()->name;
        $petas = DB::select('select * from petaBidang');
        return view('peta_bidang.index')->with(['petas'=>$petas,'namaAdmin'=>$namaAdmin]);
    }
    public function show(Request $request,$id)
    {
        $target = DB::table('petaBidang')->where('id',$id)->get();
        return response()->json($target);
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
    public function edit(Request $request)
    {
        $request->validate([
            'nomor' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'file' => 'required|mimes:jpg,jpeg'
        ]);
        $edited = DB::table('petaBidang')->where('id',$request->input('id'))->get();
        // dd($edited);
        if($request->input('nomor'))
        {
            $nomor = $request->input('nomor');
        }
        if($request->input('judul'))
        {
            $judul = $request->input('judul');
        }
        if($request->input('deskripsi'))
        {
            $deskripsi = $request->input('deskripsi');
        }
        if($request->file('file'))
        {
            $request->validate(['file' => 'required|mimes:jpg,jpeg']);
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalName();
            $request->file->move(public_path('images'), $fileName);
        }
        try{
            DB::table('petaBidang')
            ->where('id', $request->input('id'))
            ->update(['nomor' => $nomor,'judul'=> $judul,'deskripsi'=>$deskripsi,'namaGambar'=>$fileName,'updated_at'=>now()]);
            $filePath = "images/".$edited[0]->namaGambar;
            if(File::exists($filePath)){
                File::delete($filePath);
            }
            return redirect()->route('admin.index')->with('success','Berhasil mengupdate peta bidang');


        }catch(\Exception $e)
        {
            return redirect()->route('admin.index')->with('failed','Gagal mengupdate peta bidang');
        }

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
