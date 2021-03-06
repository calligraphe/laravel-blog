<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            // $table->timestamps();

            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_message');
            $table->timestamp('contact_date')->default(DB::raw('CURRENT_TIMESTAMP')); // aujourd'hui par defaut
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
