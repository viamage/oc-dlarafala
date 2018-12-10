<?php namespace Viamage\DlaRafala\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateServerRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('viamage_dlarafala_server_requests', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email');
            $table->float('ram_amount');
            $table->integer('cpu_amount');
            $table->string('vlan');
            $table->string('ip_config');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('viamage_dlarafala_server_requests');
    }
}
