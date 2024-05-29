<div class="sticky top-0 h-screen border-r bg-base-100 min-w-64">
    <div class="m-5">
        <h1 class="my-2 text-2xl font-semibold">Task-Man</h1>
        <hr>
        <div class="flex flex-col my-4">
            <a href="/" class="px-4 py-2 rounded-xl hover:bg-base-200">Dashboard</a>
            @if (Auth::user()->role == 1)
            <a href="/users" class="px-4 py-2 rounded-xl hover:bg-base-200">Data User</a>
            @endif
            <a href="/task" class="px-4 py-2 rounded-xl hover:bg-base-200">Tugas Saya</a>
            {{-- <a href="/history" class="px-4 py-2 rounded-xl hover:bg-base-200">Histori Tugas</a> --}}
        </div>
    </div>
</div>