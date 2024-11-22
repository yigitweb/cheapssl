<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyHaberRequest;
use App\Http\Requests\StoreHaberRequest;
use App\Http\Requests\UpdateHaberRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HaberController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('haber_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.habers.index');
    }

    public function create()
    {
        abort_if(Gate::denies('haber_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.habers.create');
    }

    public function store(StoreHaberRequest $request)
    {
        $haber = Haber::create($request->all());

        return redirect()->route('admin.habers.index');
    }

    public function edit(Haber $haber)
    {
        abort_if(Gate::denies('haber_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.habers.edit', compact('haber'));
    }

    public function update(UpdateHaberRequest $request, Haber $haber)
    {
        $haber->update($request->all());

        return redirect()->route('admin.habers.index');
    }

    public function show(Haber $haber)
    {
        abort_if(Gate::denies('haber_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.habers.show', compact('haber'));
    }

    public function destroy(Haber $haber)
    {
        abort_if(Gate::denies('haber_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $haber->delete();

        return back();
    }

    public function massDestroy(MassDestroyHaberRequest $request)
    {
        $habers = Haber::find(request('ids'));

        foreach ($habers as $haber) {
            $haber->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
