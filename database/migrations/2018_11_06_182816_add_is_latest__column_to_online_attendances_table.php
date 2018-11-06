<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsLatestColumnToOnlineAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('online_attendances', function (Blueprint $table) {
            //

            $table->boolean('is_latest')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('online_attendances', function (Blueprint $table) {
            //

            $table->dropColumn('is_latest');

            
        });
    }
}
