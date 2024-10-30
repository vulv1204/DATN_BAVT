<?php

namespace Database\Seeders;

use App\Models\Comments;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comments::factory()->count(5)->create();
    }
}
