<div class="mt-32 sm:px-6 lg:px-8">
    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle">
                <table class="min-w-full border-separate border-spacing-0">
                    <thead>
                    <tr>
                        <th scope="col"
                            class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                            Title
                        </th>
                        <th scope="col"
                            class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">
                            Content
                        </th>
                        <th scope="col"
                            class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                       <livewire:post-row :post="$post" :key="$post->id"/>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
