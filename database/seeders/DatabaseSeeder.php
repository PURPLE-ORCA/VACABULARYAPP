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

        Vocabulary::create([
            'term' => 'auth',
            'meaning' => 'Authentication is the process of verifying the identity of a user, device, or system.',
            'example' => 'The system requires auth to access user data.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'web app',
            'meaning' => 'A web application is a software program that runs on a web server and is delivered to the user\'s web browser over the internet.',
            'example' => 'Building a web app with Laravel and React.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'API',
            'meaning' => 'An Application Programming Interface (API) is a set of rules and protocols for building and interacting with software applications.',
            'example' => 'Using an API to fetch data from a server.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Laravel',
            'meaning' => 'Laravel is a popular PHP framework known for its elegant syntax and robust features.',
            'example' => 'Developing a RESTful API with Laravel.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'React',
            'meaning' => 'React is a JavaScript library for building user interfaces, particularly single-page applications.',
            'example' => 'Creating a dynamic UI with React components.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Vue.js',
            'meaning' => 'Vue.js is a progressive JavaScript framework for building user interfaces.',
            'example' => 'Building a single-page application with Vue.js.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Angular',
            'meaning' => 'Angular is a platform and framework for building client-side applications using HTML and TypeScript.',
            'example' => 'Creating a complex application with Angular.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'RESTful API',
            'meaning' => 'A RESTful API is an architectural style for designing networked applications using HTTP methods and principles.',
            'example' => 'Designing a RESTful API for a web app.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'GraphQL',
            'meaning' => 'GraphQL is a query language for APIs and a runtime for executing those queries by using a type system you define for your data.',
            'example' => 'Fetching data with GraphQL queries.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'JWT',
            'meaning' => 'JSON Web Token (JWT) is an open standard (RFC 7519) that defines a compact and self-contained way for securely transmitting information between parties as a JSON object.',
            'example' => 'Using JWT for authentication in a web app.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'OAuth',
            'meaning' => 'OAuth is an open-standard authorization protocol or framework that provides applications secure designated access without sharing passwords.',
            'example' => 'Implementing OAuth for social media login.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Docker',
            'meaning' => 'Docker is a platform that uses OS-level virtualization to deliver software in packages called containers.',
            'example' => 'Containerizing a web application with Docker.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Kubernetes',
            'meaning' => 'Kubernetes is an open-source container orchestration system for automating deployment, scaling, and management of containerized applications.',
            'example' => 'Deploying a containerized app with Kubernetes.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'CI/CD',
            'meaning' => 'Continuous Integration/Continuous Deployment (CI/CD) is a set of practices aimed at automating the integration and deployment of code changes from multiple contributors.',
            'example' => 'Setting up CI/CD pipelines with GitHub Actions.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Git',
            'meaning' => 'Git is a distributed version control system designed to handle everything from small to very large projects with speed and efficiency.',
            'example' => 'Using Git for version control in a project.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'GitHub',
            'meaning' => 'GitHub is a web-based platform for version control and collaboration on software projects using Git.',
            'example' => 'Collaborating on a project with GitHub.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'MySQL',
            'meaning' => 'MySQL is an open-source relational database management system.',
            'example' => 'Storing user data in a MySQL database.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'PostgreSQL',
            'meaning' => 'PostgreSQL is a powerful, open-source object-relational database system.',
            'example' => 'Managing complex data with PostgreSQL.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Redis',
            'meaning' => 'Redis is an in-memory data structure store, used as a database, cache, and message broker.',
            'example' => 'Caching data with Redis.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'MongoDB',
            'meaning' => 'MongoDB is a source-available cross-platform document-oriented database program.',
            'example' => 'Storing documents in MongoDB.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Nginx',
            'meaning' => 'Nginx is a high-performance web server and a reverse proxy server.',
            'example' => 'Configuring Nginx for load balancing.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Apache',
            'meaning' => 'Apache is a free and open-source cross-platform web server software.',
            'example' => 'Hosting a website with Apache.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'AWS',
            'meaning' => 'Amazon Web Services (AWS) is a subsidiary of Amazon providing on-demand cloud computing platforms and APIs.',
            'example' => 'Deploying a web app on AWS.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Azure',
            'meaning' => 'Microsoft Azure is a cloud computing service provided by Microsoft for building, deploying, and managing applications and services through Microsoft-managed data centers across the globe.',
            'example' => 'Using Azure for cloud storage.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'GCP',
            'meaning' => 'Google Cloud Platform (GCP) is a suite of cloud computing services offered by Google.',
            'example' => 'Building a serverless application with GCP.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Django',
            'meaning' => 'Django is a high-level Python web framework that encourages rapid development and clean, pragmatic design.',
            'example' => 'Creating a web application with Django.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Flask',
            'meaning' => 'Flask is a micro web framework written in Python.',
            'example' => 'Building a simple API with Flask.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Node.js',
            'meaning' => 'Node.js is a JavaScript runtime built on Chrome\'s V8 JavaScript engine.',
            'example' => 'Developing a backend with Node.js.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Express.js',
            'meaning' => 'Express.js is a minimal and flexible Node.js web application framework that provides a robust set of features for web and mobile applications.',
            'example' => 'Creating a RESTful API with Express.js.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'TypeScript',
            'meaning' => 'TypeScript is a statically typed programming language developed by Microsoft as a strict syntactical superset of JavaScript.',
            'example' => 'Writing type-safe code with TypeScript.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'JavaScript',
            'meaning' => 'JavaScript is a programming language that conforms to the ECMAScript specification.',
            'example' => 'Adding interactivity to a webpage with JavaScript.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'HTML',
            'meaning' => 'Hypertext Markup Language (HTML) is the standard markup language for creating web pages and web applications.',
            'example' => 'Structuring a webpage with HTML.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'CSS',
            'meaning' => 'Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in HTML or XML.',
            'example' => 'Styling a webpage with CSS.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Bootstrap',
            'meaning' => 'Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development.',
            'example' => 'Using Bootstrap for responsive design.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Tailwind CSS',
            'meaning' => 'Tailwind CSS is a utility-first CSS framework for rapidly building custom designs.',
            'example' => 'Creating custom styles with Tailwind CSS.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Webpack',
            'meaning' => 'Webpack is a module bundler primarily for JavaScript, but it can transform front-end assets like HTML, CSS, and images.',
            'example' => 'Bundling assets with Webpack.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Vite',
            'meaning' => 'Vite is a build tool that aims to provide a faster and leaner development experience for modern web projects.',
            'example' => 'Setting up a project with Vite.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Inertia.js',
            'meaning' => 'Inertia.js allows you to create fully client-side rendered, single-page apps, without building an API or learning a new framework.',
            'example' => 'Building a single-page app with Inertia.js.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Axios',
            'meaning' => 'Axios is a promise-based HTTP client for the browser and Node.js.',
            'example' => 'Making HTTP requests with Axios.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Jest',
            'meaning' => 'Jest is a delightful JavaScript testing framework with a focus on simplicity.',
            'example' => 'Writing unit tests with Jest.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Cypress',
            'meaning' => 'Cypress is a next-generation front-end testing tool built for the modern web.',
            'example' => 'End-to-end testing with Cypress.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'PHPUnit',
            'meaning' => 'PHPUnit is a programmer-oriented testing framework for PHP.',
            'example' => 'Writing test cases with PHPUnit.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Codeception',
            'meaning' => 'Codeception is a modern full-stack testing framework for PHP.',
            'example' => 'Testing a Laravel application with Codeception.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'TDD',
            'meaning' => 'Test-Driven Development (TDD) is a software development process that relies on the repetition of a very short development cycle.',
            'example' => 'Practicing TDD in a project.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'BDD',
            'meaning' => 'Behavior-Driven Development (BDD) is a software development process that encourages collaboration among developers, QA, and non-technical or business participants in a software project.',
            'example' => 'Implementing BDD in a project.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Scrum',
            'meaning' => 'Scrum is a framework within which people can address complex adaptive problems, while productively and creatively delivering high-value products.',
            'example' => 'Using Scrum for project management.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Kanban',
            'meaning' => 'Kanban is a visual system for managing work as it moves through a process.',
            'example' => 'Implementing Kanban in a team.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Agile',
            'meaning' => 'Agile is a set of principles for software development in which requirements and solutions evolve through the collaborative effort of self-organizing cross-functional teams.',
            'example' => 'Adopting Agile practices in a project.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Waterfall',
            'meaning' => 'The Waterfall model is a linear sequential life cycle model that consists of several phases, including requirements, design, implementation, testing, and maintenance.',
            'example' => 'Following the Waterfall model in a project.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'MVC',
            'meaning' => 'Model-View-Controller (MVC) is a software architectural pattern for implementing user interfaces on computers.',
            'example' => 'Building an application with the MVC pattern.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'CRUD',
            'meaning' => 'CRUD stands for Create, Read, Update, and Delete, which are the four basic functions of persistent storage.',
            'example' => 'Implementing CRUD operations in an application.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'ORM',
            'meaning' => 'Object-Relational Mapping (ORM) is a programming technique for converting data between incompatible type systems using object-oriented programming languages.',
            'example' => 'Using an ORM to interact with a database.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Migrations',
            'meaning' => 'Migrations are a way to alter the database schema over time in a consistent and reproducible way.',
            'example' => 'Creating and running migrations in Laravel.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Seeding',
            'meaning' => 'Seeding is the initial seeding of a database with data.',
            'example' => 'Seeding a database with test data.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Pagination',
            'meaning' => 'Pagination is the process of dividing a document into discrete pages, either electronic pages or printed pages.',
            'example' => 'Implementing pagination in a web application.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Middleware',
            'meaning' => 'Middleware is software that acts as a bridge between an operating system or database and applications, especially on a network.',
            'example' => 'Using middleware in a web framework.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Composer',
            'meaning' => 'Composer is a dependency manager for PHP.',
            'example' => 'Managing dependencies with Composer.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'NPM',
            'meaning' => 'Node Package Manager (NPM) is a package manager for JavaScript programming languages.',
            'example' => 'Installing packages with NPM.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Yarn',
            'meaning' => 'Yarn is a package manager for JavaScript programming languages.',
            'example' => 'Managing dependencies with Yarn.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Dependency Injection',
            'meaning' => 'Dependency Injection is a design pattern in which an object receives other objects that it depends on.',
            'example' => 'Implementing Dependency Injection in a project.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Singleton',
            'meaning' => 'The Singleton pattern ensures a class has only one instance and provides a global point of access to it.',
            'example' => 'Creating a Singleton class in a project.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Factory',
            'meaning' => 'The Factory pattern is a creational design pattern that provides an interface for creating objects in a superclass, but allows subclasses to alter the type of objects that will be created.',
            'example' => 'Implementing a Factory pattern in a project.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Facade',
            'meaning' => 'The Facade pattern provides a unified interface to a set of interfaces in a subsystem.',
            'example' => 'Using a Facade pattern to simplify a complex system.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Adapter',
            'meaning' => 'The Adapter pattern allows incompatible interfaces to work together.',
            'example' => 'Implementing an Adapter pattern in a project.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Observer',
            'meaning' => 'The Observer pattern defines a one-to-many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically.',
            'example' => 'Using the Observer pattern to notify subscribers of changes.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Strategy',
            'meaning' => 'The Strategy pattern defines a family of algorithms, encapsulates each one, and makes them interchangeable.',
            'example' => 'Implementing a Strategy pattern to switch between algorithms.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Decorator',
            'meaning' => 'The Decorator pattern allows behavior to be added to an individual object, either statically or dynamically, without affecting the behavior of other objects from the same class.',
            'example' => 'Extending the functionality of an object with the Decorator pattern.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Composite',
            'meaning' => 'The Composite pattern composes objects into tree structures to represent part-whole hierarchies.',
            'example' => 'Building a tree structure with the Composite pattern.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Chain of Responsibility',
            'meaning' => 'The Chain of Responsibility pattern passes a request along a chain of handlers.',
            'example' => 'Implementing a Chain of Responsibility pattern to handle requests.',
            'is_from_client' => false,
        ]);

        Vocabulary::create([
            'term' => 'Template Method',
            'meaning' => 'The Template Method pattern defines the skeleton of an algorithm in a method, deferring some steps to subclasses.',
            'example' => 'Using the Template Method pattern to define an algorithm.',
            'is_from_client' => false,
        ]);
    }
}