<?php

use \App\Migration\Migration;

class CreateSetsTable extends Migration
{
    public function up()
    {
        $this->schema->create('sets', function(Illuminate\Database\Schema\Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->longText('alternative_names')->nullable();
            $table->string('code')->unique();
            $table->string('old_code')->nullable();
            $table->date('release_date')->nullable();
            $table->string('border')->nullable();
            $table->string('type')->nullable();
            $table->longText('booster')->nullable();
            $table->longText('translations')->nullable();
            $table->string('block')->nullable();
            $table->string('gatherer_code')->nullable();
            $table->string('magic_cards_info_code')->nullable();
            $table->string('mkm_name')->nullable();
            $table->string('mkm_id')->nullable();
            $table->longText('magic_rarities_codes')->nullable();
            $table->string('online_only')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('sets');
    }
}
