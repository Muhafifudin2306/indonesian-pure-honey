<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductHasImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexProduct()
    {
        $product = Product::with('images')->latest()->get();
        return view('admin.product.index', compact('product'));
    }

    public function storeProduct(Request $request)
    {
        $coverPath = null;
        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('product-cover', 'public');
        }
        
        $product = Product::create([
            'cover' => $coverPath,
            'product_name' => $request->product_name,
            'category' => $request->category,
            'specification' => $request->specification,
            'knowledge' => $request->knowledge,
            'benefit' => $request->benefit,
            'advantage' => $request->advantage
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imageFile) {
                $imagePath = $imageFile->store('product-images', 'public');
                $product->images()->create(['image' => $imagePath]);
            }
        }

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::with('images')->find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        if ($request->hasFile('cover')) {
            if ($product->cover && Storage::exists($product->cover)) {
                Storage::delete($product->cover);
            }

            $product->cover = $request->file('cover')->store('product-cover', 'public');
        }

        $product->update([
            'product_name' => $request->product_name,
            'category' => $request->category,
            'specification' => $request->specification,
            'knowledge' => $request->knowledge,
            'benefit' => $request->benefit,
            'advantage' => $request->advantage,
        ]);

        if ($request->hasFile('image')) {
            // foreach ($product->images as $image) {
            //     $image->delete();
            // }
    
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('product-images', 'public');
                $product->images()->create([
                    'image' => $imagePath,
                ]);
            }
        }

        return response()->json(['message' => 'Product updated successfully'], 200);
    }

    public function destroy($id)
    {
        $product = Product::with('images')->find($id);
    
        if ($product->cover && Storage::exists($product->cover)) {
            Storage::delete($product->cover);
        }
        foreach ($product->images as $image) {
            if ($image->image_path && Storage::exists($image->image_path)) {
                Storage::delete($image->image_path);
            }
            $image->delete(); 
        }
        $product->delete();
    
        return response()->json(['message' => 'Product deleted successfully'], 200);
    }

    public function destroyImage($id)
    {
        $image = ProductHasImage::find($id);
    
        $image->delete();
    
        return response()->json(['message' => 'Product deleted successfully'], 200);
    }
}
