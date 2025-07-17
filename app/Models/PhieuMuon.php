<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sach;
use App\Models\ThanhVien;

class PhieuMuon extends Model
{
    use HasFactory;

    protected $table = 'phieu_muon';

    protected $fillable = ['MaPM', 'NgayMuon', 'NgayTra', 'MaTV', 'MaSach'];

    public function thanhVien()
    {
        return $this->belongsTo(ThanhVien::class, foreignKey:'MaTV');
    }

    public function sach()
    {
        return $this->belongsTo(Sach::class, foreignKey:'MaSach');
    }

}
