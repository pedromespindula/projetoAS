<?php

namespace App\Http\Controllers;

use App\Models\Dragon;
use App\Models\Trainer;
use Illuminate\Http\Request;

class DragonController extends Controller
{
    public function index()
{
    $dragons = Dragon::all();
    return view('dragons.index', compact('dragons'));
}

public function create()
{
    $trainers = Trainer::all();
    return view('dragons.create' , compact('trainers'));
}

public function store(Request $request)
{
    $image = $request->file('image')->store('images', 'public');
    $dragon = Dragon::create([
        'name' => $request->name,
        'age' => $request->age,
        'element' => $request->element,
        'image' => $image,
        'trainer_id'=>$request->trainer_id
    ]);
    return redirect('dragon')->with('sucesso', 'Dragon created successfully.');
}

public function edit($id)
{
    $dragon = Dragon::findOrFail($id);
    return view('dragons.edit', compact('dragon'));
}

public function update(Request $request, $id)
{
    $dragon = Dragon::findOrFail($id);
    $dragon->update($request->all());
    return redirect('dragon')->with('success', 'Dragon updated successfully.');
}

public function destroy($id)
{
    $dragon = Dragon::findOrFail($id);
    $dragon->delete();
    return redirect('dragon')->with('success', 'Dragon deleted successfully.');
}
}
