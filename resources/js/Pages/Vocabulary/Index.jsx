import React, { useState, useEffect } from 'react';
import { Link, usePage, useForm } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

const VocabularyIndex = () => {
    const { vocabularies, search } = usePage().props;
    const { data, setData, get } = useForm({
        search: search || '',
    });

    useEffect(() => {
        if (search) {
            setData('search', search);
        }
    }, [search]);

    const handleSearch = (e) => {
        e.preventDefault();
        get(route('vocabulary.index', { search: data.search }));
    };

    return (
        <AuthenticatedLayout >
            <div className="container mx-auto p-4">
                <h1 className="text-3xl font-bold mb-4">Vocabulary List</h1>

                <form onSubmit={handleSearch} className="mb-4">
                    <div className="flex items-center">
                        <input
                            type="text"
                            name="search"
                            value={data.search}
                            onChange={(e) => setData('search', e.target.value)}
                            placeholder="Search for a term..."
                            className="border p-2 rounded w-full mr-2"
                        />
                        <button type="submit" className="bg-blue-500 text-white px-4 py-2 rounded">
                            Search
                        </button>
                    </div>
                </form>

                {vocabularies.length > 0 ? (
                    <ul className="list-disc pl-5">
                        {vocabularies.map((vocabulary) => (
                            <li key={vocabulary.id} className="mb-2">
                                <Link 
                                // href={route('vocabulary.show', vocabulary.id)} 
                                className="text-blue-500 hover:underline">
                                    {vocabulary.term}
                                </Link>
                                <p>{vocabulary.meaning}</p>
                            </li>
                        ))}
                    </ul>
                ) : (
                    <div className="text-gray-500">
                        No results found for "{data.search}".{' '}
                        <button
                            onClick={() => {
                                // Redirect to a suggestion form or modal
                                alert(`Suggest "${data.search}" to the team?`);
                            }}
                            className="text-blue-500 hover:underline"
                        >
                            Do you want to suggest to the team to add it?
                        </button>
                    </div>
                )}
            </div>
        </AuthenticatedLayout>
    );
};

export default VocabularyIndex;