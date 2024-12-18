<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            if(false === Schema::hasColumn($table->getTable(),'postal_code')) {
                $table->string('postal_code')->nullable()->after('password');
            }

            if(false === Schema::hasColumn($table->getTable(),'address')) {
                $table->string('address')->nullable()->after('postal_code');
            }

            
            if(false === Schema::hasColumn($table->getTable(),'phone_number')) {
                $table->string('phone_number')->nullable()->after('address');
            }
        });
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
