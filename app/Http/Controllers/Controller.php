<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; // Use the correct namespace
use App\Models\Menu; // Pastikan ini ada


abstract class Controller
{
    public function create()
{
    return view('menus.create');
}

public function store(request $request)
{
    // Validasi input
    
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
    ]);
    

    // Simpan data baru ke database
        Menu::create([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
    ]);
}
public function edit($id)
{
    $menu = Menu::findOrFail($id);
    return view('menus.edit', compact('menu'));
}

public function update(Request $request, $id)
{
    // Validasi input
    
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
    ]);
    

    // Update data menu
    
    $menu = Menu::findOrFail($id);
    $menu->update([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
    ]);
}
public function destroy($id)
{
        $menu = Menu::findOrFail($id);
        $menu->delete();
    
        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully!');
        return redirect()->route('menus.index')->with('success', 'Menu updated successfully!');
}


}
