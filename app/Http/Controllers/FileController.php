<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
Use App\Document;
class FileController extends Controller
{

    // public function index()
    // {
    //     return view('file');
    // }

    public function fileSave()
    {
       request()->validate([
        'fileName' => 'required',
        'fileName.*' => 'mimes:doc,docx,pdf,txt,jpeg,png,jpg,gif,svg'
       ]);

       if ($files = $request->file('fileName')) {
           $destinationPath = 'public/upload/documents/'; // upload path
           $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $fileName);
           $insert['nom_document'] = "$fileName";
        }

        $check = Document::insertGetId($insert);

       /*  return Redirect::to("file-upload")
        ->withSuccess('File has been uploaded.'); */

    }
}
