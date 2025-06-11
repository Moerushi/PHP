<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\TaskUser;
use Illuminate\Http\Request;
use PDF;


class PdfGeneratorController extends Controller
{
    public function index($id)
    {
        $user = TaskUser::where('id', $id)->first();
        print_r($user);
        $data = [
            'title' => 'Resume',
            'resume' => $user
        ];
        $pdf = PDF::loadView('resume', $data);
        return $pdf->stream('resume.pdf');
    }
}
