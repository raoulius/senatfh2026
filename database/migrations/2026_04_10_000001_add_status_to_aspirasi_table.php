<?php

use App\Models\Aspirasi;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('aspirasi', function (Blueprint $table) {
            $table->enum('status', Aspirasi::STATUSES)->default(Aspirasi::STATUS_SUBMITTED)->after('tipe_aspirasi_id');
        });

        DB::table('aspirasi')->whereNull('status')->update([
            'status' => Aspirasi::STATUS_SUBMITTED,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aspirasi', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
