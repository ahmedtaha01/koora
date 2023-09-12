<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterStadiumServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stadium_services', function (Blueprint $table) {
            $table->dropForeign(['stadium_id']);
            $table->dropForeign(['service_id']);
        });
        
        Schema::rename('stadium_services', 'service_stadium');
        
        Schema::table('service_stadium', function (Blueprint $table) {
            $table->foreign('stadium_id')->references('id')->on('stadiums');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
