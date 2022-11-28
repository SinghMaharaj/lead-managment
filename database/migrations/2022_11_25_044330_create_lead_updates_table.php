<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_updates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name')->nullable();
            $table->text('lead_message')->nullable();
            $table->string('lead_status')->nullable();
            $table->integer('leads_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lead_updates');
    }
}
