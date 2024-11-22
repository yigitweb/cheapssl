<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyNoteRequest;
use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Models\Note;
use App\Models\Project;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NoteController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('note_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $notes = Note::with(['project'])->get();

        return view('frontend.notes.index', compact('notes'));
    }

    public function create()
    {
        abort_if(Gate::denies('note_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projects = Project::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.notes.create', compact('projects'));
    }

    public function store(StoreNoteRequest $request)
    {
        $note = Note::create($request->all());

        return redirect()->route('frontend.notes.index');
    }

    public function edit(Note $note)
    {
        abort_if(Gate::denies('note_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projects = Project::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $note->load('project');

        return view('frontend.notes.edit', compact('note', 'projects'));
    }

    public function update(UpdateNoteRequest $request, Note $note)
    {
        $note->update($request->all());

        return redirect()->route('frontend.notes.index');
    }

    public function show(Note $note)
    {
        abort_if(Gate::denies('note_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $note->load('project');

        return view('frontend.notes.show', compact('note'));
    }

    public function destroy(Note $note)
    {
        abort_if(Gate::denies('note_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $note->delete();

        return back();
    }

    public function massDestroy(MassDestroyNoteRequest $request)
    {
        $notes = Note::find(request('ids'));

        foreach ($notes as $note) {
            $note->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
