<x-dashboard-layout>
    <h1 class="mb-6 text-2xl font-semibold">Data User</h1>
    {{-- <x-task-input :label="$label" /> --}}
    <div class="mt-6 overflow-x-scroll overflow-y-hidden">
        <table id="myTable" class="w-full border border-collapse rounded-md bg-base-100 outline outline-base-300 display">
            <thead>
                <tr>
                    <th class="w-1">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th class="w-56">aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        @switch($item->role)
                        @case(0)
                        Member
                        @break
                        @case(1)
                        Admin
                        @break
                        @default
                        Super Admin
                        @endswitch
                    </td>
                    <td class="flex gap-2">
                        {{-- <x-task-edit :label='$label' :id='$loop->iteration' :task='$item' /> --}}
                        <form action="/task/delete/{{$item->id}}" method="post" class="flex gap-2">
                            <a href="{{route('users.show', $item->id)}}" class="link link-success">Detail</a>
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