<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notifications;

class NotificationController extends Controller
{
    public function index()
    {
        return view('notification');
    }

    public function notification()
    {
        return view('about-notification');
    }

}
