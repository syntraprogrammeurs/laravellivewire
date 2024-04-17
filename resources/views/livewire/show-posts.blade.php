<div class="flex flex-col gap-8 min-w-[40rem]"><h1 class="text-3xl font-semibold leading-6 text-slate-900">Blog
        Posts</h1>
    <div class="shadow rounded-xl overflow-hidden bg-white">
        <table class="min-w-full divide-y divide-slate-300">
            <thead class="bg-slate-50 py-2">
            <tr class="text-left text-slate-800 font-semibold">
                <th class="pl-6 py-4">Title</th>
                <th class="pl-4 py-4">Content</th>
                <th class="pl-4"></th>
            </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
            @foreach ($posts as $post)
                <tr class="text-left text-slate-900">
                    <td class="pl-6 py-4 pr-3 font-medium">{{ $post->title }}</td>
                    <td class="pl-4 py-4 text-left text-slate-500">{{ str($post->content)->limit(50) }}</td>
                    <td class="pl-4 py-4 text-right pr-6">
                        <button class="font-medium text-red-600" wire:click="delete({{$post}})">DEL</button>
                    </td>
                </tr>
            @endforeach            </tbody>
        </table>
    </div>
</div>

