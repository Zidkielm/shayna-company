<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit About') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-3xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white p-10 shadow-sm sm:rounded-lg">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="w-full rounded-3xl bg-red-500 py-3 text-white">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action=" {{ route('admin.abouts.update', $about) }} " enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="mt-1 block w-full" type="text" name="name"
                            value="{{ $about->name }}" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="thumbnail" :value="__('thumbnail')" />
                        <img src=" {{ Storage::url($about->thumbnail) }} " alt=""
                            class="h-[90px] w-[90px] rounded-2xl object-cover">
                        <x-text-input id="thumbnail" class="mt-1 block w-full" type="file" name="thumbnail" autofocus
                            autocomplete="thumbnail" />
                        <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="type" :value="__('type')" />

                        <select name="type" id="type"
                            class="w-full rounded-lg border border-slate-300 py-3 pl-3">
                            <option value="Visions">Visions</option>
                            <option value="Missions">Missions</option>
                        </select>

                        <x-input-error :messages="$errors->get('type')" class="mt-2" />
                    </div>

                    <h3 class="mt-4 text-lg font-bold text-indigo-950">Keypoints</h3>

                    <div class="mt-4">

                        <div class="flex flex-col gap-y-5">
                            <x-input-label for="keypoints" :value="__('keypoints')" />
                            @forelse ($about->keypoints as $keypoint )
                            <input type="text" class="rounded-lg border border-slate-300 py-3" value="{{ $keypoint->keypoint }}"
                                name="keypoints[]">
                                @empty
                                @endforelse
                        </div>
                        <x-input-error :messages="$errors->get('keypoint')" class="mt-2" />
                    </div>

                    <div class="mt-4 flex items-center justify-end">

                        <button type="submit" class="rounded-full bg-indigo-700 px-6 py-4 font-bold text-white">
                            Update About
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
