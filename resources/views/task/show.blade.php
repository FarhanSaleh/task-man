<x-dashboard-layout>
    <h1 class="mb-6 text-2xl font-semibold">Detail Tugas</h1>
    <div class="flex flex-col gap-3">
        <div class="flex flex-col">
            <div class="font-bold">Judul</div>
            <div>{{$task->title}}</div>
        </div>
        <div class="flex flex-col">
            <div class="font-bold">Deskripsi</div>
            <div>{{$task->description}}</div>
        </div>
        <div class="flex flex-col">
            <div class="font-bold">Label Tugas</div>
            <div>{{$task->label->title}}</div>
        </div>
        <div class="flex flex-col">
            <div class="font-bold">Deadline</div>
            <div>{{date('j F Y',strtotime($task->deadline))}}</div>
        </div>
        <div class="flex flex-col">
            <div class="font-bold">Deadline</div>
            <div>
                @switch($task->priority)
                @case(1)
                Biasa
                @break
                @case(2)
                Penting
                @break
                @default
                Sangat Penting
                @endswitch
            </div>
        </div>
        <div class="flex flex-col">
            <div class="font-bold">Status pengerjaan</div>

            @switch($task->status)
            @case(0)
            <div class="dropdown dropdown-hover">
                <div tabindex="0" role="button" class="badge badge-neutral">Menunggu</div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 gap-1">
                    <li class="font-semibold text-white rounded-lg bg-warning">
                        <form action="/task/status/{{$task->id}}/1" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit">Proses</button>
                        </form>
                    </li>
                    <li class="font-semibold text-white rounded-lg bg-success">
                        <form action="/task/status/{{$task->id}}/2" method="post">
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
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 gap-1">
                    <li class="font-semibold text-white rounded-lg bg-neutral">
                        <form action="/task/status/{{$task->id}}/0" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit">Menunggu</button>
                        </form>
                    </li>
                    <li class="font-semibold text-white rounded-lg bg-success">
                        <form action="/task/status/{{$task->id}}/2" method="post">
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
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 gap-1">
                    <li class="font-semibold text-white rounded-lg bg-neutral">
                        <form action="/task/status/{{$task->id}}/0" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit">Menunggu</button>
                        </form>
                    </li>
                    <li class="font-semibold text-white rounded-lg bg-warning">
                        <form action="/task/status/{{$task->id}}/1" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit">Proses</button>
                        </form>
                    </li>
                </ul>
            </div>
            @endswitch
        </div>
    </div>
</x-dashboard-layout>