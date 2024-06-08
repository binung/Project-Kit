<section class="w-full pt-12 bg-gray-100">
    <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <h1 class="font-bold pl-2">Create New Project</h1>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="flex flex-col items-center w-full px-5">
                <div class="w-full p-5 rounded-md xl:max-w-3xl sm:p-10">
                    <h1 class="text-xl font-semibold text-center text-black sm:text-3xl">
                        Create New Project
                    </h1>
                    <div class="w-full mt-8">
                        <div class="flex flex-col max-w-xs gap-4 mx-auto sm:max-w-md md:max-w-lg">
                            <form wire:submit.prevent="store">
                                <input
                                    class="w-full px-5 py-3 mt-4 text-sm font-medium text-black placeholder-gray-500 border-2 border-transparent rounded-lg focus:outline-none focus:border-2 focus:outline focus:border-white"
                                    type="text" placeholder="Title" wire:model="title" />
                                @error('title')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                                <input
                                    class="w-full px-5 py-3 mt-4 text-sm font-medium placeholder-gray-500 border-2 border-transparent rounded-lg focus:outline-none focus:border-2 focus:outlinetext-black focus:border-white"
                                    type="text" placeholder="Description" wire:model="description" />
                                @error('description')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                                <input
                                    class="w-full px-5 py-3 mt-4 text-sm font-medium placeholder-gray-500 border-2 border-transparent rounded-lg focus:outline-none focus:border-2 focus:outlinetext-black focus:border-white"
                                    type="text" placeholder="Skill" wire:model="skill" />
                                @error('skill')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror

                                <button type="submit"
                                    class="mt-5 tracking-wide font-semibold bg-[#E9522C] text-gray-100 w-full py-4 rounded-lg hover:bg-[#E9522C]/90 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                    <svg class="h-4 w-8 text-white" width="24" height="24" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M21 3L14.5 21a.55 .55 0 0 1 -1 0L10 14L3 10.5a.55 .55 0 0 1 0 -1L21 3" />
                                    </svg>
                                    <span class="ml-1">Save</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
