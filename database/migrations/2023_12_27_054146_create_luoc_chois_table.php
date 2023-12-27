<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luoc_chois', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nguoi_choi_id')->unsigned();
            $table->foreign('nguoi_choi_id')
                ->references('id')
                ->on('nguoi_chois')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('So_cau');
            $table->integer('diem');
            $table->text('ngay_gio');
            $table->timestamp('delete_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luoc_chois');
    }
};
