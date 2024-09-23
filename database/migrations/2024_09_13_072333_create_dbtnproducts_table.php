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
        Schema::create('dbtnproducts', function (Blueprint $table) {
            $table->id();
            $table->string('dbtcname');
            $table->integer('dbtcqty');
            $table->decimal('dbtcprice');
            $table->text('dbtcdescription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dbtnproducts');
    }
};
