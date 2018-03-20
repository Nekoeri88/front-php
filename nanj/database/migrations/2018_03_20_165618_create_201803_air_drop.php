<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create201803AirDrop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('wallets'))
        {
            DB::statement('CREATE TABLE `201803_airdrop` LIKE wallets;');
            DB::statement(' INSERT INTO 201803_airdrop SELECT * FROM wallets;');

            Schema::table('wallets', function (Blueprint $table)
            {
                $table->bigInteger('user_id')->after('id')->default(0);
                $table->dateTime('is_deleted')->after('address')->nullable();
                $table->bigInteger('created_by')->after('is_deleted')->default(0);
                $table->bigInteger('updated_by')->after('created_at')->default(0);
                $table->bigInteger('deleted_by')->after('updated_at')->default(0);
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
        Schema::dropIfExists('201803_airdrop');
        if (Schema::hasTable('wallets'))
        {   
            Schema::table('wallets', function (Blueprint $table)
            {
                $table->dropColumn(['user_id', 'is_deleted', 'created_by', 'updated_by', 'deleted_by']);
            });
        }
    }
}
