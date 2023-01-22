<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        return view('show');
    }

    public function getMember(){
        $members = Member::all();

        return view('memberlist', ['members' => $members]);

        // return view('memberlist', compact('members'));
    }

    public function save(Request $request){
        $member = new Member;
        $member->firstname = $request->input('firstname');
        $member->lastname = $request->input('lastname');
        $member->save();
        
        return response($member);
    }

    public function update(Request $request){
        if($request->ajax()){
            $member = Member::find($request->id);
            $member->firstname = $request->input('firstname');
            $member->lastname = $request->input('lastname');

            $member->update();
            return response($member);
        }
    }


    public function delete(Request $request){
        if($request->ajax()){
            Member::destroy($request->id);
        }
    }


}
