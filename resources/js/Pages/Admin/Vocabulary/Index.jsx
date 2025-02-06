import React, { useState } from "react";
import { Link, usePage } from "@inertiajs/react";
import { useForm } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import ConfirmationModal from "@/Components/ConfirmationModal";

const AdminVocabularyIndex = () => {
    const { vocabularies } = usePage().props;
    const { data, setData, get, delete: deleteForm } = useForm({ search: "" });
    const [modalOpen, setModalOpen] = useState(false);
    const [vocabularyToDelete, setVocabularyToDelete] = useState(null);

    const handleSearch = (e) => {
        e.preventDefault();
        get(route("admin.vocabulary.index", { search: data.search }));
    };

    const handleDelete = (vocabulary) => {
        setVocabularyToDelete(vocabulary);
        setModalOpen(true);
    };

    const confirmDelete = () => {
        if (vocabularyToDelete) {
            deleteForm(route("admin.vocabulary.destroy", vocabularyToDelete.id));
            setModalOpen(false);
        }
    };

    return (
        <AuthenticatedLayout>
            <div className="container mx-auto p-8 bg-black text-green-400 min-h-screen">
                {/* Title */}
                <h1 className="text-4xl font-bold text-center text-green-500 mb-8 pb-4">
                    Admin Panel
                </h1>

                {/* Search Bar */}
                <form onSubmit={handleSearch} className="mb-6 max-w-2xl mx-auto">
                    <div className="flex items-center gap-4">
                        <input
                            type="text"
                            name="search"
                            value={data.search}
                            onChange={(e) => setData("search", e.target.value)}
                            placeholder="Search for a term..."
                            className="bg-gray-900 text-green-300 border border-green-500 p-3 w-full rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-lg"
                        />
                        <button
                            type="submit"
                            className="bg-green-600 hover:bg-green-500 text-black font-bold px-6 py-3 rounded-md shadow-md transition duration-300"
                        >
                            Search
                        </button>
                    </div>
                </form>

                {/* Vocabulary Table */}
                {vocabularies.length > 0 ? (
                    <div className="overflow-x-auto max-w-8xl mx-auto">
                        <table className="w-full border border-green-500 text-white shadow-lg rounded-lg">
                            <thead>
                                <tr className="bg-gray-900">
                                    <th className="border border-green-400 p-3 text-left">Term</th>
                                    <th className="border border-green-400 p-3 text-left">Meaning</th>
                                    <th className="border border-green-400 p-3 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {vocabularies.map((vocabulary) => (
                                    <tr
                                        key={vocabulary.id}
                                        className="hover:bg-gray-800 transition duration-300"
                                    >
                                        <td className="border border-green-400 p-3 text-lg font-semibold">
                                            {vocabulary.term}
                                        </td>
                                        <td className="border border-green-400 p-3">{vocabulary.meaning}</td>
                                        <td className="border border-green-400 p-3 flex justify-center gap-4">
                                            {/* Edit */}
                                            <Link
                                                href={route("admin.vocabulary.edit", vocabulary.id)}
                                                className="text-green-400 hover:text-blue-500 transition"
                                            >
                                                <i className="bx bxs-edit-alt text-2xl"></i>
                                            </Link>
                                            {/* Delete */}
                                            <button
                                                onClick={() => handleDelete(vocabulary)}
                                                className="text-green-400 hover:text-red-500 transition"
                                            >
                                                <i className="bx bxs-trash text-2xl"></i>
                                            </button>
                                        </td>
                                    </tr>
                                ))}
                            </tbody>
                        </table>
                    </div>
                ) : (
                    <div className="text-center text-green-500 mt-12">
                        No results found for "<span className="font-bold">{data.search}</span>".
                    </div>
                )}

                {/* Floating Add Button */}
                <Link
                    href={route("admin.vocabulary.create")}
                    className="fixed bottom-8 right-8 bg-green-600 hover:bg-green-500 text-black font-bold p-4 rounded-full shadow-lg transition duration-300 flex items-center gap-2"
                >
                    <i className="bx bxs-plus-circle text-2xl"></i>
                    <span className="hidden md:inline">Add Term</span>
                </Link>
            </div>

            {/* Confirmation Modal */}
            <ConfirmationModal
                isOpen={modalOpen}
                onClose={() => setModalOpen(false)}
                onConfirm={confirmDelete}
                title="Confirm Deletion"
                message="Are you sure you want to delete this vocabulary term?"
            />
        </AuthenticatedLayout>
    );
};

export default AdminVocabularyIndex;
