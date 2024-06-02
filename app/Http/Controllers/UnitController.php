<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add_form()
    {
        $unit = new Unit(); // Instantiate an empty Unit

        return view('unit_add', compact('unit'));
    }

    public function create(Request $request)
    {
        $unitImage = $request->file('unit_image')->store('images', ['disk' => 'public']);

        Unit::create([
            'unit_name' => $request->unit_name,
            'unit_desc' => $request->unit_desc,
            'unit_image' => $unitImage,
            'price' => $request->price,
        ]);

        return redirect()->route('unit.list');
    }

    public function edit(Unit $unit)
    {
        $unitEdit = Unit::where('id', $unit->id)->first();
        $units = Unit::all();

        return view('unit_edit', compact('unitEdit', 'units'));
    }

    public function update(Request $request, Unit $unit)
    {
        if ($request->hasFile('unit_image')) {
            if ($request->oldImage) {
                Storage::disk('public')->delete($request->oldImage);
            }

            $unitImage = $request->file('unit_image')->store('images', ['disk' => 'public']);
        } else {
            $unitImage = $request->oldImage;
        }

        $unit->update([
            'unit_name' => $request->unit_name,
            'unit_desc' => $unit->unit_desc,
            'unit_image' => $unitImage,
            'price' => $request->price,
            'color' => $request->color,
        ]);

        return redirect()->route('unit.list')->with('success', 'Unit updated successfully');
    }

    public function destroy(Unit $unit)
    {
        if ($unit->unit_image) {
            Storage::disk('public')->delete($unit->unit_image);
        }

        $unit->delete();

        return redirect()->route('unit.list');
    }

    public function showUnit()
    {
        $units = Unit::all();

        return view('unit', ['units' => $units]);
    }

    public function showUnitOrdered()
    {
        $units = Unit::all();

        return view('order_history', ['units' => $units]);
    }

    public function show_unit(Unit $unit)
    {
        return view(
            'unit_detail',
            [
                'unit' => $unit
            ],
        );
    }

    public function index1()
    {
        $units = Unit::with('category')->get();

        return view('unit.list', compact('units'));
    }
}
?>
