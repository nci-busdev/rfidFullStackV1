<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'list data item',
            'data' => $items
        ], 200);
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'data item by id',
            'data' => $item
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:items',
            'image' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $item = Item::create([
            'name' => $request->name,
            'image' => $request->image
        ]);

        if ($item) {
            return response()->json([
                'success' => true,
                'message' => 'item created',
                'data' => $item
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => 'item failed to save'
        ], 409);
    }

    public function update(Request $request, Item $item)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $item = Item::findOrFail($item->id);

        if ($item) {
            $item->update([
                'name' => $request->name,
                'image' => $request->image
            ]);

            return response()->json([
                'success' => true,
                'message' => 'item updated',
                'data' => $item
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'item not found'
        ], 404);
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        if ($item) {
            $item->delete();

            return response()->json([
                'success' => true,
                'message' => 'item deleted'
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'item not found'
        ], 404);
    }
}
