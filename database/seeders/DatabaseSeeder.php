<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vocabulary;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create some sample vocabulary entries
        Vocabulary::create([
            'term' => 'auth',
            'meaning' => 'Authentication is the process of verifying the identity of a user, device, or system.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'web app',
            'meaning' => 'A web application is a software program that runs on a web server and is delivered to the user\'s web browser over the internet.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'API',
            'meaning' => 'An Application Programming Interface (API) is a set of rules and protocols for building and interacting with software applications.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Laravel',
            'meaning' => 'Laravel is a popular PHP framework known for its elegant syntax and robust features.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'React',
            'meaning' => 'React is a JavaScript library for building user interfaces, particularly single-page applications.',
            'is_from_client' => false,
        ]);
    }
}