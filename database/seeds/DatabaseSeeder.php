<?php

use Illuminate\Database\Seeder; 
use App\Comment;
use App\User;
use App\Tag;
use App\Bear;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call('UserTableSeeder');
        $this->command->info('The User table has been seeded!');
        $this->call('CommentTableSeeder');
        $this->command->info('The Comment table has been seeded!');
        $this->call('TagTableSeeder');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $this->call('BearsTableSeeder');
        
    }
}

class CommentTableSeeder  extends Seeder {
    public function run() {
        Comment::truncate();
        factory(Comment::class,9)->create();
    }
}

class UserTableSeeder extends Seeder {
    public function run() {    
        User::truncate();
        factory(User::class,5)->create();
    }    
}

class TagTableSeeder extends Seeder {
    public function run() {    
        Tag::truncate();
        factory(Tag::class,4)->create();
    }    
}

class BearsTableSeeder extends Seeder {
    public function run() {    
        Bear::truncate();
        factory(Bear::class,4)->create();
    }    
}