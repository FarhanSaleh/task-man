<x-dashboard-layout>
    <h1 class="mb-6 text-2xl font-semibold">Hello, Username</h1>
    <div class="flex gap-4">
        <div class="flex-1 shadow stats">
            <div class="stat">
                <div class="w-8 stat-figure text-primary">
                    
                </div>
                <div class="stat-title">Total Tugas</div>
                <div class="stat-value text-primary">5</div>
                {{-- <div class="stat-desc">21% more than last month</div> --}}
            </div>
        </div>
        <div class="flex-1 shadow stats">
            <div class="stat">
                <div class="w-8 stat-figure text-accent">
                    
                </div>
                <div class="stat-title">Tugas Selesai</div>
                <div class="stat-value text-accent">2</div>
                {{-- <div class="stat-desc">21% more than last month</div> --}}
            </div>
        </div>
        <div class="flex-1 shadow stats">
            <div class="stat">
                <div class="stat-figure text-secondary">
                    
                </div>
                <div class="stat-title">Tugas Belum Selesai</div>
                <div class="stat-value text-secondary">2</div>
                {{-- <div class="stat-desc">21% more than last month</div> --}}
            </div>
        </div>
        <div class="flex-1 shadow stats">
            <div class="stat">
                <div class="stat-figure text-secondary">
                    <div class="avatar online">
                        <div class="w-16 rounded-full">
                            {{-- <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" alt=""/> --}}
                        </div>
                    </div>
                </div>
                <div class="stat-value">86%</div>
                <div class="stat-title">Tasks done</div>
                <div class="stat-desc text-secondary">31 tasks remaining</div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-between mt-6">
        <h1 class="text-2xl font-semibold">Tugas Terdekat</h1>
        <a href="/task" class="link link-primary">Lihat Lebih</a>
    </div>
    <div class="grid grid-cols-3 gap-4 mt-6">
        <div class="w-auto shadow card bg-base-100">
            <div class="gap-3 card-body">
                <div class="px-4 py-2 border-l-4 rounded border-secondary">
                    <h2 class="card-title line-clamp-1">Judul Tugas</h2>
                </div>
                <div>
                    <div class="text-sm">Deadline</div>
                    <div class="text-sm font-semibold">{{date('j F Y')}}</div>
                </div>
                <p class="line-clamp-3">deskripsi tugas nantinya</p>
                <div class="justify-end card-actions">
                    <button class="btn btn-outline">Detail</button>
                    <button class="btn btn-outline btn-primary">Selesaikan</button>
                </div>
            </div>
        </div>
        <div class="w-auto shadow card bg-base-100">
            <div class="gap-3 card-body">
                <div class="px-4 py-2 border-l-4 rounded border-secondary">
                    <h2 class="card-title line-clamp-1">Judul Tugas</h2>
                </div>
                <div>
                    <div class="text-sm">Deadline</div>
                    <div class="text-sm font-semibold">{{date('j F Y')}}</div>
                </div>
                <p class="line-clamp-3">deskripsi tugas nantinya</p>
                <div class="justify-end card-actions">
                    <button class="btn btn-outline">Detail</button>
                    <button class="btn btn-outline btn-primary">Selesaikan</button>
                </div>
            </div>
        </div>
        <div class="w-auto shadow card bg-base-100">
            <div class="gap-3 card-body">
                <div class="px-4 py-2 border-l-4 rounded border-secondary">
                    <h2 class="card-title line-clamp-1">Judul Tugas</h2>
                </div>
                <div>
                    <div class="text-sm">Deadline</div>
                    <div class="text-sm font-semibold">{{date('j F Y')}}</div>
                </div>
                <p class="line-clamp-3">deskripsi tugas nantinya</p>
                <div class="justify-end card-actions">
                    <button class="btn btn-outline">Detail</button>
                    <button class="btn btn-outline btn-primary">Selesaikan</button>
                </div>
            </div>
        </div>
    </div>
    
</x-dashboard-layout>
