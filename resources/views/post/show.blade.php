<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white max-w-full w-full rounded-lg shadow-lg p-4 mt-2">
                <div>
                    <livewire:post-rating :post="$post" />
                </div>
                <h3 class="font-semibold text-lg tracking-wide">
                    {{$post->title}}
                </h3>
                <p class="text-gray-500 my-1">
                    {{$post->body}}
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
