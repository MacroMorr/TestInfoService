<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoRequest;
use App\Info;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
   public function submit(InfoRequest $req) {
       (new Info([
           'name' => $req->input('name'),
           'user_id' => Auth::user()->getAuthIdentifier(),
           'company' => $req->input('company'),
           'request' => $req->input('request'),
           'message' => $req->input('message'),
           'phone' => $req->input('phone'),
           'file' => $req->input('file'),
       ]))->save();

       return redirect()->route('home')->with('success', 'Сообщение было добавлено');
   }

   public function allData() {
       $infos = DB::table(Info::$tableName)->where(['user_id' => Auth::user()->getAuthIdentifier()]);
       return view('info', ['data' => $infos->get()]);
   }

}
