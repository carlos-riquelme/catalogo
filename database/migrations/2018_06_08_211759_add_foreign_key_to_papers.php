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
            $table->integer('titles_idtitles')->unsigned()->index()->after('año');
            $table->foreign('titles_idtitles')->references('id')->on('titles');
            $table->integer('teachers_idteachers')->unsigned()->index()->after('titles_idtitles');
            $table->foreign('teachers_idteachers')->references('id')->on('teachers');
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
            $table->dropColumn('titles_idtitles');
            $table->dropColumn('teachers_idteachers');
        });
    }
}
