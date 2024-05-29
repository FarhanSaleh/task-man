@props(['label', 'task', 'id'])
<div>
    <button class="link link-primary" onclick="my_modal_{{ $id }}.showModal()">
        Edit Tugas
    </button>
    <dialog id="my_modal_{{ $id }}" class="modal">
        <div class="max-w-2xl modal-box">
            <form method="dialog">
                <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">
                    ✕
                </button>
            </form>
            <h3 class="text-lg font-bold">Edit Tugas</h3>
            <p class="py-4">Silahkan isi form dibawah</p>
            <form action="{{route('task.update', $task->id)}}" method="POST">
                @csrf @method('PUT')
                <div class="flex gap-4">
                    <label class="w-full form-control">
                        <div class="label">
                            <span class="label-text">Judul</span>
                        </div>
                        <input type="text" name="title" placeholder="Type here" class="w-full input input-bordered" value="{{old('title', $task->title)}}" />
                        @error('title')
                        <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </label>
                    <label class="w-full form-control">
                        <div class="label">
                            <span class="label-text">Label</span>
                        </div>
                        <select class="select select-bordered" name="label">
                            <option disabled selected>Pilih Label</option>
                            @foreach ($label as $item)
                            <option value="{{$item->id}}">
                                {{$item->title}}
                            </option>
                            @endforeach
                        </select>
                        @error('label')
                        <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </label>
                </div>
                <div class="flex gap-4">
                    <label class="w-full form-control">
                        <div class="label">
                            <span class="label-text">Deadline</span>
                        </div>
                        <input type="date" name="deadline" class="w-full input input-bordered" value="{{old('deadline', $task->deadline)}}" />
                        @error('deadline')
                        <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </label>
                    <label class="w-full form-control">
                        <div class="label">
                            <span class="label-text">Prioritas</span>
                        </div>
                        <select class="select select-bordered" name="priority">
                            <option disabled selected value="0">
                                Pilih Prioritas
                            </option>
                            <option value="1">Biasa</option>
                            <option value="2">Penting</option>
                            <option value="3">Sangat Penting</option>
                        </select>
                        @error('priority')
                        <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </label>
                </div>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Deskripsi</span>
                    </div>
                    <textarea class="h-24 textarea textarea-bordered" name="description" placeholder="Isi deskripsi tugas anda">{{old('description', $task->description)}}</textarea>
                </label>
                <div class="modal-action">
                    <button type="submit" class="text-white btn btn-success">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
</div>