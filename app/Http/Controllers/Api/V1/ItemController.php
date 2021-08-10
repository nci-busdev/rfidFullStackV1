<?php

namespace App\Http\Controllers\Api\V1;

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
        ]);
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'data item by id',
            'data' => $item
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:items',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
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
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'item failed to save'
        ]);
    }

    public function update(Request $request, Item $item)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
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
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'item not found'
        ]);
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        if ($item) {
            $item->delete();

            return response()->json([
                'success' => true,
                'message' => 'item deleted'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'item not found'
        ]);
    }
}
