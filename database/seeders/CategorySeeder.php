<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Database\QueryException;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                'id' => 021,
                'name' => 'Action',
                'keterangan' => 'Film aksi yang penuh dengan adegan menegangkan',
            ],
            [
                'id' => 007,
                'name' => 'Comedy',
                'keterangan' => 'Film komedi yang akan membuat Anda tertawa',
            ],
            [
                'id' => 011, 
                'name' => 'Drama', 
                'keterangan' => 'Film drama yang akan menyentuh hati Anda',
            ],
            [
                'id' => 015, 
                'name' => 'Horror', 
                'keterangan' => 'Film horor yang akan membuat Anda takut',
            ],
            [
                'id' => 013, 
                'name' => 'Romance', 
                'keterangan' => 'Film romantis yang akan membuat Anda jatuh cinta',
            ],
        ];

        foreach ($category as $categorys) {
            Category::create($categorys);
        }
    }
}
