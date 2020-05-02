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
        $name = $this->employees[$id]['name'];
        $surname = $this->employees[$id]['surname'];
        $salary = $this->employees[$id]['salary'];
        $style = 'color:red';
        $text = 'Посмотреть можно здесь';
        $href = 'dudstud.ru';
        $sity = null;
        return view('test.show', [
            'employee' => $this->employees,
            'location' => [
                'country' => 'USA',
                'sity' => 'Las-Vegas'
            ],
            'year' => 2019,
            'month' => 'June',
            'season' => 13,
            'string' => '<b>Жирный текст</b>',
            'age' => 17,
            'forelsetest'=>[],
            'new' => [
                2, 3, 4, 5, 6, 7, 8, 9
            ],
            'data' => [
                [1, 2, 3, 4, 5],
                [6, 7, 8, 9, 10],
                [11, 12, 13, 14, 15],
                [16, 17, 18, 19, 20],
                [21,22,23,24,25]
            ]

        ]);
    }
    public function bladetest()
    {
        $title='Test Blade Title';
        $aside='Дополнительная часть сайдбара';
        $links=[
            [
                'text'=>'text1',
                'href'=>'href1'
            ],
            [
                'text'=>'text2',
                'href'=>'href2'
            ],
            [
                'text'=>'text3',
                'href'=>'href3'
            ]
        ];
        return view('child',['title'=>$title,
            'aside'=>$aside,
            'links'=>$links
            ]);
    }
}