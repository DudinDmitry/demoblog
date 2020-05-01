<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Pages extends Controller
{
    public function showOne($id,$id2)
    {
        $pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
            4 => 'страница 4',
            5 => 'страница 5',
        ];
        foreach ($pages as $elem => $elem2) {
            if ($elem == $id) {
                echo $elem2.' '.$id2;
                exit();
            }
        }
        echo 'Элемент не найден';
    }

    public function showAll()
    {
        return 'ShowAll';
    }
}