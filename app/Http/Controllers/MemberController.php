<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index() {
        $members = Member::where('status', 'подтвержден')->get();
        return view('index', compact('members'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'age' => 'required|min:0|max:50',
            'breed' => 'required',
            'color' => 'required',
        ]);

        $member = new Member();
        $member->name = $request->input('name');
        $member->age = $request->input('age');
        $member->breed = $request->input('breed');
        $member->color = $request->input('color');
        $member->master = Auth::id();

        $member->save();

        return redirect()->back();
    }

    public function breed(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $breed = new Breed();
        $breed->name = $request->input('name');
        $breed->save();

        return redirect()->back();
    }
}
