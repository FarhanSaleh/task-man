<x-root-layout title="register">
    <div class="flex items-center justify-center h-screen bg-base-200">
        <div class="w-1/3 shadow card bg-base-100">
            <div class="gap-4 card-body">
              <h1 class="text-3xl font-bold card-title">Register</h1>
              <p>Daftarkan akun anda sekarang</p>
              <form action="">
                <label class="w-full form-control">
                    <div class="label">
                      <span class="label-text">Username</span>
                    </div>
                    <input type="text" placeholder="Masukkan Username Anda" class="w-full input input-bordered" />
                </label>
                <label class="w-full form-control">
                    <div class="label">
                      <span class="label-text">Email</span>
                    </div>
                    <input type="email" placeholder="Masukkan Email Anda" class="w-full input input-bordered" />
                </label>
                <label class="w-full form-control">
                    <div class="label">
                      <span class="label-text">Password</span>
                    </div>
                    <input type="password" placeholder="Masukkan Password Anda" class="w-full input input-bordered" />
                </label>
                <label class="w-full form-control">
                    <div class="label">
                      <span class="label-text">Confirm Password</span>
                    </div>
                    <input type="password" placeholder="Konfirmasi Password Anda" class="w-full input input-bordered" />
                </label>
                <div class="justify-center card-actions">
                  <button type="submit" class="w-full mt-6 btn btn-primary">Register</button>
                  <a href="/login" class="link link-primary">Login</a>
                </div>
              </form>
            </div>
        </div>
    </div>
</x-root-layout>
