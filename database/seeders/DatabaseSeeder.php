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
        User::factory(3)->create();

        User::create([
            'name' => 'Rafi',
            'username' => 'rafi',
            'email' => 'rafi@mail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Doddy',
        //     'email' => 'doddy@mail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ex libero, possimus, perferendis fugit impedit dolore itaque illum eos molestiae vitae sequi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ex libero, possimus, perferendis fugit impedit dolore itaque illum eos molestiae vitae sequi. Eum, maxime consectetur eaque quis reprehenderit sed dolorum placeat cumque consequatur corporis error adipisci necessitatibus in incidunt, laboriosam, animi ab? Natus quibusdam debitis quo praesentium iusto, sapiente quisquam at voluptates itaque, earum rem quis aperiam, nemo excepturi ex! Corporis esse architecto ex doloribus! Fugit dolor doloribus odit facilis eligendi sequi culpa omnis qui similique cum minima, magnam ad iure veniam iusto. Corporis laudantium ex, quo eveniet nulla, eius tempora maiores unde, nostrum repellendus debitis mollitia impedit tenetur dignissimos.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ex libero, possimus, perferendis fugit impedit dolore itaque illum eos molestiae vitae sequi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ex libero, possimus, perferendis fugit impedit dolore itaque illum eos molestiae vitae sequi. Eum, maxime consectetur eaque quis reprehenderit sed dolorum placeat cumque consequatur corporis error adipisci necessitatibus in incidunt, laboriosam, animi ab? Natus quibusdam debitis quo praesentium iusto, sapiente quisquam at voluptates itaque, earum rem quis aperiam, nemo excepturi ex! Corporis esse architecto ex doloribus! Fugit dolor doloribus odit facilis eligendi sequi culpa omnis qui similique cum minima, magnam ad iure veniam iusto. Corporis laudantium ex, quo eveniet nulla, eius tempora maiores unde, nostrum repellendus debitis mollitia impedit tenetur dignissimos.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ex libero, possimus, perferendis fugit impedit dolore itaque illum eos molestiae vitae sequi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ex libero, possimus, perferendis fugit impedit dolore itaque illum eos molestiae vitae sequi. Eum, maxime consectetur eaque quis reprehenderit sed dolorum placeat cumque consequatur corporis error adipisci necessitatibus in incidunt, laboriosam, animi ab? Natus quibusdam debitis quo praesentium iusto, sapiente quisquam at voluptates itaque, earum rem quis aperiam, nemo excepturi ex! Corporis esse architecto ex doloribus! Fugit dolor doloribus odit facilis eligendi sequi culpa omnis qui similique cum minima, magnam ad iure veniam iusto. Corporis laudantium ex, quo eveniet nulla, eius tempora maiores unde, nostrum repellendus debitis mollitia impedit tenetur dignissimos.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ex libero, possimus, perferendis fugit impedit dolore itaque illum eos molestiae vitae sequi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ex libero, possimus, perferendis fugit impedit dolore itaque illum eos molestiae vitae sequi. Eum, maxime consectetur eaque quis reprehenderit sed dolorum placeat cumque consequatur corporis error adipisci necessitatibus in incidunt, laboriosam, animi ab? Natus quibusdam debitis quo praesentium iusto, sapiente quisquam at voluptates itaque, earum rem quis aperiam, nemo excepturi ex! Corporis esse architecto ex doloribus! Fugit dolor doloribus odit facilis eligendi sequi culpa omnis qui similique cum minima, magnam ad iure veniam iusto. Corporis laudantium ex, quo eveniet nulla, eius tempora maiores unde, nostrum repellendus debitis mollitia impedit tenetur dignissimos.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
