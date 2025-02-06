import React from 'react';
import { useForm, Link } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

const CreateVocabulary = () => {
    const { data, setData, post, processing, errors } = useForm({
        term: '',
        meaning: '',
    });

    const handleSubmit = (e) => {
        e.preventDefault();
        post(route('admin.vocabulary.store'));
    };

    return (
        <AuthenticatedLayout>
            <div className="container mx-auto p-4">
                <h1 className="text-3xl font-bold mb-4">Add New Vocabulary Term</h1>
                <form onSubmit={handleSubmit}>
                    <div className="mb-4">
                        <label htmlFor="term" className="block text-gray-700 font-bold mb-2">Term</label>
                        <input
                            type="text"
                            id="term"
                            name="term"
                            value={data.term}
                            onChange={(e) => setData('term', e.target.value)}
                            className={`shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ${errors.term ? 'border-red-500' : ''}`}
                        />
                        {errors.term && <p className="text-red-500 text-xs italic mt-1">{errors.term}</p>}
                    </div>
                    <div className="mb-4">
                        <label htmlFor="meaning" className="block text-gray-700 font-bold mb-2">Meaning</label>
                        <textarea
                            id="meaning"
                            name="meaning"
                            value={data.meaning}
                            onChange={(e) => setData('meaning', e.target.value)}
                            className={`shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ${errors.meaning ? 'border-red-500' : ''}`}
                            rows="4"
                        />
                        {errors.meaning && <p className="text-red-500 text-xs italic mt-1">{errors.meaning}</p>}
                    </div>
                    <div className="flex items-center justify-between">
                        <button
                            type="submit"
                            className="bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            disabled={processing}
                        >
                            Add Term
                        </button>
                        <Link href={route('admin.vocabulary.index')} className="text-gray-500 hover:text-blue-500">
                            Cancel
                        </Link>
                    </div>
                </form>
            </div>
        </AuthenticatedLayout>
    );
};

export default CreateVocabulary;