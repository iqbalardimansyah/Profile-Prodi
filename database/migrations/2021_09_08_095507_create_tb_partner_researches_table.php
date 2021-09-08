<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPartnerResearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_partner_researches', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('level')->comment("Internasional, Wilayah, Lokal");
            $table->string('partner_type');
            $table->text('benefits');
            $table->string('duration_time');
            $table->text('partner_proven');
            $table->string('end_year');
            $table->string('link_drive');
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
        Schema::dropIfExists('tb_partner_researches');
    }
}
