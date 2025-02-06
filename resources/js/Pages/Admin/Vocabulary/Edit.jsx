import React from "react";
import { useForm, Link } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

const EditVocabulary = ({ vocabulary }) => {
    const { data, setData, put, processing, errors } = useForm({
        term: vocabulary.term,
        meaning: vocabulary.meaning,
    });

    const handleSubmit = (e) => {
        e.preventDefault();
        put(route("admin.vocabulary.update", vocabulary.id));
    };

    return (
        <AuthenticatedLayout>
            <div className="container mx-auto p-8 bg-black text-green-400 min-h-screen">
                {/* Page Title */}
                <h1 className="text-4xl font-bold text-center text-green-500 mb-8 pb-4">
                    Edit Vocabulary Term
                </h1>

                {/* Form */}
                <form
                    onSubmit={handleSubmit}
                    className="max-w-3xl mx-auto bg-gray-900 p-6 rounded-lg shadow-lg"
                >
                    {/* Term Input */}
                    <div className="mb-6">
                        <label htmlFor="term" className="block text-green-400 font-semibold mb-2">
                            Term
                        </label>
                        <input
                            type="text"
                            id="term"
                            name="term"
                            value={data.term}
                            onChange={(e) => setData("term", e.target.value)}
                            className={`w-full bg-gray-800 text-green-300 border ${
                                errors.term ? "border-red-500" : "border-green-500"
                            } p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-lg`}
                        />
                        {errors.term && <p className="text-red-400 text-sm mt-2">{errors.term}</p>}
                    </div>

                    {/* Meaning Input */}
                    <div className="mb-6">
                        <label htmlFor="meaning" className="block text-green-400 font-semibold mb-2">
                            Meaning
                        </label>
                        <textarea
                            id="meaning"
                            name="meaning"
                            value={data.meaning}
                            onChange={(e) => setData("meaning", e.target.value)}
                            className={`w-full bg-gray-800 text-green-300 border ${
                                errors.meaning ? "border-red-500" : "border-green-500"
                            } p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-lg`}
                            rows="4"
                        />
                        {errors.meaning && <p className="text-red-400 text-sm mt-2">{errors.meaning}</p>}
                    </div>

                    {/* Buttons */}
                    <div className="flex justify-between items-center">
                        {/* Update Button */}
                        <button
                            type="submit"
                            className="bg-green-600 hover:bg-green-500 text-black font-bold px-6 py-3 rounded-md shadow-md transition duration-300 disabled:opacity-50 disabled:cursor-not-allowed"
                            disabled={processing}
                        >
                            {processing ? "Updating..." : "Update Term"}
                        </button>

                        {/* Cancel Button */}
                        <Link
                            href={route("admin.vocabulary.index")}
                            className="text-green-400 hover:text-red-400 transition duration-300"
                        >
                            Cancel
                        </Link>
                    </div>
                </form>
            </div>
        </AuthenticatedLayout>
    );
};

export default EditVocabulary;
