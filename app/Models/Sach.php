<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;

    protected $table = 'sach';

    protected $fillable = ['MaSach', 'TieuDe', 'NamXuatBan', 'MaTG'];

    public function tacGia()
    {
        return $this->belongsTo(TacGia::class, foreignKey:'MaTG');
    }

    protected function tieuDe(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),          // Accessor: Viết hoa chữ cái đầu
            set: fn ($value) => strtolower(trim($value))  // Mutator: Lưu dạng chữ thường
        );
    }

    protected function namXuatBan(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => 'Xuất bản năm: ' . $value,      // Accessor: Format khi hiển thị
            set: fn ($value) => preg_replace('/\D/', '', $value) // Mutator: Chỉ giữ số
        );
    }
}
