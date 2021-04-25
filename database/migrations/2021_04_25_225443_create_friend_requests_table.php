<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friend_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('friend_request_id')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');

            $table->foreign('friend_request_id')->references('id')->on('users')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friend_requests');
    }
}
