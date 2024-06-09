<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit your note
        </h2>
    </x-slot>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-24 sm:py-6">
        <form action="{{ route('note.update', $note) }}" method="POST" class="bg-white p-6 rounded-lg">
            @csrf
            @method('PUT')
            <label>
                <textarea name="note" rows = "10" class="px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter your note">{{ $note->note }}</textarea>
            </label>
            <div>
                <a href="{{ route('note.index') }}" class="inline-flex items-center rounded-md bg-gray-50 px-6 py-2 text-s font-semibold text-gray-600 ring-1 ring-inset ring-gray-500">Cancel</a>
                <button class="inline-flex items-center rounded-md bg-blue-600 px-6 py-2 text-s font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
            </div>

        </form>
    </div>
</x-app-layout>
