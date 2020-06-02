<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApartmentPages extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        $data = [
            [
                'id' => 16,
                'name' => 'Apartments - Ground floor',
            ],
            [
                'id' => 17,
                'name' => 'Apartments - First floor',
            ],
            [
                'id' => 18,
                'name' => 'Apartments - Penthouse',
            ],
        ];

        DB::table('pages')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        $arrIDs = [16, 17, 18];

        foreach ($arrIDs as $intID) {
            DB::table('pages')->delete($intID);
        }
    }
}