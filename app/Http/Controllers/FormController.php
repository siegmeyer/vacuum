<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Form;

class FormController extends Controller
{
    


	public function create(Request $request)
	{
		$form = Form::create([
			'user_id' => $request->user()->id,
			'name' => $request->name
		]);

		return response()->json($form, 201);
	}

}
