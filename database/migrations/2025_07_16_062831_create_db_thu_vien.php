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
        Schema::create('tac_gia', function (Blueprint $table) {
            $table->id('MaTG');
            $table->string('TenTG');
            $table->string('QuocTich');
            $table->timestamps();
        });

        Schema::create('sach', function (Blueprint $table) {
            $table->id('MaSach');
            $table->string('TieuDe');
            $table->integer('NamXuatBan');
            $table->foreignId('MaTG')->constrained('tac_gia', 'MaTG')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('thanh_vien', function (Blueprint $table) {
            $table->id('MaTV');
            $table->string('HoTen');
            $table->string(column: 'DiaChi');
            $table->string('SoDienThoai');
            $table->timestamps();
        });

        Schema::create('phieu_muon', function (Blueprint $table) {
            $table->id('MaPM');
            $table->date('NgayMuon');
            $table->date('NgayTra')->nullable();
            $table->foreignId('MaTV')->constrained('thanh_vien', 'MaTV')->onDelete('cascade');
            $table->foreignId('MaSach')->constrained('sach', 'MaSach')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phieu_muon');
        Schema::dropIfExists('sach');
        Schema::dropIfExists('tac_gia');
        Schema::dropIfExists('thanh_vien');
    }
};
