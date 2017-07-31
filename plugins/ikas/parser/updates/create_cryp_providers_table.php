<?php namespace Ikas\Parser\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCrypProvidersTable extends Migration
{
    public function up()
    {
        Schema::create('ikas_parser_cryp_providers', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id')->unique();
            $table->string('name');
            $table->boolean('active');
            $table->string('route');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ikas_parser_cryp_providers');
    }
}