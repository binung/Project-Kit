<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="flex flex-col justify-center items-center w-full h-[100vh] bg-[#282D2D] px-5">
    <div class="w-full p-5 rounded-md xl:max-w-3xl sm:p-10">
        <h1 class="text-xl font-semibold text-center text-white sm:text-3xl">
            Log In
        </h1>
        <div class="w-full mt-8">
            <div class="flex flex-col max-w-xs gap-4 mx-auto sm:max-w-md md:max-w-lg">
                <form wire:submit.prevent="login">
                    <input
                        class="w-full px-5 py-3 mt-4 text-sm font-medium text-black placeholder-gray-500 border-2 border-transparent rounded-lg focus:outline-none focus:border-2 focus:outline focus:border-white"
                        type="email" placeholder="Enter your email" wire:model="form.email" />
                    @error('password')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                    <input
                        class="w-full px-5 py-3 mt-4 text-sm font-medium placeholder-gray-500 border-2 border-transparent rounded-lg focus:outline-none focus:border-2 focus:outlinetext-black focus:border-white"
                        type="password" placeholder="Confirm your password" wire:model="form.password" />
                    @error('password_confirmation')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                    <button type="submit"
                        class="mt-5 tracking-wide font-semibold bg-[#E9522C] text-gray-100 w-full py-4 rounded-lg hover:bg-[#E9522C]/90 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                        <svg class="w-6 h-6 -m1-2" fill="none" stroke="currentColor" strokeWidth="2" fill="none"
                            strokeLinecap="round" strokeLinejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                            <path d="M20 12h-13l3 -3m0 6l-3 -3" />
                        </svg>
                        <span class="ml-3">LogIn</span>
                    </button>
                </form>
                <p class="mt-6 text-xs text-center text-gray-600">
                    Don't have an account?
                    <a href="/register" wire:navigate>
                        <span class="text-[#E9522C] font-semibold">Register</span>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

{{-- <div>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex flex-wrap w-full">
        <!-- Login Section -->
        <div class="flex flex-col w-1/2 pt-48 m-auto">
            <div class="flex flex-col justify-center px-8 pt-8 my-auto md:justify-start md:pt-0 md:px-24 lg:px-32">
                <p class="text-3xl text-center">Log In</p>
                <form class="flex flex-col pt-3 md:pt-8" wire:submit.prevent="login">
                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Email</label>
                        <input type="email" id="email" wire:model="form.email" placeholder="your@email.com"
                            class="w-full px-3 py-3 mt-1 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        @error('form.email')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Password</label>
                        <input type="password" id="password" wire:model="form.password" placeholder="Password"
                            class="w-full px-3 py-3 mt-1 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        @error('form.password')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="block mt-4">
                        <label for="remember" class="inline-flex items-center">
                            <input wire:model="form.remember" id="remember" type="checkbox"
                                class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <input type="submit" value="Login"
                        class="p-2 mt-8 text-lg font-bold text-white bg-black cursor-pointer hover:bg-gray-700">
                </form>
                <div class="pt-12 pb-12 text-center">
                    <p>Don't have an account? <a href="/register" class="font-semibold underline" wire:navigate>Sign
                            up</a></p>
                </div>
            </div>
        </div>
    </div>
</div> --}}
