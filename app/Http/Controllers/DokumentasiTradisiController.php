<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiTradisi;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Exception;

class DokumentasiTradisiController extends Controller
{
    public function index() {
          //UBAH KE VIEW YANG YANG FIX
        return view('dokumentasi-tradisi-insert');
    }

    public function getDokumentasiTradisi() {
            $dokumentasi = DokumentasiTradisi::orderBy('created_at', 'desc')->get();
            return response()->json([
                'message' => 'Dokumentasi tradisi sukses diambil',
                'dokumentasi' => $dokumentasi 
            ]);
            
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'jenis' => 'required|string|in:development,budaya,kolaborasi,aktivitas,umkm',
            'link_dokumentasi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif' 
        ], [
            'jenis.required' => 'Jenis is required.',
            'jenis.string' => 'Jenis must be text.',
            'jenis.in' => 'Jenis must be one of: development, budaya, kolaborasi, aktivitas, umkm.',
            'link_dokumentasi.required' => 'Link dokumentasi wajib diisi.',
            'link_dokumentasi.string' => 'Link dokumentasi must be text.',
            'link_dokumentasi.max' => 'Link dokumentasi cannot exceed 255 characters.',
            'judul.string' => 'Title must be text.',
            'judul.max' => 'Title cannot exceed 255 characters.',
            'foto.required' => 'Gambar wajib diisi.',
            'foto.image' => 'File must be an image.',
            'foto.mimes' => 'Image must be in JPEG, PNG, JPG, or GIF format.',
        ]);
        
        $dokumentasi = new DokumentasiTradisi();
        $dokumentasi->judul = $validated['judul'];
        $dokumentasi->jenis = $validated['jenis'];
        $dokumentasi->link_dokumentasi = $validated['link_dokumentasi'] ?? null;
        
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
            
            $basePath = env('UPLOAD_BASE_PATH', public_path('images'));
            $uploadPath = rtrim($basePath, '/').'/news';
            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->move($uploadPath, $filename);
            
            if (!$path) {
                throw new Exception('Failed to store uploaded file');
            }

            $dokumentasi->foto = $filename;
        }

        $dokumentasi->save();

        return redirect()->back()->with('success', 'Dokumentasi tradisi berhasil disimpan');
    }

}