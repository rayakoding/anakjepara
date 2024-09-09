<?php

namespace Database\Seeders;

use App\Models\Puskesmas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Puskesmas::create([
            'nama' => 'Kedung I',
        ]);
        Puskesmas::create([
            'nama' => 'Kedung II',
        ]);
        Puskesmas::create([
            'nama' => 'Pecangaan',
        ]);
        Puskesmas::create([
            'nama' => 'Welahan I',
        ]);
        Puskesmas::create([
            'nama' => 'Welahan II',
        ]);
        Puskesmas::create([
            'nama' => 'Mayong I',
        ]);
        Puskesmas::create([
            'nama' => 'Mayong II',
        ]);
        Puskesmas::create([
            'nama' => 'Batealit',
        ]);
        Puskesmas::create([
            'nama' => 'Jepara',
        ]);
        Puskesmas::create([
            'nama' => 'Mlonggo',
        ]);
        Puskesmas::create([
            'nama' => 'Pakis Aji',
        ]);
        Puskesmas::create([
            'nama' => 'Bangsri I',
        ]);
        Puskesmas::create([
            'nama' => 'Bangsri II',
        ]);
        Puskesmas::create([
            'nama' => 'Keling I',
        ]);
        Puskesmas::create([
            'nama' => 'Keling II',
        ]);
        Puskesmas::create([
            'nama' => 'Karimunjawa',
        ]);
        Puskesmas::create([
            'nama' => 'Tahunan',
        ]);
        Puskesmas::create([
            'nama' => 'Nalumsari I',
        ]);
        Puskesmas::create([
            'nama' => 'Nalumsari II',
        ]);
        Puskesmas::create([
            'nama' => 'Kalinyamatan',
        ]);
        Puskesmas::create([
            'nama' => 'Kembang',
        ]);
        Puskesmas::create([
            'nama' => 'Donorojo',
        ]);
    }
}
