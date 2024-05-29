<x-dashboard-layout>
    <h1 class="mb-6 text-2xl font-semibold">Hello, {{Auth::user()->name}}</h1>
    <div class="flex gap-4">
        <div class="flex-1 shadow stats">
            <div class="stat">
                <div class="w-8 stat-figure text-primary">
                </div>
                <div class="stat-title">Total Tugas</div>
                <div class="stat-value text-primary">{{$totalTask}}</div>
            </div>
        </div>
        <div class="flex-1 shadow stats">
            <div class="stat">
                <div class="w-8 stat-figure text-accent">
                </div>
                <div class="stat-title">Tugas Selesai</div>
                <div class="stat-value text-accent">{{$taskDone}}</div>
            </div>
        </div>
        <div class="flex-1 shadow stats">
            <div class="stat">
                <div class="stat-figure text-secondary">
                </div>
                <div class="stat-title">Tugas Belum Selesai</div>
                <div class="stat-value text-secondary">{{$taskNotDone}}</div>
            </div>
        </div>
        @if (Auth::user()->role == 1)
        <div class="flex-1 shadow stats">
            <div class="stat">
                <div class="stat-figure text-secondary">
                </div>
                <div class="stat-title">Total User</div>
                <div class="stat-value text-neutral">{{$totalUser}}</div>
            </div>
        </div>
        @endif
    </div>
    <div class="flex items-center justify-between mt-6">
        <h1 class="text-2xl font-semibold">Tugas Terdekat</h1>
        <a href="/task" class="link link-primary">Lihat Lebih</a>
    </div>
    <div class="grid grid-cols-3 gap-4 mt-6">
        @foreach($task as $item)
        <div class="w-auto shadow card bg-base-100">
            <div class="gap-3 card-body">
                <div class="px-4 py-2 border-l-4 rounded border-secondary">
                    <h2 class="card-title line-clamp-1">{{$item->title}}</h2>
                </div>
                <div>
                    <div class="text-sm">Deadline</div>
                    <div class="text-sm font-semibold">{{date('j F Y', strtotime($item->deadline))}}</div>
                </div>
                <div>
                    <div class="text-sm">Status</div>
                    @switch($item->status)
                    @case(0)
                    <div class="dropdown dropdown-hover">
                        <div tabindex="0" role="button" class="badge badge-neutral">Menunggu</div>
                        <ul tabindex="0"
                            class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 gap-1">
                            <li class="font-semibold text-white rounded-lg bg-warning">
                                <form action="/task/status/{{$item->id}}/1" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">Proses</button>
                                </form>
                            </li>
                            <li class="font-semibold text-white rounded-lg bg-success">
                                <form action="/task/status/{{$item->id}}/2" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">Selesai</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    @break
                    @case(1)
                    <div class="dropdown dropdown-hover">
                        <div tabindex="0" role="button" class="badge badge-warning">Proses</div>
                        <ul tabindex="0"
                            class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 gap-1">
                            <li class="font-semibold text-white rounded-lg bg-neutral">
                                <form action="/task/status/{{$item->id}}/0" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">Menunggu</button>
                                </form>
                            </li>
                            <li class="font-semibold text-white rounded-lg bg-success">
                                <form action="/task/status/{{$item->id}}/2" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">Selesai</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    @break
                    @default
                    <div class="dropdown dropdown-hover">
                        <div tabindex="0" role="button" class="text-white badge badge-success">Selesai</div>
                        <ul tabindex="0"
                            class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 gap-1">
                            <li class="font-semibold text-white rounded-lg bg-neutral">
                                <form action="/task/status/{{$item->id}}/0" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">Menunggu</button>
                                </form>
                            </li>
                            <li class="font-semibold text-white rounded-lg bg-warning">
                                <form action="/task/status/{{$item->id}}/1" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">Proses</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    @endswitch
                </div>
                <p class="line-clamp-3">{{$item->description}}</p>
                <div class="justify-end card-actions">
                    <a href="{{route('task.show', $item->id)}}" class="btn btn-outline">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-dashboard-layout>