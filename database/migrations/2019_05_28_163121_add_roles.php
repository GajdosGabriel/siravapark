<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $data = [
            [
                'id' => 1,
                'name' => 'admin',
                'guard_name' => 'web'
            ],
            [
                'id' => 2,
                'name' => 'partner',
                'guard_name' => 'web'
            ],
            [
                'id' => 4,
                'name' => 'agent',
                'guard_name' => 'web'
            ],
            [
                'id' => 11,
                'name' => 'signup',
                'guard_name' => 'web'
            ],
            [
                'id' => 19,
                'name' => 'admin-made',
                'guard_name' => 'web'
            ],
            [
                'id' => 20,
                'name' => 'agent-made',
                'guard_name' => 'web'
            ],
            [
                'id' => 21,
                'name' => 'nobody',
                'guard_name' => 'web'
            ],
            [
                'id' => 22,
                'name' => 'staff',
                'guard_name' => 'web'
            ],
        ];

        DB::table('roles')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $arrIDs = [1,  2, 4, 11, 19, 20, 21];

        foreach ($arrIDs as $intID) {
            DB::table('roles')->delete($intID);
        }
    }
}
