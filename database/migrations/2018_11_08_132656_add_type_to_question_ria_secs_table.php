<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeToQuestionRiaSecsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::table('question_ria_secs', function (Blueprint $table) {
            $table->integer('type_id');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::table('question_ria_secs', function (Blueprint $table) {
            $table->dropColumn('type_id');
        });
    }
}
