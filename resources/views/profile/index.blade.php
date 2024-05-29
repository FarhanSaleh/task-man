<x-dashboard-layout>
  <h1 class="mb-6 text-2xl font-semibold">Profile</h1>
  <form action="{{route('users.update', Auth::user()->id)}}" method="post">
    @csrf
    @method('PUT')
    <label class="w-full max-w-xs form-control">
      <div class="label">
        <span class="label-text">Username</span>
      </div>
      <input type="text" name="name" placeholder="Type here" class="w-full max-w-xs input input-bordered"
        value="{{Auth::user()->name}}" />
    </label>
    <label class="w-full max-w-xs form-control">
      <div class="label">
        <span class="label-text">Email</span>
      </div>
      <input type="email" name="email" placeholder="Type here" class="w-full max-w-xs input input-bordered"
        value="{{Auth::user()->email}}" />
    </label>
    <button class="mt-4 btn btn-neutral">Edit Profile</button>
  </form>
  <h1 class="mt-6 mb-4 text-2xl font-semibold">Ubah Password</h1>
  <div class="mb-2">Default password = password</div>
  <form action="/profile/password/{{Auth::user()->id}}" method="post">
    @csrf
    @method('PUT')
    <label class="w-full max-w-xs form-control">
      <div class="label">
        <span class="label-text">Password lama</span>
      </div>
      <input type="password" name="password-old" placeholder="Type here" class="w-full max-w-xs input input-bordered" />
    </label>
    <label class="w-full max-w-xs form-control">
      <div class="label">
        <span class="label-text">Password baru</span>
      </div>
      <input type="password" name="password" placeholder="Type here" class="w-full max-w-xs input input-bordered" />
    </label>
    @error('password')
    <div class="text-red-600">{{$message}}</div>
    @enderror
    <label class="w-full max-w-xs form-control">
      <div class="label">
        <span class="label-text">Konfirmasi password baru</span>
      </div>
      <input type="password" name="conf-password" placeholder="Type here"
        class="w-full max-w-xs input input-bordered" />
    </label>
    @error('conf-password')
    <div class="text-red-600">{{$message}}</div>
    @enderror
    <button class="mt-4 btn btn-neutral">Ubah Password</button>
  </form>
</x-dashboard-layout>