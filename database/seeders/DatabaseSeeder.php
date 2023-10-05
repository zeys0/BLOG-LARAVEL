<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(20)->create();
        User::factory(3)->create();


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'author' => 'Kayden',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi assumenda quia rerum nemo illo est tempore ,quae cum nesciunt corporis libero',
        //     'body' => "pLorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi assumenda quia rerum nemo illo est tempore iusto quod vitae exercitationem ad ut voluptatem,
        //     quae cum nesciunt corporis quis atque laborum impedit hic libero. Voluptas explicabo eos eligendi itaque maxime. Doloribus, numquam, possimus, non fuga dignissimos quas sint
        //     placeat libero nihil modi quisquam quis consequatur aliquid maiores in. In, laudantium ab. Commodi, molestias incidunt! Sint enim aspernatur odit accusamus nesciunt porro 
        //     excepturi doloribus maxime molestiae sit pariatur inventore voluptatibus, esse consequatur ab, rerum sapiente beatae itaque delectus ea. Eum officia neque ipsam odit. 
        //     Minima vero fuga qui ea. Nesciunt, natus!",
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'author' => 'Kayser',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi assumenda quia rerum nemo illo est tempore ,quae cum nesciunt corporis libero',
        //     'body' => "pLorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi assumenda quia rerum nemo illo est tempore iusto quod vitae exercitationem ad ut voluptatem,
        //     quae cum nesciunt corporis quis atque laborum impedit hic libero. Voluptas explicabo eos eligendi itaque maxime. Doloribus, numquam, possimus, non fuga dignissimos quas sint
        //     placeat libero nihil modi quisquam quis consequatur aliquid maiores in. In, laudantium ab. Commodi, molestias incidunt! Sint enim aspernatur odit accusamus nesciunt porro 
        //     excepturi doloribus maxime molestiae sit pariatur inventore voluptatibus, esse consequatur ab, rerum sapiente beatae itaque delectus ea. Eum officia neque ipsam odit. 
        //     Minima vero fuga qui ea. Nesciunt, natus!",
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'author' => 'Kay',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi assumenda quia rerum nemo illo est tempore ,quae cum nesciunt corporis libero',
        //     'body' => "pLorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi assumenda quia rerum nemo illo est tempore iusto quod vitae exercitationem ad ut voluptatem,
        //     quae cum nesciunt corporis quis atque laborum impedit hic libero. Voluptas explicabo eos eligendi itaque maxime. Doloribus, numquam, possimus, non fuga dignissimos quas sint
        //     placeat libero nihil modi quisquam quis consequatur aliquid maiores in. In, laudantium ab. Commodi, molestias incidunt! Sint enim aspernatur odit accusamus nesciunt porro 
        //     excepturi doloribus maxime molestiae sit pariatur inventore voluptatibus, esse consequatur ab, rerum sapiente beatae itaque delectus ea. Eum officia neque ipsam odit. 
        //     Minima vero fuga qui ea. Nesciunt, natus!",
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
