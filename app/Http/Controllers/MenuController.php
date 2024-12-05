<?php
namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    // Menampilkan form edit untuk menu tertentu
    public function edit($id)
    {
        $menu = Menu::findOrFail($id); // Ambil data berdasarkan ID
        return view('menus.edit', compact('menu')); // Kirim data ke view
    }
    // Menampilkan form create
    public function create()
    {
        return view('menus.create'); // Mengembalikan view create.blade.php
    }
     // Menampilkan semua menu
     public function index()
     {
         $menus = Menu::paginate(10); // Mengambil semua data menu dari database
         return view('menus.index', compact('menus')); // Mengirim data ke view menus.index
     }
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);

        // Menangani upload gambar jika ada
        if ($request->hasFile('image')) {
            // Menyimpan gambar di public/images dan mendapatkan nama file
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null; // Jika tidak ada gambar, set null
        }

        // Menyimpan data menu ke database
        $menu = new Menu();
        $menu->name = $validated['name'];
        $menu->description = $validated['description'];
        $menu->price = $validated['price'];
        $menu->image = $imagePath; // Menyimpan path gambar di database
        $menu->save();

        // Redirect ke halaman daftar menu setelah menyimpan
        return redirect()->route('menus.index')->with('success', 'Menu created successfully!');
    }
}
