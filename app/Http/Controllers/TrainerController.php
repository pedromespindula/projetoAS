<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
{
    $trainers = Trainer::all();
    return view('trainer.index', compact('trainers'));
}

public function create()
{
    return view('trainer.create');
}

public function store(Request $request)
{
    Trainer::create($request->all());
    return redirect('trainer')->with('success', 'trainer created successfully.');
}

public function edit($id)
{
    $trainer = Trainer::findOrFail($id);
    return view('trainer.edit', compact('trainer'));
}

public function update(Request $request, $id)
{
    $trainer = Trainer::findOrFail($id);
    $trainer->update($request->all());
    return redirect('trainer')->with('success', 'Trainer updated successfully.');
}

public function destroy($id)
{
    $trainer = Trainer::findOrFail($id);
    $trainer->delete();
    return redirect('trainer')->with('success', 'Trainer deleted successfully.');
}
}
