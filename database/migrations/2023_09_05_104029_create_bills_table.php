<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bill_group_id');
            $table->string('name')->nullable();
            $table->decimal('amount', 10, 2)->default(0)->nullable();
            $table->decimal('amount_paid', 10, 2)->default(0)->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();

            $table->foreign('bill_group_id')->references('id')->on('bill_groups')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
