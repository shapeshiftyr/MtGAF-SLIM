<?php

use \App\Migration\Migration;

class CreateCardsTable extends Migration
{
    public function up()
    {
        $this->schema->create('cards', function(Illuminate\Database\Schema\Blueprint $table){
            $table->increments('card_id');
            $table->string('id');
            $table->string('layout')->nullable();
            $table->longText('name');
            $table->string('names')->nullable();
            $table->string('mana_cost')->nullable();
            $table->string('cmc')->nullable();
            $table->string('colors')->nullable();
            $table->string('color_identity')->nullable();
            $table->string('type')->nullable();
            $table->string('supertypes')->nullable();
            $table->string('types')->nullable();
            $table->string('subtypes')->nullable();
            $table->string('rarity')->nullable();
            $table->longText('text')->nullable();
            $table->longText('flavor')->nullable();
            $table->string('artist')->nullable();
            $table->string('number')->nullable();
            $table->string('power')->nullable();
            $table->string('toughness')->nullable();
            $table->string('loyalty')->nullable();
            $table->string('multiverseid')->nullable();
            $table->string('variations')->nullable();
            $table->string('image_name')->nullable();
            $table->string('watermark')->nullable();
            $table->string('border')->nullable();
            $table->string('timeshifted')->nullable();
            $table->string('hand')->nullable();
            $table->string('life')->nullable();
            $table->string('reserved')->nullable();
            $table->string('release_date')->nullable();
            $table->string('starter')->nullable();
            $table->string('mci_number')->nullable();
            $table->integer('set_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('cards');
    }
}
