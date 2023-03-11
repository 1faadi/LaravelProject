<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function aboutForm(){
        return view('aboutus.about_form');
    }
    public function aboutStore(Request $request){
        $this->validate($request, [
            'heading1' => 'required',
            'heading2' => 'required',
            'para' => 'required',
            'litem1' => 'required',
            'litem2' => 'required',
            'litem3' => 'required',
            'text' => 'required',

        ]);
        $data = array();
        $data ['heading1'] = $request->heading1;
        $data ['heading2'] = $request->heading2;
        $data ['para'] = $request->para;
        $data ['litem1'] = $request->litem1;
        $data ['litem2'] = $request->litem2;
        $data ['litem3'] = $request->litem3;
        $data ['text'] = $request->text;
        DB::table('abouts')->insert($data);
        return view('aboutus.about_form')->with('success','Data Uploaded Successfully');

    }
    public function viewAbout(){
        $about = About::all();
        return view('aboutus.about_table',compact('about'));
    }
    public function deleteAbout($id){
        About::where('id', $id)->delete();
        return redirect()->back()->with('success','Deleted Successfully');
    }
    public function editAbout($id){
        $about = About::find($id);
        return view('aboutus.about_edit',compact('about'));
    }
    public function updateAbout($id, Request $request){
        $data = array();
        $data ['heading1'] = $request->heading1;
        $data ['heading2'] = $request->heading2;
        $data ['para'] = $request->para;
        $data ['litem1'] = $request->litem1;
        $data ['litem2'] = $request->litem2;
        $data ['litem3'] = $request->litem3;
        $data ['text'] = $request->text;
        DB::table('abouts')->where('id',$request->id)->update($data);
        return redirect('/about-table')->with('success','Data Updated Successfully');
    }
}
