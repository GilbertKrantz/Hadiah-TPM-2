<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function create() {
        return view('createMajor');
    }

    public function store(Request $request) {
        Major::create([
            'name' => $request->name
        ]);

        return redirect('/welcome');
    }
}
