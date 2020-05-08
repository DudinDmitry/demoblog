<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function dbTest()
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('posts')->insert([
                'title'=>'Заголовок статьи '.$i,
                'description'=>'Описание статьи '.$i,
                'text'=>'Текст статьи '.$i,
                'date'=>'2020-05-05'
            ]);
        }
        $users=BD::table('posts')->get();
        /*
                        echo '<pre>';
                        var_dump($users);
        */

        return view('test.test', [
            'users' => $users
        ]);
    }
}