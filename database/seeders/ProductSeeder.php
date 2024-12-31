<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            // Clothing
            ['name' => 'T-Shirt', 'price' => 19.99, 'category_id' => 1, 'image' => 'https://www.code-zero.com/uploads/media/1e/21/cb/1691581140/saint-barth-washed-tshirt-men-blue.jpg?ts=1691581140'],
            ['name' => 'Jeans', 'price' => 39.99, 'category_id' => 1, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZjV6VCxaorzk8zzFbgBf3rxvyUg2DZyqtfw&s'],
            ['name' => 'Jacket', 'price' => 59.99, 'category_id' => 1, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToghVrUKykFgbvBYcCTqpmjfhYwKZZ7fBoiw&s'],

            // Electronics
            ['name' => 'Smartphone', 'price' => 699.99, 'category_id' => 2, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbbayUlh8n_Vck_K8id4oMqr8dF005Jl_JcA&s'],
            ['name' => 'Laptop', 'price' => 1299.99, 'category_id' => 2, 'image' => 'https://961souq.com/cdn/shop/files/HP-15-FD0021NX-3.jpg?v=1722084424'],
            ['name' => 'Headphones', 'price' => 99.99, 'category_id' => 2, 'image' => 'https://www.audeze.com/cdn/shop/files/ADZ_Maxwell_white_3-Quarters_XB_nooverlay_1200x.jpg?v=1687383866'],

            // Books
            ['name' => 'Novel', 'price' => 14.99, 'category_id' => 3, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr73YAuq4Etm0ZG_jvvKVMBN6A4ZYwu6KQkA&s'],
            ['name' => 'Biography', 'price' => 19.99, 'category_id' => 3, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQT3upc9gK5t3c0CHEONckgi4MFRfU21UBSBw&s'],
            ['name' => 'Comic Book', 'price' => 9.99, 'category_id' => 3, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZchQbQ745z23ngsk8Ir7VvZGpoUwVCJupHw&s'],

            // Sports
            ['name' => 'Football', 'price' => 24.99, 'category_id' => 4, 'image' => 'https://cdn.pixabay.com/photo/2013/07/13/10/51/football-157930_1280.png'],
            ['name' => 'Basketball', 'price' => 29.99, 'category_id' => 4, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNo1gOP6yjIdRxZRv8usJI2O_zfq7nAiRftA&s'],
            ['name' => 'Tennis Racket', 'price' => 49.99, 'category_id' => 4, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwPEe0Tr6ADADDxRiC9hhmtNKSigja_pdVBw&s'],

            // Home Appliances
            ['name' => 'Blender', 'price' => 89.99, 'category_id' => 5, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ82__zfrG2KjPP53nEB-4BO0niZr1AWa-DJA&s'],
            ['name' => 'Microwave', 'price' => 149.99, 'category_id' => 5, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_Qnrzm6TAc4rDUw0fBRuA0cI-eWivyNdSLA&s'],
            ['name' => 'Vacuum Cleaner', 'price' => 199.99, 'category_id' => 5, 'image' => 'https://images.philips.com/is/image/philipsconsumer/vrs_9224c91a403f836307f980a977640b9808f05421?&wid=309&hei=309&$jpglarge$'],
        ]);
    }
}
