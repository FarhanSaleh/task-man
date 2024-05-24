<x-root-layout title="dashboard">
    <div class="flex bg-base-200">
        <x-sidebar />
        <div class="w-full">
            <x-navbar />
            <div class="px-8 py-6">
                {{$slot}}
            </div>
        </div>
    </div>
</x-root-layout>
