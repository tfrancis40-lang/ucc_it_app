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
                'code' => 'ITT211',
                'name' => 'Computer Data Analysis',
                'credits' => 3,
                'pre_reqs' => 'None',
                'description' => 'This course introduces data analysis using spreadsheets and Python. Students will learn to organize, analyze, and interpret data using statistical methods such as regression, hypothesis testing, and clustering, developing critical thinking for data-driven decision-making.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT103',
                'name' => 'Programming Techniques',
                'credits' => 3,
                'pre_reqs' => 'ITT107',
                'description' => 'This course introduces fundamental programming concepts, focusing on logic development, structured design, testing, and basic programming principles. It serves as a foundation for advanced programming courses.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT208',
                'name' => 'Internet Authoring I',
                'credits' => 3,
                'pre_reqs' => 'ITT103',
                'description' => 'This course introduces the tools and techniques for designing, developing, and publishing websites. Students will gain hands-on experience with internet authoring tools and learn to create and deploy web pages.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT201',
                'name' => 'Data Communication & Networks I',
                'credits' => 3,
                'pre_reqs' => 'ITT107',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT210',
                'name' => 'Database Management Systems',
                'credits' => 3,
                'pre_reqs' => 'ITT103',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT307',
                'name' => 'Internet Authoring II',
                'credits' => 3,
                'pre_reqs' => 'ITT208',
                'description' => 'This course builds on Internet Authoring I, exploring advanced web development concepts such as UI and site design, client-server architecture, and client- and server-side programming. It also covers web security, e-commerce, mobile web development, multimedia, and modern web frameworks.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT116',
                'name' => 'Computer Essentials & Troubleshooting I',
                'credits' => 3,
                'pre_reqs' => 'ITT107',
                'description' => 'This foundational course introduces PC support, covering system building, operating systems, networking, and troubleshooting. Students will develop practical skills in system configuration, security, and maintenance. It also prepares students for the CompTIA A+ Core 1 certification.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT310',
                'name' => 'Systems Analysis & Design',
                'credits' => 3,
                'pre_reqs' => 'ITT210',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT408',
                'name' => 'Information Assurance & Security',
                'credits' => 3,
                'pre_reqs' => 'ITT208 & ITT210',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}