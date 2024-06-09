<x-app-layout>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-24 sm:py-6">
        <a href="{{ route('note.create') }}" class="flex justify-center items-center bg-blue-500 text-white font-bold py-2 px-6 rounded">
            New Note
        </a>
        <div class="flex flex-wrap -m-4">
            @foreach($notes as $note)
                <div class="w-full  md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg">
                        {{ \Illuminate\Support\Str::words($note->note, 100) }}
                    </div>
                    <div class="flex justify-between">
                        <a href="{{ route('note.show', $note) }}" class="inline-flex items-center rounded-md bg-blue-600 px-6 py-2 text-s font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View</a>
                        <a href="{{ route('note.edit', $note) }}" class="inline-flex items-center rounded-md bg-blue-600 px-6 py-2 text-s font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST" >
                            @csrf
                            @method('DELETE')
                            <button class="inline-flex items-center rounded-md bg-gray-50 px-6 py-2 text-s font-semibold text-gray-600 ring-1 ring-inset ring-gray-500/10">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach

        </div>
        {{ $notes->links() }}
    </div>
</x-app-layout>
