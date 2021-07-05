<?php

namespace App\Domains\Support\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domains\Support\Models\Support;
use Auth;

class SupportController extends Controller
{
    public function store(Request $r){
        $this->validate($r,[
            'type_of_support' => 'required',
            'prior_knowledge' => 'required',
            'lpo' => 'nullable|mimes:jpg,jpeg,png|max:2048'
        ]);

        if($r->file('lpo')){
            $lpo_img = file_get_contents($r->file('lpo'));
            $lpo_data = base64_encode($lpo_img);
        }
        $support = Support::create([
            'user_id' => Auth::user()->id,
            'type_of_support' => $r->input('type_of_support'),
            'prior_knowledge' => $r->input('prior_knowledge'),
            'lpo' => $lpo_data ?? null
        ]);
        if($support){
            return back()->with('success','Support Successfully Applied!');
        }else{
            return back()->with('error','Error during Application, Please Retry!');
        }

    }
}
