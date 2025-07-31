<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class colorController extends Controller
{
    public function colorFunction () {
    $colori = [
        [
            'items' => [

                [
                    'name' => 'ics-primary-100',
                    'RGB' => '30-43-80',
                    'hex' => '#1E2B50'
                ],
                [
                    'name' => 'ics-primary-200',
                    'RGB' => '18-26-48',
                    'hex' => '#121A30'
                ],
            ],
        ],
        [
            'items' => [
                [
                    'name' => 'ics-secondary-100',
                    'RGB' => '230-240-246',
                    'hex' => '#E6F0F6'
                ],
                [
                    'name' => 'ics-secondary-200',
                    'RGB' => '207-234-247',
                    'hex' => '#CFEAF7'
                ],
            ],
        ],
        [
            'items' => [
                [
                    'name' => 'ics-success',
                    'RGB' => '26-127-30',
                    'hex' => '#1A7F1E'
                ],
                [
                    'name' => 'ics-warning',
                    'RGB' => '247-173-25',
                    'hex' => '#F7AD19'
                ],
                [
                    'name' => 'ics-danger',
                    'RGB' => '191-22-19',
                    'hex' => '#BF1613'
                ],
            ],
        ],
        [
            'items' => [
                [
                    'name' => 'ics-gray-100',
                    'RGB' => '241-242-248',
                    'hex' => '#F1F2F8'
                ],
                [
                    'name' => 'ics-gray-200',
                    'RGB' => '220-222-231',
                    'hex' => '#DCDEE7'
                ],
            ],
        ],

    ];
        return view('documentazione', compact('colori'));
    }
}
