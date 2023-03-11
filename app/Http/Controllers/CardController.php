<?php

namespace App\Http\Controllers;

use App\Models\Cards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class CardController extends Controller
{
    public function cardForm()
    {
        return view('cards.card_form');
    }

    public function cardStore(Request $request)
    {$img = $request->file('image');
            if ($request->hasFile('image')) {
                foreach ($img as $file) {
                    $name_gen = uniqid() . "." . $file->getClientOriginalExtension();
                    Image::make($file)->resize(1920, 1080)->save('images/' . $name_gen);
                    $card_img = 'images/' . $name_gen;
                }
            }

        $card = new Cards();

            $card->heading = $request->heading;
            $card->para = $request->para;
            $card->img = $card_img;

            $card->save();

            return redirect('/card-form')->with('success', 'Card Created Successfully!');

        }
        public function viewCards(){
        $card = Cards::all();
        return view('cards.card_table',compact('card'));
        }
    public function deleteCards($id){
        $card= Cards::where('id',$id)->first();
        if (file_exists($card->image)){
            unlink($card->image);
            Cards::where('id',$id)->delete();
        }
        Cards::where('id',$id)->delete();
        return redirect('/card-table')->with('success','Card Deleted!');
    }
    public function editCards($id){
        $card = Cards::where('id',$id)->first();
        return view('cards.card_edit',compact('card'));
    }
    public function updateCards(Request $request,$id){
        $card = Cards::find($id);
        $card->heading = $request->heading;
        $card->para = $request->para;
        $img = $request->file('image');
        if ($img){
            $destination = 'images/'.$card->img;
            if (File::exists($destination)){
                File::delete($destination);
            }
            $name_gen= uniqid().".".$img->getClientOriginalExtension();
            Image::make($img)->resize(1920,1080)->save('images/'.$name_gen);
            $card_img = 'images/'.$name_gen;
        }
        $card->img=$card_img;
        $card->update();
        return redirect('/card-table')->with('success','card Updated Successfully');
    }
}
