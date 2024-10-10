<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLastActivityColumnToSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->integer('last_activity')->unsigned()->nullable()->after('payload');  // Adds the 'last_activity' column
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
            $table->dropColumn('last_activity');
        });
    }
}
