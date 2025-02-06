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

        Vocabulary::create([
            'term' => 'Vue.js',
            'meaning' => 'Vue.js is a progressive JavaScript framework for building user interfaces.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Angular',
            'meaning' => 'Angular is a platform and framework for building client-side applications using HTML and TypeScript.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'RESTful API',
            'meaning' => 'A RESTful API is an architectural style for designing networked applications using HTTP methods and principles.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'GraphQL',
            'meaning' => 'GraphQL is a query language for APIs and a runtime for executing those queries by using a type system you define for your data.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'JWT',
            'meaning' => 'JSON Web Token (JWT) is an open standard (RFC 7519) that defines a compact and self-contained way for securely transmitting information between parties as a JSON object.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'OAuth',
            'meaning' => 'OAuth is an open-standard authorization protocol or framework that provides applications secure designated access without sharing passwords.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Docker',
            'meaning' => 'Docker is a platform that uses OS-level virtualization to deliver software in packages called containers.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Kubernetes',
            'meaning' => 'Kubernetes is an open-source container orchestration system for automating deployment, scaling, and management of containerized applications.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'CI/CD',
            'meaning' => 'Continuous Integration/Continuous Deployment (CI/CD) is a set of practices aimed at automating the integration and deployment of code changes from multiple contributors.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Git',
            'meaning' => 'Git is a distributed version control system designed to handle everything from small to very large projects with speed and efficiency.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'GitHub',
            'meaning' => 'GitHub is a web-based platform for version control and collaboration on software projects using Git.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'MySQL',
            'meaning' => 'MySQL is an open-source relational database management system.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'PostgreSQL',
            'meaning' => 'PostgreSQL is a powerful, open-source object-relational database system.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Redis',
            'meaning' => 'Redis is an in-memory data structure store, used as a database, cache, and message broker.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'MongoDB',
            'meaning' => 'MongoDB is a source-available cross-platform document-oriented database program.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Nginx',
            'meaning' => 'Nginx is a high-performance web server and a reverse proxy server.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Apache',
            'meaning' => 'Apache is a free and open-source cross-platform web server software.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'AWS',
            'meaning' => 'Amazon Web Services (AWS) is a subsidiary of Amazon providing on-demand cloud computing platforms and APIs.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Azure',
            'meaning' => 'Microsoft Azure is a cloud computing service provided by Microsoft for building, deploying, and managing applications and services through Microsoft-managed data centers across the globe.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'GCP',
            'meaning' => 'Google Cloud Platform (GCP) is a suite of cloud computing services offered by Google.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Django',
            'meaning' => 'Django is a high-level Python web framework that encourages rapid development and clean, pragmatic design.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Flask',
            'meaning' => 'Flask is a micro web framework written in Python.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Node.js',
            'meaning' => 'Node.js is a JavaScript runtime built on Chrome\'s V8 JavaScript engine.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Express.js',
            'meaning' => 'Express.js is a minimal and flexible Node.js web application framework that provides a robust set of features for web and mobile applications.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'TypeScript',
            'meaning' => 'TypeScript is a statically typed programming language developed by Microsoft as a strict syntactical superset of JavaScript.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'JavaScript',
            'meaning' => 'JavaScript is a programming language that conforms to the ECMAScript specification.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'HTML',
            'meaning' => 'Hypertext Markup Language (HTML) is the standard markup language for creating web pages and web applications.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'CSS',
            'meaning' => 'Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in HTML or XML.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Bootstrap',
            'meaning' => 'Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Tailwind CSS',
            'meaning' => 'Tailwind CSS is a utility-first CSS framework for rapidly building custom designs.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Webpack',
            'meaning' => 'Webpack is a module bundler primarily for JavaScript, but it can transform front-end assets like HTML, CSS, and images.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Vite',
            'meaning' => 'Vite is a build tool that aims to provide a faster and leaner development experience for modern web projects.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Inertia.js',
            'meaning' => 'Inertia.js allows you to create fully client-side rendered, single-page apps, without building an API or learning a new framework.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Axios',
            'meaning' => 'Axios is a promise-based HTTP client for the browser and Node.js.',
            'is_from_client' => false,
        ]);
    }
}