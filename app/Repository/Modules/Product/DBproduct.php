<?php
namespace App\Repository\Modules\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Repository\Modules\Product\ProductInterface;
use Illuminate\Support\Facades\File;

class DBproduct implements ProductInterface
{
    public function all()
    {
        return Product::orderBy('id', 'DESC')->get();
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return $data = [
            'categories' => $categories,
            'brands' => $brands,
        ];
    }

    public function store($request)
    {

        $product = new Product();
        // Uploade image
        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('backend/assets/images/products/', $filename);
            $product->image = $filename;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        return $product->save();
    }

    public function edit($id)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $product = Product::find($id);
        return $data = [
            'categories' => $categories,
            'brands' => $brands,
            'product' => $product,
        ];
    }

    public function update($id, $request)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('admin.product.all')->with('errors', 'product Is Not Found');
        } else {
            // Uploade image
            if ($request->hasFile('image')) {
                $path = public_path('backend/assets/images/products/' . $product->image);
                if (File::exists($path)) {
                    File::delete($path);
                }

                $file = $request->image;
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('backend/assets/images/products/', $filename);
                $product->image = $filename;
            }

            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;
            return $product->update();
        }
    }

    public function delete($id,$request)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('admin.product.all')->with('errors', 'product Is Not Found');
        } else {
                $path = public_path('backend/assets/images/products/' . $product->image);
                if (File::exists($path)) {
                    File::delete($path);
                }
            $product->delete();
            return redirect()->route('admin.product.all')->with('success', 'product Deleted Successfully');

        }
    }

}
