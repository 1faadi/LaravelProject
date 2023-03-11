<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function sliderForm(){
        $users = auth()->user();
        return view('sliders.slider_form',compact('users'));
    }
    public function sliderStore(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|image|',
        ]);

        $slider = new Slider();
        //On left field name in DB and on right field name in Form/view/request
        $slider->title = $request->title;
        $slider->desc = $request->desc;
        $img = $request->file('image');
        if ($img){
            $name_gen= uniqid().".".$img->getClientOriginalExtension();
            Image::make($img)->resize(1920,1080)->save('images/'.$name_gen);
            $slider_img = 'images/'.$name_gen;
        }
        $slider->img=$slider_img;
        $slider->save();
        return redirect('/slider-table')->with('success','Slider Created Successfully');
    }
    public function viewSlider(){
        $slider = Slider::all();
        return view('sliders.slider_table',compact('slider'));
    }
    public function deleteSlider($id){
        $slider= Slider::where('id',$id)->first();
        if (file_exists($slider->image)){
            unlink($slider->image);
            Slider::where('id',$id)->delete();
        }
        Slider::where('id',$id)->delete();
        return redirect('/slider-table')->with('success','Slider Deleted!');
    }
    public function editSlider($id){
        $slider = Slider::where('id',$id)->first();
        return view('sliders.slider_edit',compact('slider'));
    }
    public function updateSlider(Request $request,$id){
        $slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->desc = $request->desc;
        $img = $request->file('image');
        if ($img){
            $destination = 'images/'.$slider->img;
            if (File::exists($destination)){
                File::delete($destination);
            }
            $name_gen= uniqid().".".$img->getClientOriginalExtension();
            Image::make($img)->resize(1920,1080)->save('images/'.$name_gen);
            $slider_img = 'images/'.$name_gen;
        }
        $slider->img=$slider_img;
        $slider->update();
        return redirect('/slider-table')->with('success','Slider Updated Successfully');
    }
}
