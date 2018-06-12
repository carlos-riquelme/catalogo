<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToPapers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('papers', function (Blueprint $table) {
            //
            $table->integer('title_id')->unsigned()->index()->nullable()->after('año');
            $table->integer('teacher_id')->unsigned()->index()->nullable()->after('title_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('papers', function (Blueprint $table) {
            //
            $table->dropColumn('title_id');
            $table->dropColumn('teacher_id');
        });
    }
}
