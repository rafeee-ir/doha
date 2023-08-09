<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'محصولات کشاورزی',
            'مواد غذایی',
            'گیاهان دارویی',
            'پرورش نهال و گل',
            'انواع کود و محصولات مرتبط',
            'تجهیزات و ماشین آلات کشاورزی',
            'تجهیز و راه اندازی گلخانه',
            'سایر',
        ];

        foreach ($categories as $category) {
            Category::create(['category' => $category]);
        }
    }
}
