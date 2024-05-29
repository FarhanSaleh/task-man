<x-dashboard-layout>
    <h1 class="mb-6 text-2xl font-semibold">Detail User</h1>
    <div class="flex flex-col gap-3">
        <div class="flex flex-col">
            <div class="font-bold">Nama</div>
            <div>{{$users->name}}</div>
        </div>
        <div class="flex flex-col">
            <div class="font-bold">Email</div>
            <div>{{$users->email}}</div>
        </div>
        <div class="flex flex-col">
            <div class="font-bold">Tanggal Registrasi</div>
            <div>{{date('j F Y',strtotime($users->created_at))}}</div>
        </div>
        <div class="flex flex-col">
            <div class="font-bold">Role</div>

            @switch($users->role)
            @case(0)
            <div class="dropdown dropdown-hover">
                <div tabindex="0" role="button" class="badge badge-neutral">Member</div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 gap-1">
                    <li class="font-semibold text-white rounded-lg bg-primary">
                        <form action="/users/role/{{$users->id}}/1" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit">Admin</button>
                        </form>
                    </li>
                </ul>
            </div>
            @break
            @default
            <div class="dropdown dropdown-hover">
                <div tabindex="0" role="button" class="text-white badge badge-primary">Admin</div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 gap-1">
                    <li class="font-semibold text-white rounded-lg bg-neutral">
                        <form action="/users/role/{{$users->id}}/0" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit">Member</button>
                        </form>
                    </li>
                </ul>
            </div>
            @endswitch
        </div>
    </div>
</x-dashboard-layout>