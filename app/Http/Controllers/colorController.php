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
                [
                    'name' => 'ics-secondary-300',
                    'RGB' => '163-215-240',
                    'hex' => '#A3D7F0'
                ],
            ],
        ],
        [
            'items' => [
                [
                    'name' => 'ics-success-100',
                    'RGB' => '26-127-30',
                    'hex' => '#1A7F1E'
                ],
                [
                    'name' => 'ics-success-200',
                    'RGB' => '19-93-22',
                    'hex' => '#135D16'
                ],
                [
                    'name' => 'ics-warning-100',
                    'RGB' => '247-173-25',
                    'hex' => '#F7AD19'
                ],
                [
                    'name' => 'ics-warning-200',
                    'RGB' => '204-136-0',
                    'hex' => '#CC8800'
                ],
                [
                    'name' => 'ics-danger-100',
                    'RGB' => '191-22-19',
                    'hex' => '#BF1613'
                ],
                [
                    'name' => 'ics-danger-200',
                    'RGB' => '152-9-6',
                    'hex' => '#980906'
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
