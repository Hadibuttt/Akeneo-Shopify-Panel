<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notifications;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = notifications::all();

        return view('notification', compact('notifications'));
    }

    public function create()
    {
        return view('about-notification');
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
        notifications::create($validatedData);
        return redirect('/notification');
    }

    public function update($id)
    {
        $notification = notifications::find($id);
        return view('update-notification', compact('notification')); 
    }

    public function updated(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
        notifications::find($id)->update($validatedData);
        return redirect('/notification');
    }

}
