<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i<10 ; $i++){

             DB::table('posts')->insert([
            'title'      => 'programmimg',
            'content'    => 'this is a blog project in laravel framework using PHP , bootstarp , Html , css , js Nine out of ten doctors recommend Laracasts over competing brands. Check them out, see for yourself, and massively level up your development skills in the process. Laravel Vapor is a serverless deployment platform for Laravel, powered by AWS. Launch your Laravel infrastructure on Vapor and fall in love with the scalable simplicity of serverless.',
            'thumb'      =>  'image.jpg',
            'user_id'      =>  1 ,
            'created_at' =>  Carbon::now() ,

            ]);


        }

        
    }
}
