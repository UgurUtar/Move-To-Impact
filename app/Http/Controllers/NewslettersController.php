<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\Models\Newsletter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class NewslettersController extends Controller
{
    public function store(NewsletterRequest $request) {

        Newsletter::create([
            'email' => $request->email
        ]);
        
        return redirect()->back();

    }

}
