<?php

namespace App\Services;

use File;
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

    public function handleUploadPermanentImage($model, $folder)
    {
        $temporaryFile = TemporaryFile::where('folder', $folder)->first();

        if($temporaryFile) {
            $model->addMedia(storage_path('app/product_image/tmp/'. $folder . '/' . $temporaryFile->filename))
                ->toMediaCollection('product-image');

            rmdir(storage_path('app/product_image/tmp/'. $folder));
            $temporaryFile->delete();
        }
    }

    public function handleUploadSeederImage($name)
    {
        $originFolder = public_path('images/'. str_replace(' ', '_', strtolower($name)).'.png');

        $folder = uniqid() . '-' . Carbon::now()->timestamp;

        mkdir(storage_path('app/product_image/tmp/'. $folder), 0775, true);

        $destinationFolder = storage_path('app/product_image/tmp/'. $folder.'/'.basename($originFolder));

        File::copy($originFolder, $destinationFolder);

        TemporaryFile::create([
            'folder' => $folder,
            'filename' => basename($originFolder),
        ]);

        return $folder;
    }
}
