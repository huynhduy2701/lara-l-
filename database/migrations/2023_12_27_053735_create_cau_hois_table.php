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
        Schema::create('cau_hois', function (Blueprint $table) {
            $table->id();
            $table->text('noi_dung');
            $table->bigInteger('luc_vuc_id')->unsigned();
            $table->foreign('luc_vuc_id')
                ->references('id')
                ->on('linh_vucs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('Phuong_an_A');
            $table->text('Phuong_an_B');
            $table->text('Phuong_an_C');
            $table->text('Phuong_an_D');
            $table->text('Dap_an');
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
        Schema::dropIfExists('cau_hois');
    }
};
