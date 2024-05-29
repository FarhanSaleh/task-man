<x-dashboard-layout>
    <h1 class="mb-6 text-2xl font-semibold">Tugas Saya</h1>
    <x-task-input :label="$label" />
    <div class="mt-6 overflow-x-scroll overflow-y-hidden">
        <table id="myTable" class="w-full border border-collapse rounded-md bg-base-100 outline outline-base-300 display">
            <thead>
                <tr>
                    <th class="w-1">No</th>
                    <th class="w-72">Judul</th>
                    <th>Label</th>
                    <th>Deadline</th>
                    <th>Prioritas</th>
                    <th>Status</th>
                    <th class="w-56">aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($task as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->label->title}}</td>
                    <td>{{$item->deadline}}</td>
                    <td>
                        @switch($item->priority)
                        @case(1)
                        Biasa
                        @break
                        @case(2)
                        Penting
                        @break
                        @default
                        Sangat Penting
                        @endswitch
                    </td>
                    <td>
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
                    </td>
                    <td class="flex gap-2">
                        <x-task-edit :label='$label' :id='$loop->iteration' :task='$item' />
                        <form action="/task/delete/{{$item->id}}" method="post" class="flex gap-2">
                            <a href="{{route('task.show', $item->id)}}" class="link link-success">Detail</a>
                            @csrf
                            @method('PUT')
                            <button class="link link-error" type="submit" id="deleteButton">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- Datatables --}}
    {{-- Alert --}}
    @if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: "error",
                    title: "GAGAL!",
                    text: "Ada yang salah",
                    showConfirmButton: false,
                    timer: 2000
                })
            })
    </script>
    @endif
</x-dashboard-layout>