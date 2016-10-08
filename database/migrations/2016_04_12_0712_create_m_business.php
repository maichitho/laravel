<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMBusiness extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // CREATE m_business table
        Schema::create('m_business', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_bin';

            $table->increments('UID');
            $table->integer('SCHEMA_GROUP');
            $table->string('SCHEMA_NAME', 100);
            $table->string('NAME', 100);
            $table->integer('DELETED')->nullable()->default(null);
            $table->bigInteger('CREATED_BY')->unsigned();
            $table->string('CREATED_WITH', 200)->default('');
            $table->dateTime('CREATED_AT');
            $table->bigInteger('UPDATED_BY')->nullable()->unsigned();
            $table->string('UPDATED_WITH', 200)->nullable()->default(NULL);
            $table->dateTime('UPDATED_AT')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_business');
    }
}
