<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Models\Rfid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RfidController extends Controller
{
    public function index()
    {
        $rfids = Rfid::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'list data rfid',
            'data' => $rfids
        ], 200);
    }

    public function show($id)
    {
        $rfid = Rfid::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'data rfid by id',
            'data' => $rfid
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_rfid' => 'required|unique:rfids',
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $rfid = Rfid::create([
            'id_rfid' => $request->id_rfid,
            'name' => $request->name,
        ]);

        if ($rfid) {
            return response()->json([
                'success' => true,
                'message' => 'rfid created',
                'data' => $rfid
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => 'rfid failed to save'
        ], 409);
    }

    public function update(Request $request, Rfid $rfid)
    {
        $validator = Validator::make($request->all(), [
            'id_rfid' => 'required',
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $rfid = Rfid::findOrFail($rfid->id);

        if ($rfid) {
            $rfid->update([
                'id_rfid' => $request->id_rfid,
                'name' => $request->name,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'rfid updated',
                'data' => $rfid
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'rfid not found'
        ], 404);
    }

    public function destroy($id)
    {
        $rfid = Rfid::findOrFail($id);

        if ($rfid) {
            $rfid->delete();

            return response()->json([
                'success' => true,
                'message' => 'rfid deleted'
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'rfid not found'
        ], 404);
    }

    public function showWhereIdRfid($id_rfid)
    {
        $rfid = Rfid::where('id_rfid', $id_rfid)->first();

        return response()->json([
            'success' => true,
            'message' => 'data rfid by id_rfid',
            'data' => $rfid
        ], 200);
    }
}
