<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPages extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        $data = [
            [
                'id' => 1,
                'name' => 'Index',
            ],
            [
                'id' => 2,
                'name' => 'Šírava Park',
            ],
            [
                'id' => 3,
                'name' => 'Real estate',
            ],
            [
                'id' => 4,
                'name' => 'Pool area',
            ],
            [
                'id' => 5,
                'name' => 'Social area',
            ],

            [
                'id' => 6,
                'name' => 'Hotel',
            ],

            [
                'id' => 7,
                'name' => 'Location',
            ],

            [
                'id' => 8,
                'name' => 'Contact',
            ],
            [
                'id' => 9,
                'name' => 'Real estate / Apartments',
            ],
            [
                'id' => 10,
                'name' => 'Real estate / Terraced houses',
            ],
            [
                'id' => 11,
                'name' => 'Real estate / Semi-detached houses',
            ],
            [
                'id' => 12,
                'name' => 'Real estate / Standard houses',
            ],
            [
                'id' => 13,
                'name' => 'Real estate / Villas',
            ],
            [
                'id' => 14,
                'name' => 'Boulevard',
            ],
            [
                'id' => 15,
                'name' => 'Spa',
            ]
        ];

        DB::table('pages')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
//        $arrIDs = [9, 10, 11, 12, 13];
//
//        foreach ($arrIDs as $intID) {
//            DB::table('pages')->delete($intID);
//        }
    }
}
