<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    //

    public function store(Request $request){
        $this->validate($request, [
            'subject' => 'required',
            'location' => 'required',
            'fees' => 'required'
        ]);


        Subject::create([$request->only('name', 'location', 'fees')]);

        return redirect()->route('/');
    }
}
