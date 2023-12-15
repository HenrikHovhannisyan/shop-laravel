<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);

        return view('admin.products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProductRequest $request
     * @return RedirectResponse
     */
    public function store(StoreProductRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'color' => 'required',
            'size' => 'required|array',
            'features' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $input = $request->all();

        if ($request->hasFile('images')) {
            $imagePaths = [];

            foreach ($request->file('images') as $image) {
                $destinationPath = 'img/products/';
                $profileImage = date('YmdHis') . '_' . Str::random(5) . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $imagePaths[] = $destinationPath . $profileImage;
            }

            $input['images'] = json_encode($imagePaths);
        }

        $input['category_id'] = $request->category_id;
        $input['size'] = json_encode($request->size);

        Product::create($input);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Factory|View
     */
    public function show(Product $product)
    {
        $size = json_decode($product->size);
        return view('admin.products.show', compact('product', 'size'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Factory|View
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $selectedSizes = json_decode($product->size);
        $availableSizes = ['XS', 'S', 'M', 'L', 'XL'];
        $discount = $product->price - ($product->price * $product->discount) / 100;

        return view('admin.products.edit', compact('product', 'categories', 'selectedSizes', 'availableSizes', 'discount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return RedirectResponse
     */

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'color' => 'required',
            'size' => 'required',
            'features' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $input = $request->all();

        if ($request->hasFile('images')) {
            $imagePaths = [];

            foreach ($request->file('images') as $image) {
                $destinationPath = 'img/products';
                $profileImage = date('YmdHis') . '_' . Str::random(5) . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $imagePaths[] = $destinationPath . '/' . $profileImage;
            }
            $input['images'] = json_encode($imagePaths);

            if ($product->images) {
                $existingImages = json_decode($product->images);
                foreach ($existingImages as $oldImage) {
                    $oldImagePath = public_path($oldImage);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            }
        }

        $input['category_id'] = $request->category_id;
        $product->update($input);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product)
    {
        if ($product->images) {
            $existingImages = json_decode($product->images);
            foreach ($existingImages as $oldImage) {
                $oldImagePath = public_path($oldImage);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        }

        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }

}
