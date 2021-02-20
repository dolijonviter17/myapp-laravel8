<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Question;
class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('favorites')->delete();
        $users = User::pluck('id')->all();
        $numOfUser = count($users);
        foreach (Question::all() as $question) {
            for ($i=0; $i < rand(0, $numOfUser); $i++) { 
                $user = $users[$i];
                $question->favorites()->attach($user);
            }
        }
    }
}
