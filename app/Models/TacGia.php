<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TacGia extends Model
{
    use HasFactory;

    protected $table = 'tac_gia';
    protected $primaryKey = 'MaTG';        // ✅ Khóa chính khác mặc định
    public $incrementing = true;           // ✅ Khóa chính tự tăng (nếu auto_increment)
    protected $keyType = 'int';            // ✅ Kiểu int cho khóa chính

    protected $fillable = ['MaTG', 'TenTG', 'QuocTich'];

    public function sachs()
    {
        return $this->hasMany(Sach::class, 'MaTG', 'MaTG');
    }
}
