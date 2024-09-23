<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbtnproducts;

class dbtnproductController extends Controller
{
    public function fnindex(){
        $allitems = dbtnproducts::all();
        return view('productsfolder.index', ['allitems' => $allitems]);
    }

    public function fncreate(){
        return view('productsfolder.create');
    }

    public function fnstore(Request $request){
        $data = $request->validate([
            // dbtcname, dbtcqty, dbtcprice, and dbtcdescription are the names of the form fields in the HTML form,controller,model
            // refer laravel documentation for validation "numeric,decimal....
            'dbtcname' => 'required',
            'dbtcqty' => 'required|numeric',
            'dbtcprice' => 'required|decimal:0,2',
            'dbtcdescription' => 'nullable'
        ]);

    $newproduct = dbtnproducts::create($data);

    return redirect(route('urinproduct.index'));
    }

    // edit
    public function fnedit(dbtnproducts $item) {
        return view ('productsfolder.edit',['item'=>$item]);
    }


    // update
    public function fnupdate(dbtnProducts $item, Request $request){
        $data = $request->validate([
            'dbtcname' => 'required',
            'dbtcqty' => 'required|numeric',
            'dbtcprice' => 'required|decimal:0,2',
            'dbtcdescription' => 'nullable'
        ]);

        $item->update($data);

        return redirect(route('urinproduct.index'))->with('success', 'Product Updated Successfully!');
    }

        // delete
    public function fndelete(dbtnProducts $item){
        $item->delete();
        return redirect(route('urinproduct.index'))->with('success', 'Product deleted Succesffully!');
    }


}
