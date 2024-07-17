<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('value');
            $table->timestamps();
        });

        DB::table('settings')->insert([
            ['key' => 'name', 'value' => 'Streamboard',
                'created_at' => now(), 'updated_at' => now()],

            ['key' => 'avatar_url', 'value' => 'https://picsum.photos/500',
                'created_at' => now(), 'updated_at' => now()],

            ['key' => 'background_color', 'value' => '#FFF',
                'created_at' => now(), 'updated_at' => now()],

            ['key' => 'nickname_color', 'value' => '#000',
                'created_at' => now(), 'updated_at' => now()],

            ['key' => 'card_bg_color', 'value' => '#000',
                'created_at' => now(), 'updated_at' => now()],

            ['key' => 'card_radius', 'value' => '8px',
                'created_at' => now(), 'updated_at' => now()],

            ['key' => 'button_bg_color', 'value' => '#FFF',
                'created_at' => now(), 'updated_at' => now()],

            ['key' => 'button_bg_color_on_hover', 'value' => '#F5F5F5',
                'created_at' => now(), 'updated_at' => now()],

            ['key' => 'button_radius', 'value' => '8px',
                'created_at' => now(), 'updated_at' => now()],

            ['key' => 'button_text', 'value' => '#000',
                'created_at' => now(), 'updated_at' => now()],

            ['key' => 'button_text_on_hover', 'value' => '#000',
                'created_at' => now(), 'updated_at' => now()],
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
