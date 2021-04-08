<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white pb-4 px-4 rounded-md w-full">
                    <div class="flex justify-between w-full pt-6 ">
                        <a href="{{route('post.create')}}" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Users Table
                        </a>
                    </div>
                    <div class="overflow-x-auto mt-6">
                        @if (count($posts) > 0)
                        <table class="table-auto border-collapse w-full">
                            <thead>
                            <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                                <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">Title</th>
                                <th class="px-4 py-2 " style="background-color:#f8f8f8"></th>
                            </tr>
                            </thead>
                            <tbody class="text-sm font-normal text-gray-700">
                                @foreach ($posts as $post)
                                    <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                                        <td class="px-4 py-4">
                                            <a href="{{route('post.edit',[$post])}}" class="font-medium text-indigo-600 hover:text-indigo-500">{{$post->title}}</a>
                                        </td>
                                        <td class="px-4 py-4">
                                            <a href="{{route('post.edit',[$post])}}" class="font-medium text-red-700 hover:text-red-500">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>

                <style>

                    thead tr th:first-child { border-top-left-radius: 10px; border-bottom-left-radius: 10px;}
                    thead tr th:last-child { border-top-right-radius: 10px; border-bottom-right-radius: 10px;}

                    tbody tr td:first-child { border-top-left-radius: 5px; border-bottom-left-radius: 0px;}
                    tbody tr td:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 0px;}

                </style>

            </div>
        </div>
    </div>

</x-app-layout>
