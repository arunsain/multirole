<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('nickname',30);
            $table->string('name',30);
            $table->timestamps();
        });
        DB::table('roles')->insert(['nickname' => 'admin',"name" => 'Admin','created_at' => now() ,'updated_at' => now()  ]);
        DB::table('roles')->insert(['nickname' => 'user',"name" => 'User','created_at' => now() ,'updated_at' => now()]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
