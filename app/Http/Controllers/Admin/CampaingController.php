<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaing;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CampaingController extends Controller
{
    function index()
    {
        $categories = Category::all();
        $campaings = Campaing::all();

        return view('admin.campaings.index', compact('categories', 'campaings'));
    }

    function create()
    {
        $categories = Category::all();
        return view('admin.campaings.create', compact('categories'));
    }

    function delete($id)
    {
        $campaings = Campaing::find($id);
        $destination = 'uploads/campaing/' . $campaings->campaing_image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $campaings->delete();
        return redirect()->back()->with('status', 'campaign deleted');
    }

    function edit($id)
    {
        $campaign = Campaing::find($id);
        $categories = Category::all();
        return view('admin.campaings.edit', compact('campaign','categories'));
    }

    function add(Request $request)
    {

        $campaing = new Campaing(); // creates an empty array []
        $campaing->campaing_name = $request->campaing_name;
        $file = $request->file('campaing_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/campaing/', $filename);
        $campaing->campaing_image = $filename;
        $campaing->campaing_goal = $request->campaing_goal;
        $campaing->campaing_total_amount_collected = $request->campaing_total_amount_collected;
        $campaing->campaing_description = $request->campaing_description;
        $campaing->category_id = $request->category_id;
        $campaing->save();
        return redirect('/campaings')->with('status', 'Campaign created Successfully');
    }

    function update(Request $request, $id)
    {
        $campaing = Campaing::find($id);
        $campaing->category_id = $request->input('category_id');
        $destination = 'uploads/campaing/'.$campaing->campaing_image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $file = $request->file('campaing_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/campaing/', $filename);
        $campaing->campaing_image = $filename;
        $campaing->campaing_name = $request->input('campaing_name');
        $campaing->campaing_goal = $request->input('campaing_goal');
        $campaing->campaing_total_amount_collected = $request->input('campaing_total_amount_collected');
        $campaing->campaing_description = $request->input('campaing_description');
        $campaing->update();
        return redirect('/campaings')->with('status', 'updated');
    }
}