<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::latest()->get();

        return view('admin.item.index', compact('items'));
    }

    public function create()
    {
        return view('admin.item.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:items',
            'image' => 'required'
        ]);

        $item = Item::create([
            'name' => $request->name,
            'image' => $request->image
        ]);

        if ($item) {
            return redirect()->route('admin.item.index')->with(['success' => 'Data berhasil disimpan!']);
        } else {
            return redirect()->route('admin.item.index')->with(['error' => 'Data gagal disimpan!']);
        }
    }

    public function edit(Item $item)
    {
        return view('admin.item.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required'
        ]);

        $item = Item::findOrFail($item->id);

        $item->update([
            'name' => $request->name,
            'image' => $request->image
        ]);

        if ($item) {
            return redirect()->route('admin.item.index')->with(['success' => 'Data berhasil diubah!']);
        } else {
            return redirect()->route('admin.item.index')->with(['success' => 'Data gagal diubah!']);
        }
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        $item->delete();

        if ($item) {
            return redirect()->route('admin.item.index')->with(['success' => 'Data berhasil dihapus!']);
        } else {
            return redirect()->route('admin.item.index')->with(['success' => 'Data gagal dihapus!']);
        }
    }
}
