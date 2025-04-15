<?php

namespace App\Models;

class Karyawan
{
    public static function all()
    {
        return [
            ['id' => 1, 'nama' => 'Budi', 'posisi' => 'Kasir', 'jadwal' => '08:00-16:00', 'telepon' => '08123456789', 'alamat' => 'Jakarta'],
            ['id' => 2, 'nama' => 'Siti', 'posisi' => 'Penjaga Tiket', 'jadwal' => '09:00-17:00', 'telepon' => '08129876543', 'alamat' => 'Bandung'],
        ];
    }

    public static function find($id)
    {
        $data = self::all();
        foreach ($data as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
        return null;
    }
}