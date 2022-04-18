<?php

namespace App\Http\Controllers;


class PersonController extends Controller
{
    public function __invoke() {
        return [
            [
                'id' => 1,
                'name' => 'Kir',
                'age' => '24',
                'job' => 'Qq'
            ],
            [
                'id' => 2,
                'name' => 'Kate',
                'age' => '22',
                'job' => 'Qqq'
            ]
        ];
    }
}
