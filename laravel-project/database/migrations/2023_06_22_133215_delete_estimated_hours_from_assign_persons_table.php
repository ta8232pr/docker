<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteEstimatedHoursFromAssignPersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assign_persons', function (Blueprint $table) {
            //
            $table->dropColumn('estimated_hours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assign_persons', function (Blueprint $table) {
            //
            $table->string('estimated_hours');
        });
    }
}
