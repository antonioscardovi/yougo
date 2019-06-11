<?php

namespace App\Http\Controllers\Vehicle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{



    public function store(Request $request)
    {

        $this->validate($request, [

            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        if ($request->hasfile('filename')) {

            foreach ($request->file('filename') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . 'img/', $name);
                $data[] = $name;
            }
        }

        $form = new Image();
        $form->filename->getClientOriginalName();


        $form->save();
    }
}