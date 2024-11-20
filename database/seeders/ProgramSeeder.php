<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $program = [
            ['name' => 'Web Development Bootcamp', 'description' => 'Learn the fundamentals of HTML, CSS, JavaScript, and web development frameworks.', 'created_by' => 1],
            ['name' => 'Data Science and Analytics', 'description' => 'An introduction to data analysis, machine learning, and statistical modeling.', 'created_by' => 1],
            ['name' => 'Cybersecurity Essentials', 'description' => 'A course on basic cybersecurity principles, risk management, and protection strategies.', 'created_by' => 1],
            ['name' => 'Cloud Computing Fundamentals', 'description' => 'Learn cloud concepts and popular cloud services like AWS, Azure, and Google Cloud.', 'created_by' => 1],
            ['name' => 'Mobile App Development', 'description' => 'Learn to develop applications for Android and iOS using popular frameworks.', 'created_by' => 1],
            ['name' => 'Artificial Intelligence Basics', 'description' => 'An introductory course on artificial intelligence, algorithms, and neural networks.', 'created_by' => 1],
            ['name' => 'DevOps and CI/CD', 'description' => 'Learn about DevOps practices, CI/CD pipelines, and automation tools.', 'created_by' => 1],
            ['name' => 'Blockchain and Cryptocurrency', 'description' => 'Understand blockchain technology, cryptocurrencies, and their applications.', 'created_by' => 1],
            ['name' => 'UI/UX Design Principles', 'description' => 'A course on user interface design, user experience, and prototyping.', 'created_by' => 1],
            ['name' => 'Machine Learning with Python', 'description' => 'An in-depth course on machine learning techniques and algorithms using Python.', 'created_by' => 1],
        ];

        foreach ($program as $data) {
            Program::create($data);
        }
    }
}
