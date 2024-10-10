<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPayloadColumnToSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->text('payload')->nullable()->after('user_id');  // Adds the 'payload' column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->dropColumn('payload');
        });
    }
}
