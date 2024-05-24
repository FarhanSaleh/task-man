<x-dashboard-layout>
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
</x-dashboard-layout>
