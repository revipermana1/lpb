<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Revi Permana',
        //     'email' => 'revi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Game',
            'slug' => 'game'
        ]);

        Category::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle'
        ]);

        Post::factory(20)->create();

        // Post::create([

    //         'title' => 'Judul Pertama',
    //         'slug' => 'judul-pertama',
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, temporibus aspernatur? Accusantium dolore nulla labore aut, quis, laboriosam repellat, eius veniam provident omnis quo vero? Repudiandae corporis incidunt sequi doloremque asperiores natus voluptates, aperiam exercitationem labore officiis temporibus dolor excepturi tempora. Eius dolore neque nostrum, delectus tempora eum commodi magni sint cumque voluptatum accusamus et maiores fugit nesciunt praesentium eos illum odio libero animi perferendis. Dignissimos id quisquam dicta eum laudantium commodi quod ut esse architecto consequuntur velit unde incidunt distinctio placeat magnam, hic ipsum necessitatibus nisi culpa nemo inventore fugiat. Iste mollitia quam quibusdam nisi illum a, at voluptates.',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //     Post::create([

    //         'title' => 'Judul ke Dua',
    //         'slug' => 'judul-ke-dua',
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, temporibus aspernatur? Accusantium dolore nulla labore aut, quis, laboriosam repellat, eius veniam provident omnis quo vero? Repudiandae corporis incidunt sequi doloremque asperiores natus voluptates, aperiam exercitationem labore officiis temporibus dolor excepturi tempora. Eius dolore neque nostrum, delectus tempora eum commodi magni sint cumque voluptatum accusamus et maiores fugit nesciunt praesentium eos illum odio libero animi perferendis. Dignissimos id quisquam dicta eum laudantium commodi quod ut esse architecto consequuntur velit unde incidunt distinctio placeat magnam, hic ipsum necessitatibus nisi culpa nemo inventore fugiat. Iste mollitia quam quibusdam nisi illum a, at voluptates.',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);
    //     Post::create([

    //         'title' => 'Judul ke Tiga',
    //         'slug' => 'judul-ke-tiga',
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, temporibus aspernatur? Accusantium dolore nulla labore aut, quis, laboriosam repellat, eius veniam provident omnis quo vero? Repudiandae corporis incidunt sequi doloremque asperiores natus voluptates, aperiam exercitationem labore officiis temporibus dolor excepturi tempora. Eius dolore neque nostrum, delectus tempora eum commodi magni sint cumque voluptatum accusamus et maiores fugit nesciunt praesentium eos illum odio libero animi perferendis. Dignissimos id quisquam dicta eum laudantium commodi quod ut esse architecto consequuntur velit unde incidunt distinctio placeat magnam, hic ipsum necessitatibus nisi culpa nemo inventore fugiat. Iste mollitia quam quibusdam nisi illum a, at voluptates.',
    //         'category_id' => 2,
    //         'user_id' => 1
        // ]);
    }
}
