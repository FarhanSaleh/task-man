<?php

namespace App\Http\Controllers;

use App\Models\Label;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $label = Label::query()->get();
        $task = Task::query()->where('id_user', Auth::id())->where('del', 0)->get();

        return view('task.index', [
            'label' => $label,
            'task' => $task
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required'],
            'label' => ['required', 'not_in:0'],
            'deadline' => ['required'],
            'priority' => ['required', 'not_in:0'],
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'id_label' => $request->label,
            'deadline' => $request->deadline,
            'priority' => $request->priority,
            'id_user' => Auth::id(),
            'status' => 0,
            'del' => 0
        ]);

        return redirect()->route('task.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    public function show($id)
    {
        $task = Task::query()->where('id', $id)->first();
        
        return view('task.show', [
            'task' => $task
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'title' => ['required'],
            'label' => ['required', 'not_in:0'],
            'deadline' => ['required'],
            'priority' => ['required', 'not_in:0'],
        ]);

        $task = Task::findOrFail($id);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'id_label' => $request->label,
            'deadline' => $request->deadline,
            'priority' => $request->priority,
        ]);

        return redirect()->route('task.index')->with(['success' => 'Data berhasil diedit!']);
    }

    public function status($id, $status): RedirectResponse
    {
        $task = Task::findOrFail($id);

        $task->update([
            'status' => $status
        ]);

        return back();
    }

    public function delete($id): RedirectResponse
    {
        $task = Task::findOrFail($id);

        $task->update([
            'del' => 1
        ]);

        return redirect()->route('task.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
