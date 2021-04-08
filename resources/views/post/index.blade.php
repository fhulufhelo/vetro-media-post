<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="bg-white max-w-lg w-full rounded-lg shadow-lg p-4 mt-2">
                    <h3 class="font-semibold text-lg tracking-wide">
                        {{$post->title}}
                    </h3>
                    <p class="text-gray-500 my-1 truncate">
                        {{$post->body}}
                    </p>
                    <div class="mt-2">
                        <a href="{{route('post.show',[$post])}}" class="text-blue-700  inline-flex items-center font-semibold tracking-wide">
                            <span class="hover:underline">Continue to read</span>
                            <span class="text-xl ml-2">&#8594;</span>
                        </a>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </div>
</x-guest-layout>
