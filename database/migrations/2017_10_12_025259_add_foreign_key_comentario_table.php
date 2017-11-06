<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyComentarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comentario', function (Blueprint $table) {
            $table->integer('issue_id')->unsigned();
            $table->foreign('issue_id')->references('id')->on('issue')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comentario', function (Blueprint $table) {
            $table->dropForeign('issue_id');
        });
    }
}
