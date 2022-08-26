<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;

use App\Mail\sendMail;

use App\Jobs\SendEmails;
class WelcomeController extends Controller
{


    public function mailSend() {


        Mail::to('abohashimsayed14@gmail.com')->send(new sendMail());

        if (Mail::failures()) {
             return response()->Fail('Sorry! Please try again latter');
        }else{
             return response()->success('Great! Successfully send in your mail');
           }


                //    Mail::to("hashim9543@gmail.com")->send(new sendMail() );

    }

}
