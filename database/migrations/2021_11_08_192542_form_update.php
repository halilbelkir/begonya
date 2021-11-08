<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email');
            $table->string('education_id')->nullable()->index()->after('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        chema::table('form', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('education_id');
        });
    }
}
