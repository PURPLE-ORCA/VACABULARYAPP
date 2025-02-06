import React, { useState, useEffect } from 'react';
import { Link, usePage } from '@inertiajs/react';
import { useForm } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import ConfirmationModal from '@/Components/ConfirmationModal';

const AdminVocabularyIndex = () => {
    const { vocabularies, auth } = usePage().props;
    const { data, setData, get, delete: deleteForm } = useForm({
        search: '',
    });
    const [modalOpen, setModalOpen] = useState(false);
    const [vocabularyToDelete, setVocabularyToDelete] = useState(null);

    const handleSearch = (e) => {
        e.preventDefault();
        get(route('admin.vocabulary.index', { search: data.search }));
    };

    const handleDelete = (vocabulary) => {
        setVocabularyToDelete(vocabulary);
        setModalOpen(true);
    };

    const confirmDelete = () => {
        if (vocabularyToDelete) {
            deleteForm(route('admin.vocabulary.destroy', vocabularyToDelete.id));
            setModalOpen(false);
        }
    };

    const cancelDelete = () => {
        setModalOpen(false);
    };

    return (
        <AuthenticatedLayout>
            <div className="container mx-auto p-4">
                <h1 className="text-3xl font-bold mb-4">Admin Vocabulary List</h1>
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
                        <button type="submit" className="bg-green-500 text-white px-4 py-2 rounded">
                            Search
                        </button>
                    </div>
                </form>
                <Link href={route('admin.vocabulary.create')} className="bg-green-500 text-white px-4 py-2 rounded mb-4">
                    Add New Term
                </Link>
                {vocabularies.length > 0 ? (
                    <table className="w-full border-collapse">
                        <thead>
                            <tr>
                                <th className="border p-2">Term</th>
                                <th className="border p-2">Meaning</th>
                                <th className="border p-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {vocabularies.map((vocabulary) => (
                                <tr key={vocabulary.id}>
                                    <td className="border p-2">{vocabulary.term}</td>
                                    <td className="border p-2">{vocabulary.meaning}</td>
                                    <td className="border p-2">
                                        <Link href={route('admin.vocabulary.edit', vocabulary.id)} className="text-blue-500 hover:underline mr-2">
                                            Edit
                                        </Link>
                                        <button
                                            onClick={() => handleDelete(vocabulary)}
                                            className="text-red-500 hover:underline"
                                        >
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                ) : (
                    <div className="text-gray-500">
                        No results found for "{data.search}".
                    </div>
                )}
            </div>
            <ConfirmationModal
                isOpen={modalOpen}
                onClose={cancelDelete}
                onConfirm={confirmDelete}
                title="Confirm Deletion"
                message="Are you sure you want to delete this vocabulary term?"
            />
        </AuthenticatedLayout>
    );
};

export default AdminVocabularyIndex;