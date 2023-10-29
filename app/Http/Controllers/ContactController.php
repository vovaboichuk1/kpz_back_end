<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;
class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
    //  $validation =  $req->validate(['name'=>'required|min:5|max:10']);
    }
}
