<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserControler extends Controller
{
   public function showUserName(){
       return 'sherif essam';
   }
   public function getIndex(){
       $datas=[];
       $datas['id']=10;
       $datas['name']='sherif essam';

     //  return view('welcome') ->with(['age'=>26,'email'=>'sherifessam1132@gmail.com']);
      $data=[];
       $obj=new \stdClass();
       $obj -> name = 'sherifs';
       $obj -> Age =  25;
       $obj -> job=['web developer','Backend developer'];
       return view('welcome',compact('obj'));
   }
}
