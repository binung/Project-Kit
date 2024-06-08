<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="flex flex-col justify-center items-center w-full h-[100vh] bg-[#282D2D] px-5">
    <div class="w-full p-5 rounded-md xl:max-w-3xl sm:p-10">
        <h1 class="text-xl font-semibold text-center text-white sm:text-3xl">
            Register for a free account
        </h1>
        <div class="w-full mt-8">
            <div class="flex flex-col max-w-xs gap-4 mx-auto sm:max-w-md md:max-w-lg">
                <form wire:submit.prevent="register">
                    <div class="flex flex-col gap-3 sm:flex-row">
                        <input
                            class="w-full px-5 py-3 text-sm font-medium text-black placeholder-gray-500 border-2 border-transparent rounded-lg focus:outline-none focus:border-2 focus:outline focus:border-white"
                            type="text" placeholder="Your name" wire:model="name" />
                        @error('name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                        <input
                            class="w-full px-5 py-3 text-sm font-medium text-black placeholder-gray-500 border-2 border-transparent rounded-lg focus:outline-none focus:border-2 focus:outline focus:border-white"
                            type="email" placeholder="Enter your email" wire:model="email" />
                        @error('eamil')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <input
                        class="w-full px-5 py-3 mt-4 text-sm font-medium text-black placeholder-gray-500 border-2 border-transparent rounded-lg focus:outline-none focus:border-2 focus:outline focus:border-white"
                        type="password" placeholder="Enter your password" wire:model="password" />
                    @error('password')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                    <input
                        class="w-full px-5 py-3 mt-4 text-sm font-medium placeholder-gray-500 border-2 border-transparent rounded-lg focus:outline-none focus:border-2 focus:outlinetext-black focus:border-white"
                        type="password" placeholder="Confirm your password" wire:model="password_confirmation" />
                    @error('password_confirmation')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                    <button type="submit"
                        class="mt-5 tracking-wide font-semibold bg-[#E9522C] text-gray-100 w-full py-4 rounded-lg hover:bg-[#E9522C]/90 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                        <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" strokeWidth="2"
                            strokeLinecap="round" strokeLinejoin="round">
                            <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                            <circle cx="8.5" cy="7" r="4" />
                            <path d="M20 8v6M23 11h-6" />
                        </svg>
                        <span class="ml-3">Register</span>
                    </button>
                </form>
                <p class="mt-6 text-xs text-center text-gray-600">
                    Already have an account?
                    <a href="/login" wire:navigate>
                        <span class="text-[#E9522C] font-semibold">Login</span>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

{{-- <div>
  <div class="flex flex-wrap w-full">
    <!-- Login Section -->
    <div class="flex flex-col w-1/2 pt-48 m-auto">
      <div class="flex flex-col justify-center px-8 pt-8 my-auto md:justify-start md:pt-0 md:px-24 lg:px-32">
        <p class="text-3xl text-center">Sign Up</p>
        <form class="flex flex-col pt-3 md:pt-8" wire:submit.prevent="register">
          <div class="flex flex-col pt-4">
            <label for="name" class="text-lg">Full Name</label>
            <input type="text" id="name" wire:model="name" placeholder="name" class="w-full px-3 py-3 mt-1 leading-tight text-gray-700 bg-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            @error('name')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
          </div>
          <div class="flex flex-col pt-4">
            <label for="email" class="text-lg">Email</label>
            <input type="email" id="email" wire:model="email" placeholder="your@email.com" class="w-full px-3 py-3 mt-1 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            @error('email')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
          </div>

          <div class="flex flex-col pt-4">
            <label for="password" class="text-lg">Password</label>
            <input type="password" id="password" wire:model="password" placeholder="Password" class="w-full px-3 py-3 mt-1 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            @error('password')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
          </div>
          <div class="flex flex-col pt-4">
            <label for="password_confirmation" class="text-lg">Password Confirmation</label>
            <input type="password" id="password_confirmation" wire:model="password_confirmation" placeholder="password confirmation" class="w-full px-3 py-3 mt-1 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            @error('password_confirmation')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
          </div>
          <input type="submit" value="Sign Up" class="p-2 mt-8 text-lg font-bold text-white bg-black cursor-pointer hover:bg-gray-700">
        </form>
        <div class="pt-12 pb-12 text-center">
          <p>Already have an account? <a href="/login" class="font-semibold underline" wire:navigate>Log in</a></p>
        </div>
      </div>
    </div>
  </div>
</div> --}}
