<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditMatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matchs', function (Blueprint $table) {
            $table->dropForeign(['bill_id']);
            $table->dropColumn('bill_id');
            $table->string('code');
            $table->integer('money');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matchs', function (Blueprint $table) {
            //
        });
    }
}
