<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::latest()->get();

        return view('admin.location.index', compact('locations'));
    }

    public function create()
    {
        return view('admin.location.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_location' => 'required|unique:locations',
            'name' => 'required',
        ]);

        $location = Location::create([
            'id_location' => $request->id_location,
            'name' => $request->name,
        ]);

        if ($location) {
            return redirect()->route('admin.location.index')->with(['success' => 'Data berhasil disimpan!']);
        } else {
            return redirect()->route('admin.location.index')->with(['success' => 'Data gagal disimpan!']);
        }
    }

    public function edit(Location $location)
    {
        return view('admin.location.edit', compact('location'));
    }

    public function update(Request $request, Location $location)
    {
        $this->validate($request, [
            'id_location' => 'required',
            'name' => 'required',
        ]);

        $location = Location::findOrFail($location->id);

        $location->update([
            'id_location' => $request->id_location,
            'name' => $request->name,
        ]);

        if ($location) {
            return redirect()->route('admin.location.index')->with(['success' => 'Data berhasil diubah!']);
        } else {
            return redirect()->route('admin.location.index')->with(['success' => 'Data gagal diubah!']);
        }
    }

    public function destroy($id)
    {
        $location = Location::findOrFail($id);

        $location->delete();

        if ($location) {
            return redirect()->route('admin.location.index')->with(['success' => 'Data berhasil dihapus!']);
        } else {
            return redirect()->route('admin.location.index')->with(['success' => 'Data gagal dihapus!']);
        }
    }
}
