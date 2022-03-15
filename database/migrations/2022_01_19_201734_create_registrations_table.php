<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('event_id');

            $table->string('reg_first_name')->nullable();
            $table->string('reg_last_name')->nullable();
            $table->string('reg_adress_street')->nullable();
            $table->string('reg_adress_pcode')->nullable();
            $table->string('reg_adress_city')->nullable();
            $table->date('reg_birthdate')->nullable();
            $table->string('reg_mail')->nullable();
            $table->string('reg_supervisor')->nullable();
            $table->boolean('reg_food')->nullable();
            
            $table->string('reg_char_name')->nullable();
            $table->string('reg_char_profession')->nullable();
            $table->string('reg_char_race')->nullable();
            $table->string('reg_char_group')->nullable();
            $table->text('reg_known_nsc')->nullable();
            $table->text('reg_char_history')->nullable();
            $table->string('reg_char_magic')->nullable();

            $table->text('reg_allergies')->nullable();
            $table->string('reg_tents')->nullable();
            $table->string('reg_pkw')->nullable();

            $table->boolean('reg_newsletter')->nullable();
            $table->boolean('reg_first_time')->nullable();
            $table->text('reg_plot_wishes')->nullable();
            $table->text('reg_con_wishes')->nullable();
            $table->string('reg_corona')->nullable();
            $table->string('reg_agb')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
