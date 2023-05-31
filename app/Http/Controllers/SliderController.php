<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('slider.index', compact('slider'));
    }
    public function create()
    {
        return view('slider.add');
    }
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();

        Storage::putFileAs('public/slider',$request->file('image'),$imageName);
        $slider=Slider::create([
            'image'=>$imageName
        ]);
        return redirect()->route('slider.index');
    }
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('slider.edit', compact('slider'));
    }
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            Storage::putFileAs('public/slider',$request->file('image'),$imageName);
            $slider->image = $imageName;
        }
            $slider->update();
            return redirect()->route('slider.index');
    }
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('slider.index');
    }

}
