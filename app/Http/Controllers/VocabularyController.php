<?php

namespace App\Http\Controllers;

use App\Models\Vocabulary;
use App\Http\Requests\StoreVocabularyRequest;
use App\Http\Requests\UpdateVocabularyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VocabularyController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        if ($search) {
            $vocabularies = Vocabulary::where('term', 'like', '%' . $search . '%')
                ->orWhere('meaning', 'like', '%' . $search . '%')
                ->get();
        } else {
            $vocabularies = Vocabulary::all();
        }

        return inertia('Vocabulary/Index', [
            'vocabularies' => $vocabularies,
            'search' => $search,
        ]);
    }

    /**
     * Display a listing of the vocabulary terms for the admin.
     */
    public function adminIndex(Request $request)
    {
        $search = $request->query('search');

        if ($search) {
            $vocabularies = Vocabulary::where('term', 'like', '%' . $search . '%')
                ->orWhere('meaning', 'like', '%' . $search . '%')
                ->get();
        } else {
            $vocabularies = Vocabulary::all();
        }

        return inertia('Admin/Vocabulary/Index', [
            'vocabularies' => $vocabularies,
            'search' => $search,
        ]);
    }

    public function create()
    {
        return inertia('Admin/Vocabulary/Create');
    }

    /**
     * Store a newly created vocabulary term in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'term' => 'required|string|max:255',
            'meaning' => 'required|string',
            'example' => 'nullable|string',
        ]);

        Vocabulary::create($validated);

        return Redirect::route('admin.vocabulary.index')->with('success', 'Vocabulary term created successfully.');
    }

    /**
     * Show the form for editing the specified vocabulary term.
     */
    public function edit(Vocabulary $vocabulary)
    {
        return inertia('Admin/Vocabulary/Edit', [
            'vocabulary' => $vocabulary,
        ]);
    }

    /**
     * Update the specified vocabulary term in storage.
     */
    public function update(Request $request, Vocabulary $vocabulary)
    {
        $validated = $request->validate([
            'term' => 'required|string|max:255',
            'meaning' => 'required|string',
            'example' => 'nullable|string',
        ]);

        $vocabulary->update($validated);

        return Redirect::route('admin.vocabulary.index')->with('success', 'Vocabulary term updated successfully.');
    }

    /**
     * Remove the specified vocabulary term from storage.
     */
    public function destroy(Vocabulary $vocabulary)
    {
        $vocabulary->delete();

        return Redirect::route('admin.vocabulary.index')->with('success', 'Vocabulary term deleted successfully.');
    }
}
