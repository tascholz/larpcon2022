<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRegistrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registrations', function(Blueprint $table) {
            $table->string('reg_first_name')->nullable()->change();
            $table->string('reg_last_name')->nullable()->change();
            $table->string('reg_adress_street')->nullable()->change();
            $table->string('reg_adress_pcode')->nullable()->change();
            $table->string('reg_adress_city')->nullable()->change();
            $table->date('reg_birthdate')->nullable()->change();
            $table->string('reg_mail')->nullable()->change();
            $table->string('reg_supervisor')->nullable()->change();
            $table->boolean('reg_food')->nullable()->change();
            
            $table->string('reg_char_name')->nullable()->change();
            $table->string('reg_char_profession')->nullable()->change();
            $table->string('reg_char_race')->nullable()->change();
            $table->string('reg_char_group')->nullable()->change();
            $table->text('reg_known_nsc')->nullable()->change();
            $table->text('reg_char_history')->nullable()->change();
            $table->string('reg_char_magic')->nullable()->change();

            $table->text('reg_allergies')->nullable()->change();
            $table->string('reg_tents')->nullable()->change();
            $table->string('reg_pkw')->nullable()->change();

            $table->boolean('reg_newsletter')->nullable()->change();
            $table->boolean('reg_first_time')->nullable()->change();
            $table->text('reg_plot_wishes')->nullable()->change();
            $table->text('reg_con_wishes')->nullable()->change();
            $table->string('reg_corona')->nullable()->change();
            $table->string('reg_agb')->nullable()->change();
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
