<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnTableWallet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('wallets') &&  Schema::hasColumn('wallets', 'email'))
        {
            Schema::table('wallets', function (Blueprint $table) {
               if (Schema::hasColumn('wallets', 'ip')) {
                   $table->dropColumn('ip');
               }
               if (Schema::hasColumn('wallets', 'deleted_by')) {
                   $table->dropColumn('deleted_by');
               }
               if (Schema::hasColumn('wallets', 'is_deleted')) {
                   $table->dropColumn('is_deleted');
               }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
