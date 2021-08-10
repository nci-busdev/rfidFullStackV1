<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Models\Rfid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RfidController extends Controller
{
    public function index()
    {
        $rfids = Rfid::latest()->get();

        return view('admin.rfid.index', compact('rfids'));
    }

    public function create()
    {
        return view('admin.rfid.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_rfid' => 'required|unique:rfids',
            'name' => 'required',
        ]);

        $rfid = Rfid::create([
            'id_rfid' => $request->id_rfid,
            'name' => $request->name,
        ]);

        if ($rfid) {
            return redirect()->route('admin.rfid.index')->with(['success' => 'Data berhasil disimpan!']);
        } else {
            return redirect()->route('admin.rfid.index')->with(['success' => 'Data gagal disimpan!']);
        }
    }

    public function edit(Rfid $rfid)
    {
        return view('admin.rfid.edit', compact('rfid'));
    }

    public function update(Request $request, Rfid $rfid)
    {
        $this->validate($request, [
            'id_rfid' => 'required',
            'name' => 'required',
        ]);

        $rfid = Rfid::findOrFail($rfid->id);

        $rfid->update([
            'id_rfid' => $request->id_rfid,
            'name' => $request->name,
        ]);

        if ($rfid) {
            return redirect()->route('admin.rfid.index')->with(['success' => 'Data berhasil diubah!']);
        } else {
            return redirect()->route('admin.rfid.index')->with(['success' => 'Data gagal diubah!']);
        }
    }

    public function destroy($id)
    {
        $rfid = Rfid::findOrFail($id);

        $rfid->delete();

        if ($rfid) {
            return redirect()->route('admin.rfid.index')->with(['success' => 'Data berhasil dihapus!']);
        } else {
            return redirect()->route('admin.rfid.index')->with(['success' => 'Data gagal dihapus!']);
        }
    }
}
