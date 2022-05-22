<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\TemporaryFile;
use App\Services\ProductService;

class ProductImageUploadController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function __invoke(Request $request, ProductService $service)
    {
        if($request->hasFile('product_file')) {
            return $service->hanldeUploadTemporaryImage($request->file('product_file'));
        }

        return '';
    }
}
