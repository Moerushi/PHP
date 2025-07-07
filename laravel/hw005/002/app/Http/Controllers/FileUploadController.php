<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function showForm()
    {
        return view('upload-form');
    }

    public function fileUpload(Request $request)
    {

        // if ($request->hasFile('upload-photo')) {
        //     $file = $request->file('upload-photo');
        //     // echo $file->getClientOriginalName();
        //     // echo $file->getClientOriginalExtension();
        //     // echo $file->path();
        //     $file->storeAs('files', $file->getClientOriginalName());
        // } else {
        //     echo 'No such file!';
        // }

        foreach ($request->upload_photo as $photo) {
            echo $photo;
        }
    }
}
