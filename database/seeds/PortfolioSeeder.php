<?php

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        factory(Portfolio::class, 30)->create();
    }
}