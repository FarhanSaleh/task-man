<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $today = Carbon::today();

        $task = Task::query()
            ->where('id_user', Auth::id())
            ->where('del', 0)
            ->whereIn('status', [0, 1])
            ->where('deadline', '>=',$today)
            ->orderBy('deadline', 'asc')
            ->limit(3)
            ->get();

        $totalTask = Task::query()
            ->where('id_user', Auth::id())
            ->where('del', 0)
            ->count();

        $totalTaskDone = Task::query()
            ->where('id_user', Auth::id())
            ->where('del', 0)
            ->where('status', 2)
            ->count();

        $totalTaskNotDone = Task::query()
            ->where('id_user', Auth::id())
            ->where('del', 0)
            ->whereIn('status', [0, 1])
            ->count();

        $totalUser = User::query()
            ->where('del', 0)
            ->count();

        return view('dashboard.index', [
            'task' => $task,
            'totalTask' => $totalTask,
            'taskDone' => $totalTaskDone,
            'taskNotDone' => $totalTaskNotDone,
            'totalUser' => $totalUser
        ]);
    }
}
