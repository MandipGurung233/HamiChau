<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaing;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use App\Models\Comment;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;

class CampaingControllers extends Controller
{
    //
    function view()
    {
        $categories = Category::all();
        $campaings = Campaing::all();
        return view('user.dashboard.campaign.indexs', compact('categories', 'campaings'));
    }

    function create()
    {
        $categories = Category::all();
        return view('user.dashboard.campaign.create', compact('categories'));
    }

    function delete($id)
    {
        $campaings = Campaing::find($id);
        $destination = 'uploads/campaing/' . $campaings->campaing_image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $destination1 = 'uploads/campaing/' . $campaings->documents;
        if (File::exists($destination1)) {
            File::delete($destination1);
        }
        $campaings->delete();
        return redirect()->back()->with('status', 'campaign deleted');
    }

    function edit($id)
    {
        $campaign = Campaing::find($id);
        $categories = Category::all();
        return view('user.dashboard.campaign.edit', compact('campaign','categories'));
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

        $file = $request->file('documents');
        $extension1 = $file->getClientOriginalExtension();
        $filename1 = time() . '.' . $extension1;
        $file->move('uploads/campaing/', $filename1);
        $campaing->documents = $filename1;

        $campaing->campaing_description = $request->campaing_description;
        $campaing->category_id = $request->category_id;
        $campaing->save();

        $subscribes = Subscribe::all();
        foreach ($subscribes as $subscribe){
            $store = $subscribe->email;
            $data = ['name'=>$request->campaing_name,'goal'=>$request->campaing_goal, 'description'=>$request->campaing_description];
            $user['to'] = $store;
            Mail::send('mail',$data,function($messages) use ($user){
                $messages->to($user['to']);
                $messages->subject('New Campaign !!');
            });
        }
        return redirect()->back()->with('status', 'Campaign created Successfully');
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

        $destination = 'uploads/campaing/'.$campaing->documents;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $file = $request->file('documents');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/campaing/', $filename);
        $campaing->documents = $filename;

        $campaing->campaing_name = $request->input('campaing_name');
        $campaing->campaing_goal = $request->input('campaing_goal');
        $campaing->campaing_description = $request->input('campaing_description');
        $campaing->update();
        return redirect('/campaings')->with('status', 'updated');
    }


    function details(Request $request, $id)
    {
        $campaings = Campaing::find($id);
        $comments = Comment::all();
        return view('user.campaing', compact('campaings','comments','id')); 
    }
}
