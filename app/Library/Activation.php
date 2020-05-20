<?php

namespace FwkForms;

if ( !defined('ABSPATH') ) exit;

use Illuminate\Database\Capsule\Manager as Capsule;

class Activation {

    public static function run()
    {
        self::createTables();
    }

    public static function createTables()
    {
        if (!Capsule::schema()->hasTable('fkw_forms')) {
            Capsule::schema()->create('fkw_forms', function ($table) {
                $table->increments('id');
                $table->string('form_key')->nullable();
                $table->string('name')->nullable();
                $table->longText('description')->nullable();
                $table->longText('settings')->nullable();
                $table->timestamps();
                $table->engine = 'InnoDB';
            });
        }

        if (!Capsule::schema()->hasTable('fkw_form_fields')) {
            Capsule::schema()->create('fkw_form_fields', function ($table) {
                $table->increments('id');
                $table->integer('form_id')->unsigned();
                $table->string('field_key')->nullable();
                $table->string('name')->nullable();
                $table->string('placeholder')->nullable();
                $table->string('field_type');
                $table->longText('field_options');
                $table->longText('rules')->nullable();
                $table->timestamps();
                $table->engine = 'InnoDB';

                $table->foreign('form_id')->references('id')->on('fwk_forms')->onDelete('cascade');
            });
        }

        if (!Capsule::schema()->hasTable('fkw_form_items')) {
            Capsule::schema()->create('fkw_form_items', function ($table) {
                $table->increments('id');
                $table->integer('form_id')->unsigned();
                $table->longText('info')->nullable();
                $table->string('ip_address')->nullable();
                $table->timestamps();
                $table->engine = 'InnoDB';

                $table->foreign('form_id')->references('id')->on('fwk_forms')->onDelete('cascade');
            });
        }

        if (!Capsule::schema()->hasTable('fkw_form_entries')) {
            Capsule::schema()->create('fkw_form_entries', function ($table) {
                $table->increments('id');
                $table->integer('field_id')->unsigned();
                $table->integer('item_id')->unsigned();
                $table->string('entry_value');
                $table->timestamps();
                $table->engine = 'InnoDB';

                $table->foreign('field_id')->references('id')->on('fwk_form_fields')->onDelete('cascade');
                $table->foreign('item_id')->references('id')->on('fwk_form_items')->onDelete('cascade');
            });
        }
    }
}