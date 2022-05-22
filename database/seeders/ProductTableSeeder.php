<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Services\ProductService;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ProductService $productService)
    {
        $category = Category::latest()->first();

        $dataProducts = [
            [
                'name' => 'majoo Pro',
                'price' => '2750000',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'category_id' => $category->id
            ],
            [
                'name' => 'majoo Advance',
                'price' => '2750000',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a.',
                'category_id' => $category->id
            ],
            [
                'name' => 'majoo Lifestyle',
                'price' => '2750000',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'category_id' => $category->id
            ],
            [
                'name' => 'majoo Desktop',
                'price' => '2750000',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'category_id' => $category->id
            ]
        ];

        foreach ($dataProducts as $dataProduct) {
            $product = Product::create([
                'name' => $dataProduct['name'],
                'price' => $dataProduct['price'],
                'description' => $dataProduct['description'],
                'category_id' => $dataProduct['category_id']
            ]);

            $temporaryFolder = $productService->handleUploadSeederImage($dataProduct['name']);

            $productService->handleUploadPermanentImage($product, $temporaryFolder);
        }
    }
}
