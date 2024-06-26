<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm"><img class="mx-auto h-10 w-auto"
                                                       src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                                       alt="Your Company"></div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm p-6 shadow-2xl rounded-2xl"><h2
            class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Edit Profile</h2>
        <form wire:submit="save" class="space-y-6" action="#" method="POST">
            <div><label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                <div class="mt-2">
                    <input
                        wire:model.blur="form.name" id="name" name="name" type="text" autocomplete="name"
                        @class(['block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6',
                            'ring-gray-300'=>$errors->missing('form.name'),
                            'ring-red-500'=>$errors->has('form.name')])
                    >
                    @error('form.name')
                    <p class="text-sm text-red-500">{{$message}}</p>
                    @enderror

                </div>
            </div>
            <div><label for="content" class="block text-sm font-medium leading-6 text-gray-900">Content</label>
                <div class="mt-2"><textarea wire:model="form.content" rows="4" name="content" id="content"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300                    placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            placeholder=" Content"></textarea></div>
            </div>
            <div><label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                <div class="mt-2">
                    <select
                        wire:model.blur="form.country" id="country" name="country" type="text" autocomplete="country"
                    @class(['block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6',
                        'ring-gray-300'=>$errors->missing('form.country'),
                        'ring-red-500'=>$errors->has('form.country')])

                    @error('form.country')
                    <p class="text-sm text-red-500">{{$message}}</p>
                    @enderror
                    >
                    <option value="" selected disabled>Choose your country</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="USA">USA</option>
                    <option value="Germany">Germany</option>
                    </select>
                </div>
            </div>
            <div><label for="emails" class="block text-sm font-medium leading-6 text-gray-900">Email?</label>
                <div class="flex gap-6">
                    <label class="flex items-center gap-2">
                        <input wire:model.boolean="form.emails" type="radio" name="emails" value="true" class="size-4">Yes
                    </label>
                    <label class="flex items-center gap-2">
                        <input wire:model.boolean="form.emails" type="radio" name="emails" value="false" class="size-4">No
                    </label>
                </div>
            </div>
            <div x-show="$wire.form.emails"><label for="choice"
                                                   class="block text-sm font-medium leading-6 text-gray-900">Choices?</label>
                <div class="flex gap-6">
                    <label class="flex items-center gap-2">
                        <input wire:model.boolean="form.newsletter" type="checkbox" name="newsletter"
                               class="size-4 rounded">Newsletter
                    </label>
                    <label class="flex items-center gap-2">
                        <input wire:model.boolean="form.marketing" type="checkbox" name="marketing"
                               class="size-4 rounded">Marketing
                    </label>
                </div>
            </div>
            <div class="flex items-center justify-between my-4">
                    <span class="text-sm font-medium text-gray-700">
                        Gender: {{$form->gender ? 'Female': 'Male'}}</span>
                </span>

                <label class="inline-flex items-center cursor-pointer">
                    <input wire:model.boolean="form.gender" wire:change="$refresh" type="checkbox" class="sr-only peer">
                    <div
                        class="relative w-11 h-6 bg-blue-600 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-blue-500 peer-checked:bg-pink-600 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600"></div>
                </label>
            </div>
                <x-modal wire:model="showModal">
                    <x-modal.button>
                        <button type="button" class="underline text-blue-500">
                            terms of service
                        </button>
                        <button wire:click="openModal" type="button" class="underline text-blue-500">
                            terms of service2
                        </button>
                    </x-modal.button>
                    <x-modal.panel>
                        <h2 class="text-2xl font-bold text-slate-900">Terms Of Service</h2>
                        <div class="mt-5 text-gray-600">
                            <h3
                                class="font-bold text-lg text-slate-800 mt-4">Acceptance of Terms</h3>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Accusantium ad architecto blanditiis delectus dolores eius eveniet
                                impedit ipsa itaque labore, maiores nemo numquam placeat porro quod
                                vitae voluptatem! Nulla, vero!</p>
                            <h3 class="font-bold text-lg text-slate-800 mt-4">Changes to Terms</h3>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Accusantium blanditiis eos fuga fugit maxime officiis perferendis
                                sapiente voluptates voluptatum! Consectetur dolor facere libero nobis
                                recusandae saepe sapiente, ut. Dolor, quisquam.</p>
                        </div>
                    </x-modal.panel>
                </x-modal>
            <div>

                <div>
                    <button type="submit"
                            class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-white bg-indigo-500 hover:bg-indigo-400 transition ease-in-out duration-150 disabled:cursor-not-allowed">
                        <svg wire:loading wire:target="save" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Save
                    </button>

                </div>

        </form>
        {{--        @if($showSuccess)--}}
        {{--            <div class="flex justify-end gap-2 items-center text-indigo-500 text-sm font-medium"> Profile updated!--}}
        {{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"--}}
        {{--                     stroke="currentColor" class="w-6 h-6">--}}
        {{--                    <path stroke-linecap="round" stroke-linejoin="round"--}}
        {{--                          d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>--}}
        {{--                </svg>--}}
        {{--            </div>--}}
        {{--        @endif--}}
        <div
            x-show="$wire.showSuccess"
            x-effect="if($wire.showSuccess) setTimeout(()=>$wire.showSuccess=false,3000)"
            x-transition.out.opacity.duration.2000ms
            class="flex justify-end gap-2 items-center text-indigo-500 text-sm font-medium"> Profile updated!
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
        </div>

    </div>
</div>
