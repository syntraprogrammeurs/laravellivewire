<div class="flex flex-col items-center justify-center h-screen">
    <div class="flex flex-col items-start">
        <form wire:submit="add">
            <div class="flex items-center">
                <div class="relative">
                    <label for="task" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Task</label>
                    <input wire:model="task" type="text" name="task" id="task" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Task">
                </div>
                <button type="submit" class="ml-4 rounded-full bg-indigo-600 p-1.5 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 offset-2 focus-visible:outline-indigo-600">
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">                    <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                    </svg>
                </button>
            </div>
            <ul>
                @foreach($tasks as $task)
                    <li class="py-1 px-2 bg-white border-b border-gray-200 w-full rounded-md text-gray-700 hover:bg-gray-50"> {{$task}}
                    </li>
                @endforeach
            </ul>
        </form>
    </div>
</div>
