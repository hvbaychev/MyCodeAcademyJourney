<?php

namespace App\Http\Controllers;
namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Upload;
use Illuminate\Support\Facades\Storage;



class FileUploadController extends Controller
{
    public function index(){
        return view('upload');
    }

    public function store(Request $request){
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048'
        ]);

        $fileName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('upload'), $fileName);

        $upload = Uploads::create([
            'file_name' => $fileName,
            'file_path' => 'upload/' . $fileName

        ]);

        $downloadLink = Storage::url($upload->file_path);

        return back()
            ->with('success', 'You have successfully upload file.')
            ->with('file', $fileName)
            ->with('download_link', $downloadLink);
    }
}
