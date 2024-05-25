<x-root-layout title="login">
    <div class="flex items-center justify-center h-screen bg-base-200">
        <div class="w-1/3 shadow card bg-base-100">
            <div class="gap-4 card-body">
              <h1 class="text-3xl font-bold card-title">Login</h1>
              <p>Selamat datang di task-man</p>
              <form action="{{route('login')}}" method="post">
                @csrf
                <label class="w-full form-control">
                    <div class="label">
                      <span class="label-text">Email</span>
                    </div>
                    <input type="email" name="email" placeholder="Masukkan Email Anda" class="w-full input input-bordered" value="{{old('email')}}"/>
                </label>
                @error('email')
                    <div class="text-red-600">{{$message}}</div>
                @enderror
                <label class="w-full form-control">
                    <div class="label">
                      <span class="label-text">Password</span>
                    </div>
                    <input type="password" name="password" placeholder="Masukkan Password Anda" class="w-full input input-bordered" />
                </label>
                @error('password')
                    <div class="text-red-600">{{$message}}</div>
                @enderror
                <label class="w-full form-control">
                    <div class="label">
                      <span class="label-text">Login sebagai?</span>
                    </div>
                    <select class="select select-bordered" name="role">
                      <option value="0">Member</option>
                      <option value="1">Admin</option>
                    </select>
                </label>
                <div class="justify-center card-actions">
                  <button type="submit" class="w-full mt-6 btn btn-primary">Login</button>
                  <a href="/register" class="link link-primary">Register</a>
                </div>
              </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      @if(session('success'))
          Swal.fire({
              icon: "success",
              title: "BERHASIL",
              text: "{{session('success')}}",
              showConfirmButton: false,
              timer: 2000
          })
      @elseif(session('error'))
          Swal.fire({
              icon: "error",
              title: "GAGAL!",
              text: "{{session('error')}}",
              showConfirmButton: false,
              timer: 2000
          })
      @endif
  </script>
</x-root-layout>
