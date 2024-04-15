<tr>
    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
        {{$post->title }}
    </td>
    <td class="whitespace-nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
        {{Str::limit($post->content,50)}}
    </td>
    <td>
        <button wire:click="$parent.delete({{$post->id}})" wire:confirm="Are you sure you want to delete?" type="button" class="ml-4 rounded bg-indigo-600 p-1.5 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 offset-2 focus-visible:outline-indigo-600">
            DEL
        </button>
    </td>
</tr>
