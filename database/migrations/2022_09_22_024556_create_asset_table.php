<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asset_no')->nullable(); 
            $table->string('serial_no')->nullable();
            $table->string('assigned_to')->nullable();
            $table->string('purchase_year')->nullable();
            $table->unsignedInteger('device_id')->nullable();
            $table->unsignedInteger('brand_id')->nullable();
            $table->unsignedInteger('department_id')->nullable();
            $table->string('location')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset');
    }
}
