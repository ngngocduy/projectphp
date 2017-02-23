<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;

class CateController extends Controller {

	public function getAdd(){
		return view('admin.cate.add');
	}

	public function postAdd(CateRequest $request){
		print_r($request->txtCateName);
	}

}
