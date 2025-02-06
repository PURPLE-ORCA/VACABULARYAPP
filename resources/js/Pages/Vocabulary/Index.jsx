import React, { useState, useEffect } from "react";
import { Link, usePage, useForm } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

const VocabularyIndex = () => {
    const { vocabularies, search } = usePage().props;
    const { data, setData, get } = useForm({
        search: search || "",
    });

    useEffect(() => {
        if (search) {
            setData("search", search);
        }
    }, [search]);

    const handleSearch = (e) => {
        e.preventDefault();
        get(route("vocabulary.index", { search: data.search }));
    };

    return (
        <AuthenticatedLayout>
            <div className="container mx-auto p-8 bg-black text-green-400 min-h-screen">
                {/* Title */}
                <h1 className="text-5xl font-serif text-green-500 font-bold mb-8 text-center pb-2">
                    Vocabulary
                </h1>

                {/* Search Bar */}
                <form onSubmit={handleSearch} className="mb-8">
                    <div className="flex items-center gap-4 max-w-2xl mx-auto">
                        <input
                            type="text"
                            name="search"
                            value={data.search}
                            onChange={(e) => setData("search", e.target.value)}
                            placeholder="Search for a term..."
                            className="bg-gray-900 text-green-300 border border-green-500 p-3 w-full rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-lg font-mono"
                        />
                        <button
                            type="submit"
                            className="bg-green-600 hover:bg-green-500 text-black font-bold px-6 py-3 rounded-md shadow-md transition duration-300"
                        >
                            Search
                        </button>
                    </div>
                </form>

                {/* Dictionary Entries */}
                {vocabularies.length > 0 ? (
                    <div className="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-8xl mx-auto">
                        {vocabularies.map((vocabulary) => (
                            <div
                                key={vocabulary.id}
                                className="p-6 bg-gray-900 rounded-lg shadow-md transition-transform transform hover:scale-105"
                            >
                                {/* Word & Phonetics */}
                                <h2 className="text-2xl font-bold font-serif text-green-500">
                                    {vocabulary.term}
                                </h2>
                                
                                {/* Meaning */}
                                <p className="text-green-300 mt-2 text-lg font-mono">
                                    {vocabulary.meaning}
                                </p>

                                {/* Synonyms & Example Sentences */}
                                <div className="mt-4 text-sm">
                                    <p className="text-green-500 font-bold text-lg">Example:</p>
                                    <p className="text-green-400 italic">
                                        {vocabulary.example}
                                    </p>
                                </div>
                            </div>
                        ))}
                    </div>
                ) : (
                    <div className="text-center text-green-500 mt-12">
                        No results found for "<span className="font-bold">{data.search}</span>".{" "}
                        <button
                            onClick={() => alert(`Suggest "${data.search}" to the team?`)}
                            className="text-green-400 hover:underline"
                        >
                            Do you want to suggest it?
                        </button>
                    </div>
                )}
            </div>
        </AuthenticatedLayout>
    );
};

export default VocabularyIndex;
