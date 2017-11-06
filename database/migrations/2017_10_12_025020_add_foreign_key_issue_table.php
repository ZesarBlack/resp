<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyIssueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('issue', function (Blueprint $table) {
          $table->integer('proy_id')->unsigned();
          $table->foreign('proy_id')->references('id')->on('proyecto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('issue', function (Blueprint $table) {
            $table->dropForeign('proy_id');
        });
    }
}
