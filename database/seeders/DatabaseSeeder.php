<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        User::create([
            'name'=> 'ahmad risyfa',
            'username'=> 'ahmadrisyfa',
            'email'=> 'anggkerputra@gmail.com',
            'password'=> bcrypt('syafiyaa')
        ]);

        // User::create([
        //     'name'=> 'Kirun S.I',
        //     'email'=> 'KirunS.I@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);


        User::factory(3)->create();
            
 
        Category::create([
            'name'=> 'Web Programming',
            'slug'=> 'Web-programing'

        ]);

        Category::create([
            'name'=> 'Web Design',
            'slug'=> 'web-design'

        ]);

        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'

        ]);
        Category::create([
            'name'=> 'Cerita Random',
            'slug'=> 'cerita-random'

        ]);
        
        Post::factory(20)->create();

        // Post::create([
        //     'title'=> 'Judul Pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, quibusdam!',
        //     'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, quibusdam! Veniam deleniti sed, ea incidunt magnam, numquam placeat blanditiis provident aut vero eaque? Alias officiis iusto ullam accusamus eligendi consectetur animi, illo vitae, assumenda quos debitis nostrum quia maiores repellendus explicabo sint quas molestiae ab adipisci natus expedita eum nihil culpa amet. Doloremque reiciendis iusto, neque officiis aspernatur fugiat dignissimos, ipsam deserunt beatae, saepe alias! Asperiores totam a explicabo quaerat hic? Repudiandae sunt facere odit ipsam? Ipsum voluptate repellat rerum optio laudantium ipsa, quos distinctio blanditiis suscipit error assumenda aspernatur modi fugiat repellendus magni, voluptates quaerat mollitia recusandae sunt earum!',
        //     'category_id'=>1,
        //     'user_id'=>1

        // ]);

        // Post::create([
        //     'title'=> 'Judul Ke Dua',
        //     'slug'=> 'judul-kedua',
        //     'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, quibusdam!',
        //     'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, quibusdam! Veniam deleniti sed, ea incidunt magnam, numquam placeat blanditiis provident aut vero eaque? Alias officiis iusto ullam accusamus eligendi consectetur animi, illo vitae, assumenda quos debitis nostrum quia maiores repellendus explicabo sint quas molestiae ab adipisci natus expedita eum nihil culpa amet. Doloremque reiciendis iusto, neque officiis aspernatur fugiat dignissimos, ipsam deserunt beatae, saepe alias! Asperiores totam a explicabo quaerat hic? Repudiandae sunt facere odit ipsam? Ipsum voluptate repellat rerum optio laudantium ipsa, quos distinctio blanditiis suscipit error assumenda aspernatur modi fugiat repellendus magni, voluptates quaerat mollitia recusandae sunt earum!',
        //     'category_id'=>1,
        //     'user_id'=>1
       
        // ]);


        // Post::create([
        //     'title'=> 'Judul Ke Tiga',
        //     'slug'=> 'judul-ke-tiga',
        //     'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, quibusdam!',
        //     'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, quibusdam! Veniam deleniti sed, ea incidunt magnam, numquam placeat blanditiis provident aut vero eaque? Alias officiis iusto ullam accusamus eligendi consectetur animi, illo vitae, assumenda quos debitis nostrum quia maiores repellendus explicabo sint quas molestiae ab adipisci natus expedita eum nihil culpa amet. Doloremque reiciendis iusto, neque officiis aspernatur fugiat dignissimos, ipsam deserunt beatae, saepe alias! Asperiores totam a explicabo quaerat hic? Repudiandae sunt facere odit ipsam? Ipsum voluptate repellat rerum optio laudantium ipsa, quos distinctio blanditiis suscipit error assumenda aspernatur modi fugiat repellendus magni, voluptates quaerat mollitia recusandae sunt earum!',
        //     'category_id'=>2,
        //     'user_id'=>1
       
        // ]);

        // Post::create([
        //     'title'=> 'Judul Ke Empat',
        //     'slug'=> 'judul-ke-empat',
        //     'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, quibusdam!',
        //     'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, quibusdam! Veniam deleniti sed, ea incidunt magnam, numquam placeat blanditiis provident aut vero eaque? Alias officiis iusto ullam accusamus eligendi consectetur animi, illo vitae, assumenda quos debitis nostrum quia maiores repellendus explicabo sint quas molestiae ab adipisci natus expedita eum nihil culpa amet. Doloremque reiciendis iusto, neque officiis aspernatur fugiat dignissimos, ipsam deserunt beatae, saepe alias! Asperiores totam a explicabo quaerat hic? Repudiandae sunt facere odit ipsam? Ipsum voluptate repellat rerum optio laudantium ipsa, quos distinctio blanditiis suscipit error assumenda aspernatur modi fugiat repellendus magni, voluptates quaerat mollitia recusandae sunt earum!',
        //     'category_id'=>2,
        //     'user_id'=>2
       
        // ]);

        
        
    }
}
