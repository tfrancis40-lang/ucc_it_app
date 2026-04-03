<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('courses')->truncate();

        Course::insert([
            [
                'code' => 'ITT107',
                'name' => 'Computer Information Essentials',
                'credits' => 3,
                'pre_reqs' => 'None',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT103',
                'name' => 'Programming Techniques',
                'credits' => 3,
                'pre_reqs' => 'ITT107',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT208',
                'name' => 'Internet Authoring I',
                'credits' => 3,
                'pre_reqs' => 'ITT103',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT104',
                'name' => 'Sample Course 4',
                'credits' => 3,
                'pre_reqs' => 'ITT103',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT105',
                'name' => 'Sample Course 5',
                'credits' => 3,
                'pre_reqs' => 'ITT104',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT106',
                'name' => 'Sample Course 6',
                'credits' => 3,
                'pre_reqs' => 'ITT105',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT107',
                'name' => 'Sample Course 7',
                'credits' => 3,
                'pre_reqs' => 'ITT106',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT108',
                'name' => 'Sample Course 8',
                'credits' => 3,
                'pre_reqs' => 'ITT107',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT109',
                'name' => 'Sample Course 9',
                'credits' => 3,
                'pre_reqs' => 'ITT108',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT110',
                'name' => 'Sample Course 10',
                'credits' => 3,
                'pre_reqs' => 'ITT109',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}