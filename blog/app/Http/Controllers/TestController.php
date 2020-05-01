<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    private $employees;

    public function __construct()
    {
        $this->employees = [
            1 => [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            2 => [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            3 => [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            4 => [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            5 => [
                'name' => 'name5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];
    }

    public function showOne($id)
    {
        foreach ($this->employees as $employee => $value) {
            if ($employee == $id) {
                return 'Имя: ' . $value['name'] . '<br>' .
                    'Фамилия: ' . $value['surname'] . '<br>' .
                    'Зарплата: ' . $value['salary'] . '<br>';
                exit();
            }
        }
    }

    public function showFild($value, $number)
    {
        echo $this->employees[$number][$value];
    }
    public function show($id)
    {
        $name=$this->employees[$id]['name'];
        $surname=$this->employees[$id]['surname'];
        return view('test.show',['name'=>$name,'surname'=>$surname]);
    }
}