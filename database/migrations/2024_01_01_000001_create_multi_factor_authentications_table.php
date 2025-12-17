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
        Schema::create('multi_factor_authentications', function (Blueprint $table) {
            $table->id();
            $table->morphs('authenticatable'); // user_id and user_type
            $table->string('method')->default('totp'); // totp, backup_code, etc.
            $table->text('secret')->nullable(); // Encrypted secret for TOTP
            $table->boolean('enabled')->default(false);
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();

            $table->index(['authenticatable_id', 'authenticatable_type', 'method']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('multi_factor_authentications');
    }
};

