import { Head, Link } from "@inertiajs/react";

export default function Welcome({ auth }) {
    return (
        <>
            <Head title="Welcome" />
            <div className="min-h-screen bg-black text-green-400 flex flex-col items-center justify-center">
                {/* Navbar */}
                <header className="absolute top-0 left-0 w-full p-6 flex justify-between items-center bg-gray-900 shadow-md">
                    <h2 className="text-xl font-bold text-green-500">VOCAB</h2>
                    <nav className="space-x-4">
                        {auth.user ? (
                            <Link
                                href={route("vocabulary.index")}
                                className="px-4 py-2 bg-green-600 hover:bg-green-500 text-black font-semibold rounded-md transition"
                            >
                                Dashboard
                            </Link>
                        ) : (
                            <>
                                <Link
                                    href={route("login")}
                                    className="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-white font-semibold rounded-md transition"
                                >
                                    Log in
                                </Link>
                                <Link
                                    href={route("register")}
                                    className="px-4 py-2 bg-green-600 hover:bg-green-500 text-black font-semibold rounded-md transition"
                                >
                                    Register
                                </Link>
                            </>
                        )}
                    </nav>
                </header>

                {/* Hero Section */}
                <main className="text-center mt-20 p-6">
                    <h1 className="text-5xl font-extrabold text-green-500 mb-4">
                        Welcome to VOCAB 🧾
                    </h1>
                    <p className="text-lg text-green-300 mb-6">
                        Explore the world of tech terms, one word at a time.
                    </p>
                    <Link
                        href={route("vocabulary.index")}
                        className="px-6 py-3 bg-green-600 hover:bg-green-500 text-black font-bold rounded-md shadow-lg transition text-lg"
                    >
                        View Vocabulary
                    </Link>
                </main>

                {/* Footer */}
                <footer className="absolute bottom-4 text-center text-sm text-green-500">
                    Built with 💚 by Purple Orca &copy; 2025
                </footer>
            </div>
        </>
    );
}
