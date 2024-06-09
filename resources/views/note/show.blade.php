<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Note: {{ $note->created_at }}
        </h2>
    </x-slot>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-24 sm:py-6">
        <div class="bg-white rounded-lg  py-6 sm:px-6 lg:px-8 ">
            {{ $note->note }}
        <div class="flex justify-between ">
            <a href="{{ route('note.edit', $note) }}"
               class="inline-flex items-center rounded-md bg-blue-600 px-6 py-2 text-s font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
            <form action="{{ route('note.destroy', $note) }}" method="POST" class="note">
                @csrf
                @method('DELETE')
                <button
                    class="inline-flex items-center rounded-md bg-gray-50 px-6 py-2 text-s font-semibold text-gray-600 ring-1 ring-inset ring-gray-500">
                    Delete
                </button>
            </form>
        </div>
    </div>
    </div>
</x-app-layout>
