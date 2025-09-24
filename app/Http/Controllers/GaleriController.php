<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index() {
        return view('dokumentasi-tradisi-insert');
    }

    public function getDokumentasiTradisi() {
            $galeri = DokumentasiTradisi::orderBy('created_at', 'desc')->get();
            return response()->json([
                'message' => 'Dokumentasi tradisi sukses diambil',
                'galeri' => $galeri 
            ]);
            
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'jenis' => 'required|string|in:Tradisi,Budaya,Aktivitas,Travel',
            'deskripsi' => 'required|text',
            'link_dokumentasi' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000' 
        ], [
            'jenis.required' => 'Jenis is required.',
            'jenis.string' => 'Jenis must be text.',
            'jenis.in' => 'Jenis must be Tradisi, Budaya, Aktivitas, or Travel.',
            'link_dokumentasi.string' => 'Link dokumentasi must be text.',
            'link_dokumentasi.max' => 'Link dokumentasi cannot exceed 255 characters.',
            'judul.string' => 'Title must be text.',
            'judul.max' => 'Title cannot exceed 255 characters.',
            'foto.image' => 'File must be an image.',
            'foto.mimes' => 'Image must be in JPEG, PNG, JPG, or GIF format.',
            'foto.max' => 'Image size cannot exceed 5MB.'
        ]);
        
        $galeri = new GaleriBudaya();
        $galeri->judul = $validated['judul'];
        $galeri->jenis = $validated['jenis'];
        $galeri->deskripsi = $validated['deskripsi'];
        $galeri->link_dokumentasi = $validated['link_dokumentasi'];
        $galeri->foto = $validated['foto'];
        
        
         if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            
            Log::info('File upload details:', [
                'original_name' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
                'mime_type' => $file->getMimeType(),
                'is_valid' => $file->isValid(),
                'error' => $file->getError()
            ]);
            
            if (!$file->isValid()) {
                throw new Exception('File upload failed: ' . $file->getErrorMessage());
            }
            
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->move(public_path('images/news'), $filename);
            
            if (!$path) {
                throw new Exception('Failed to store uploaded file');
            }

            $dokumentasi->foto = $path;
            $dokumentasi->save();
        }
    }
}
