<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Seeder;


class PostCategorySeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //  public function updateOrcreate(Request $request)
    //  {
    //     $mediaImage = public_path("categoryImages/property-5.jpg");
    //     $request->cover_image->saveFromFilePath($mediaImage);
    //  }
    public function run()
    {

        $mediaImage = public_path("categoryImages/property-5.jpg");
        $cover_image = ($mediaImage);
      
        $data = [
            [
                "name" => "Rice",
                'cover_image' => $cover_image,
                "is_active" => 1,
                "is_trending" => 0,
            ],
            [
                "name" => "Beans",
                'cover_image' => $cover_image,
                "is_active" => 1,
                "is_trending" => 0,
            ],
            [
                "name" => "Shawama",
                'cover_image' => $cover_image,
                "is_active" => 1,
                "is_trending" => 0,
            ],
            [
                "name" => "Snacks",
                'cover_image' => $cover_image,
                "is_active" => 1,
                "is_trending" => 1,
            ],
            [
                "name" => "Swallow",
                'cover_image' => $cover_image,
                "is_active" => 1,
                "is_trending" => 1,
            ],
           
        ];

        foreach ($data as $category) {
            PostCategory::updateOrCreate([
                "name" => $category["name"]
            ], $category);
        }
    }

}
