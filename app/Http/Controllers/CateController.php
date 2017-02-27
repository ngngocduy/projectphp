<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\Cate;

class CateController extends Controller {

	public function getList(){
		$data = Cate::select('id','name','parent_id')->orderBy('id','DESC')->get()->toArray();
		return view('admin.cate.list',compact('data'));
	}

	public function getAdd () {
		$parent = Cate::select('id','name','parent_id')->get()->toArray();
		return view('admin.cate.add',compact('parent'));
	}

	public function postAdd(CateRequest $request){
		$cate = new Cate;
		$cate->name = $request->txtCateName;
		$cate->alias =changeTitle($request ->txtCateName);
		$cate->order = $request->txtOrder;
		$cate->parent_id = $request->sltParent;
		$cate->keywords = $request->txtKeywords;
		$cate->description = $request->txtDescription;
		$cate->save();

		return redirect()->route('admin.cate.list')->with(['flag_message' => 'Success !! Complete Add Category']);
	}

	public function getDelete(){

	}

	public function getEdit(){
		
	}

	public function postEdit(){
		
	}


}
