<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerivyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notification\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';//Eloquent akan membuat model mahasiswa menimpan record di tabel mahasiswa

    protected $primaryKey='Nim';//Memanggil isi DB dengan primary key
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nim',
        'Nama',
        'Kelas',
        'Jurusan',
    ];
}
