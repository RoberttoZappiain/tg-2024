<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUrlImg1ToTierrasFisicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tierras_fisicas', function (Blueprint $table) {
            // $table->string('url_img_1')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tierras_fisicas', function (Blueprint $table) {
            $table->dropColumn('url_img_1');
        });
    }
}
