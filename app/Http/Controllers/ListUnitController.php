<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class ListUnitController extends Controller
{
    public function show($code) {
        $unit = Unit::dataWithCode($code);
        return view('list_unit', ['unit' => $unit]);
    }

    public function show_list_unit(Request $request){

        if($request->has('search')){
            $unit = Unit::where('unit_name', 'like', "%".$request->search."%")->orwhere('price', 'like', "%".$request->search."%")->paginate(5)->withQueryString();
        }else{
            $unit = Unit::paginate(10);
        }

        return view(
            'unit_list',
            [
                'unit' => $unit
            ],
        );
    }

    public function create()
    {
        return view('unit.create');
    }

    public function showunit(Unit $unit){
        return view('unit_list',
            [
                'unit' => $unit
            ],
        );
    }
}
?>
