<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class FilesController extends Controller
{
    public function filesForm()
    {
        return view('files.files_upload');
    }

    public function filesStore(Request $request)
    {
        $files = $request->file('image');
        if ($request->hasFile('image')) {
            foreach ($files as $file) {
                $name_gen = uniqid() . "." . $file->getClientOriginalExtension();
                Image::make($file)->resize(1920, 1080)->save('images/' . $name_gen);
                $slider_img = 'images/' . $name_gen;
                $data = new Files();
                $data->files = $slider_img;
                $data->save();
            }
        }
        return redirect('/files-table')->with('success', 'Image Uploaded!');
    }

    public function viewFiles()
    {
        $files = Files::all();
        return view('files.files_table', compact('files'));
    }

    public function deleteFiles($id)
    {
        $files = Files::where('id', $id)->first();
        if (file_exists($files->image)) {
            unlink($files->image);
            Files::where('id', $id)->delete();
        }
        Files::where('id', $id)->delete();
        return redirect('/files-table')->with('success', 'Image Deleted!');
    }

    public function editFiles($id)
    {
        $files = Files::where('id', $id)->first();
        return view('files.files_edit', compact('files'));
    }

    public function updateFiles(Request $request, $id)
    {
        $files = Files::find($id);
        if ($request->hasFile('image')) {
            $destination = 'images/'.$files->files;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
                $file = $request->file('image');
                $name_gen = $file->getClientOriginalExtension();
            Image::make($file)->resize(1920, 1080)->save('images/' . $name_gen);
                $filename = time().'.'.$name_gen;
            $filename = 'images/' . $name_gen;
                $files->files = $filename;
            }

        $files->update();
        return redirect('files-table')->with('success', 'files updated successfully');
    }

}



//$files = Files::find($id);
//$img = $request->file('image');
//if ($request->hasFile('image')) {
//    foreach ($files as $file) {
//        $destination = 'images/' . $files->img;
//        if (File::exists($destination)) {
//            File::delete($destination);
//        }
//        $name_gen = uniqid() . "." . $file->getClientOriginalExtension();
//        Image::make($file)->resize(1920, 1080)->save('images/' . $name_gen);
//        $slider_img = 'images/' . $name_gen;
//    }
//    $files->img = $slider_img;
//    $files->update();
//    return redirect('/files-table');
