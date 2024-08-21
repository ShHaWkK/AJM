<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialLoginsTable extends Migration
{
    public function up()
    {
        Schema::create('social_logins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('provider');
            $table->string('provider_user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('social_logins');
    }
}
