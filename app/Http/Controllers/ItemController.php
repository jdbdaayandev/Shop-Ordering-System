<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');
        $status = $request->input('status');


        $items = Item::with('category')
            ->where('name', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%")
                ->orWhere('category_id', $category)
                ->orWhere('status', $status)
                ->get();

        $categories = Category::all();


        return view('admin.items.itemLists', compact(['items', 'categories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable|max:255',
            'category' => 'required',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
        ]);

        $item_id = Item::insertGetId([
            'name' => $data['name'],
            'description' => $data['description'],
            'category_id' => $data['category_id'],
            'price' => $data['price'],
            'stock_quantity' => $data['stock_quantity'],
        ]);

        $formattedId = str_pad($item_id, 5, '0', STR_PAD_LEFT);

        Item::where('id', $item_id)->update([
            'item_id' => 'ABC-' . now()->year . '-' . $formattedId,
        ]);

        return redirect()
            ->route('items.index')
            ->with('success', 'Item created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
