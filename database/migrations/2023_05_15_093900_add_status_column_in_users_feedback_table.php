<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_feedback', function (Blueprint $table) {
            $table->enum('status', ['1', '0'])->nullable()->comment('0:disapproved, 1:approved')->after('rating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_feedback', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
