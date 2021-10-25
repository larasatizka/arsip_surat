<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;

class SuratController extends Controller
{
    //
    public function index()
    {
        $data = Surat::get()->all();
        return view('surat.index', compact('data'));
    }

    public function create()
    {
        return view('surat.create');
    }

    public function store(Request $request)
    {
        // debugCode($request->all());

        $validate= $this->validate($request, [
            'file' => 'required|mimes:pdf'
        ]);

        
        if ($validate) {
        	if ($request->hasFile('file')) {
	        	$filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('file')->getClientOriginalName());
	            $request->file('file')->move(public_path('asset'), $filename);
		           $pr = new Surat;
			       $pr->nomor_surat = $request->nomor_surat;
			       $pr->kategori = $request->kategori;
			       $pr->file = $filename;
			       $pr->judul = $request->judul;
			       $pr->save();

			    if ($pr->save()) {
		        	return redirect('surat')->with('success', 'Tambah Arsip Surat berhasil.!');
		        } else{
		        	return redirect('surat')->with('error', 'Tambah Arsip Surat gagal.!');
		        }
	        } 
	        else{
	        	return back()->with('error', 'File tidak ditemukan');
	        } 	
        }else{
	        return back()->with('error', 'Format file harus PDF');
	    } 	
        
    }

    public function destroy($id)
    {
        // hapus file
		$gambar = Surat::find($id);
		// File::delete('asset/'.$gambar);
        $path = public_path().'/asset/'.$gambar->file;
        unlink($path);
	 
        $data = Surat::where('id', $id)->delete();
        return redirect('surat')->with('success', 'Hapus Arsip Surat berhasil.!');
    }

    public function show($id)
    {
        $data = Surat::where('id', $id)->first();
        return view('surat.detail', compact('data'));
    }

    public function update(Request $request, $id)
    {
        
        // debugCode($request->all());
        $pr = Surat::where('id', $id)->first();


        if($request->hasFile('file') == '') {

            $pr->nomor_surat = $request->nomor_surat;
			$pr->kategori = $request->kategori;
			$pr->judul = $request->judul;

            $pr->save();

        } else{
        	$validate= $this->validate($request, [
	            'file' => 'required|mimes:pdf'
	        ]);

	        if ($validate) {
	        	//hapus old image
	            $path = public_path().'/asset/'.$pr->file;
	            unlink($path);

	            //upload new image
	            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('file')->getClientOriginalName());
	            $request->file('file')->move(public_path('asset'), $filename);
	            $pr->nomor_surat = $request->nomor_surat;
				$pr->kategori = $request->kategori;
				$pr->file = $filename;
				$pr->judul = $request->judul;

	            $pr->save();
	        }
	        else{
	        	return redirect()->back()->with('error', 'Format file harus PDF');
	        }
        	
        }

        if ($pr->save()) {
           return redirect()->back()->with('success', 'Update Arsip Surat berhasil.!');
        } else {
            return redirect()->back()->with('error', 'Update Arsip Surat gagal.!');
        }
        
    }

    public function unduh($id)
    {
        $data = Surat::where('id', $id)->first();
        $path = public_path().'/asset/'.$data->file;
        return response()->download($path);
    }

    public function about()
    {
        return view('surat.about');
    }
}
