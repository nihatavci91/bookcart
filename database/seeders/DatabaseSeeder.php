<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Product::create([
            'title' => 'İnce Memed',
            'category_id' => 1,
            'author_id' => 1,
            'list_price' => 48.75,
            'stock_quantity' => 10
        ]);
        Product::create([
            "title" => "Tutunamayanlar",
            "category_id" => 1,
            "author_id" => 12,
            "list_price" => 90.3,
            "stock_quantity" => 20
        ]);
        Product::create([
            "title" => "Kürk Mantolu Madonna",
            "category_id" => 1,
            "author_id" => 1,
            "list_price" => 9.1,
            "stock_quantity" => 4
        ]);
        Product::create([
            "title" => "Fareler ve İnsanlar",
            "category_id" => 1,
            "author_id" => 14,
            "list_price" => 35.75,
            "stock_quantity" => 8
        ]);
        Product::create([
            "title" => "Şeker Portakalı",
            "category_id" => 1,
            "author_id" => 10,
            "list_price" => 33,
            "stock_quantity" => 1
        ]);
        Product::create([
            "title" => "Sen Yola Çık Yol Sana Görünür",
            "category_id" => 2,
            "author_id" => 13,
            "list_price" => 28.5,
            "stock_quantity" => 7
        ]);
        Product::create([
            "title" => "Kara Delikler",
            "category_id" => 3,
            "author_id" => 9,
            "list_price" => 39,
            "stock_quantity" => 2
        ]);
        Product::create([
            "title" => "Allah De Ötesini Bırak",
            "category_id" => 4,
            "author_id" => 8,
            "list_price" => 39.6,
            "stock_quantity" => 18
        ]);
        Product::create([
            "title" => "Aşk 5 Vakittir",
            "category_id" => 4,
            "author_id" => 7,
            "list_price" => 42,
            "stock_quantity" => 9
        ]);
        Product::create([
            "title" => "Benim Zürafam Uçabilir",
            "category_id" => 7,
            "author_id" => 6,
            "list_price" => 27.3,
            "stock_quantity" => 12
        ]);
        Product::create([
            "title" => "Kuyucaklı Yusuf",
            "category_id" => 1,
            "author_id" => 1,
            "list_price" => 10.4,
            "stock_quantity" => 2
        ]);
        Product::create([
            "title" => "Kamyon - Seçme Öyküler",
            "category_id" => 5,
            "author_id" => 1,
            "list_price" => 9.75,
            "stock_quantity" => 9
        ]);
        Product::create([
            "title" => "Kendime Düşünceler",
            "category_id" => 6,
            "author_id" => 5,
            "list_price" => 14.40,
            "stock_quantity" => 1
        ]);
        Product::create([
            "title" => "Denemeler - Hasan Ali Yücel Klasikleri",
            "category_id" => 6,
            "author_id" => 4,
            "list_price" => 24,
            "stock_quantity" => 4
        ]);
        Product::create([
            "title" => "Animal Farm",
            "category_id" => 1,
            "author_id" => 3,
            "list_price" => 17.50,
            "stock_quantity" => 1
        ]);
        Product::create([
            "title" => "Dokuzuncu Hariciye Koğuşu",
            "category_id" => 1,
            "author_id" => 2,
            "list_price" => 18.5,
            "stock_quantity" => 0
        ]);

        Category::create([
            'title' => 'Roman',
        ]);
        Category::create([
            'title' => "Kişisel Gelişim"
        ]);
        Category::create([
            'title' => "Bilim"
        ]);
        Category::create([
            'title' => "Din Tasavvuf"
        ]);
        Category::create([
            'title' => "Öykü"
        ]);
        Category::create([
            'title' => 'Felsefe',
        ]);
        Category::create([
            'title' => "Çocuk ve Gençlik"
        ]);


        Author::create([
            'name' => 'Sabahattin Ali',
            'local' => 1
        ]);
        Author::create([
            'name' => "Peyami Safa",
            'local' => 1
        ]);
        Author::create([
            'name' => "George Orwell",
            'local' => 0
        ]);
        Author::create([
            'name' => "Michel de Montaigne",
            'local' => 0
        ]);
        Author::create([
            'name' => "Marcus Aurelius",
            'local' => 0
        ]);
        Author::create([
            'name' => "Mert Arık",
            'local' => 1
        ]);
        Author::create([
            'name' => "Mehmet Yıldız",
            'local' => 1
        ]);
        Author::create([
            'name' => "Uğur Koşar",
            'local' => 1
        ]);
        Author::create([
            'name' => "Stephen Hawking",
            'local' => 0
        ]);
        Author::create([
            'name' => "Jose Mauro De Vasconcelos",
            'local' => 0
        ]);
        Author::create([
            'name' => "Yaşar Kemal",
            'local' => 1
        ]);
        Author::create([
            'name' => "Oğuz Atay",
            'local' => 1
        ]);
        Author::create([
            'name' => "Hakan Mengüç",
            'local' => 1
        ]);
        Author::create([
            'name' => "John Steinback",
            'local' => 0
        ]);

    }
}
