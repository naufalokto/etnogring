<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriBudaya;
use Illuminate\Support\Facades\Log;
use Exception;

class GaleriController extends Controller
{
    public function index() {
        return view('galeri-budaya-insert');
    }

    public function getDokumentasiTradisi() {
            // Placeholder: not used for galeri list here
            return response()->json([
                'message' => 'Endpoint not implemented for galeri list'
            ], 501);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'jenis' => 'required|string|in:development,budaya,kolaborasi,aktivitas,umkm',
            'tanggal_kegiatan' => 'nullable|date',
            'isi_kegiatan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif' 
        ], [
            'jenis.required' => 'Jenis is required.',
            'jenis.string' => 'Jenis must be text.',
            'jenis.in' => 'Jenis must be one of: development, budaya, kolaborasi, aktivitas, umkm.',
            'judul.string' => 'Title must be text.',
            'judul.max' => 'Title cannot exceed 255 characters.',
            'foto.image' => 'File must be an image.',
            'foto.mimes' => 'Image must be in JPEG, PNG, JPG, or GIF format.',
        ]);
        
        $galeri = new GaleriBudaya();
        $galeri->title = $validated['judul'];
        $galeri->jenis = $validated['jenis'];
        $galeri->tanggal_kegiatan = $validated['tanggal_kegiatan'] ?? null;
        $galeri->isi_kegiatan = $validated['isi_kegiatan'];
        
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
            $path = $file->move(public_path('images/gallery'), $filename);
            
            if (!$path) {
                throw new Exception('Failed to store uploaded file');
            }

            $galeri->foto = $filename;
        }

        $galeri->save();

        return redirect()->back()->with('success', 'Galeri berhasil disimpan');
    }
}
