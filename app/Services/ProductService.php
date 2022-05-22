<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\TemporaryFile;

class ProductService {

    public function hanldeUploadTemporaryImage($image)
    {
        $file = $image;
        $fileName = $file->getClientOriginalName();
        $folder = uniqid() . '-' . Carbon::now()->timestamp;
        $file->storeAs('product_image/tmp/'. $folder, $fileName);

        TemporaryFile::create([
            'folder' => $folder,
            'filename' => $fileName,
        ]);

        return $folder;
    }
}
