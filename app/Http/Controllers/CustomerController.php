<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Http\Requests\CustomerStore;

class CustomerController extends Controller
{
	public function showCus(){
		$customer = Customer::get();
		return view('index',compact('customer'));
	}

	public function storeCus(CustomerStore $req){
		$user = new Customer;
		$user->name = $req->name;
		$user->tel = $req->tel;
		$user->address = $req->address;
		$user->save();

		return redirect('/');
	}



	public function edit($id){
		$customer = Customer::find($id);
		return view('edit',compact('customer'));
	}
	
	public function updateCus(CustomerStore $req){
		echo "<br>".$req->name;
		echo "<br>".$req->tel;
		echo "<br>".$req->address;
		echo "<br>".$req->id;
		$item = Customer::find($req->id);
		$item->name = $req->name;
		$item->tel = $req->tel;
		$item->address = $req->address;
		$item->save(); 
		return redirect('/');
	}



	public function deleteCus($id){
		$del = Customer::where('id',$id)->first();
		$del->delete();
		return redirect('/');
	}
	
}

