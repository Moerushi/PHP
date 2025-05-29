<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUpload extends Controller
{
    //
    public function index() {
        return view('upload');
    }

    public function upload(Request $request) {
        // создаем cookie
        $number = $request->cookie('number_of_uploads') ? : 0;

        if($number >2) {
            return response('Too many uploads ' . $number);
        }
        // берет данные из инпута с именем file_name
        $name = $request->input('file_name');
        // берет файл из запроса по полю uploaded_file
        $file = $request->file('uploaded_file');

        // получаем полный путь до картинки во временном хранилище
        $tempPath = $file->getRealPath();
        // прописываем новое имя файла, состоящее из названия и расширения
        $newFileName = $name . '.' . $file->getClientOriginalExtension();

        //перемещаем файл в папку uploads в папке public и создаем имя $newFileName
        $file->move('uploads', $newFileName);
        $number++;

        // просто выводим адрес расположения картинки
        return response($request->header('host') . '/uploads/' . $newFileName)->cookie('number_of_uploads', $number);
    }
}
