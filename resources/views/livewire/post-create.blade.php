<div class="flex min-h-full items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
    <div class="w-full max-w-sm space-y-10">
        <div><img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                  alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create a Post</h2>
        </div>
        <form wire:submit="save" class="space-y-6" action="#" method="POST">
            <div class="relative -space-y-px rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-0 z-10 rounded-md ring-1 ring-inset ring-gray-300"></div>
                <div><label for="title" class="sr-only">Title</label> <input wire:model="title" id="title" name="email"
                                                                             type="title" autocomplete="title" required
                                                                             class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-100 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                                             placeholder="Title"></div>
            </div>
            @error('title') <em>{{$message}}</em>  @enderror
            <div><label for="content" class="sr-only" class="block text-sm font-medium leading-6 text-gray-900">Add your
                    content</label>
                <div class="mt-2"><textarea wire:model="content" rows="4" name="content" id="content"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            placeholder="Content"></textarea>
                    <small>
                        Characters:
                        <span x-text="$wire.content.split(' ').length"></span>
                    </small>
                    @error('content') <em>{{$message}}</em>  @enderror


                </div>
            </div>
            <div>
                <button wire:click="save" type="button"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Create Post
                </button>
            </div>
        </form>
    </div>
</div>

