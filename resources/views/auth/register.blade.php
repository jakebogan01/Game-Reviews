<x-app-layout title="Register">

<!--
start register form***
-->
    <div class="flex justify-center mt-28 mb-8 mx-2 md:mx-0">
        <div class="w-full sm:w-8/12 md:w-4/12 bg-white p-6 rounded-lg">
            <h1 class="text-center mb-6 text-2xl font-semibold">Register</h1>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                    <!-- error message if not validated -->
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                    <!-- error message if not validated -->
                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    <!-- error message if not validated -->
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="{{ old('password') }}">
                    <!-- error message if not validated -->
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                <!-- register button -->
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded-lg font-medium w-full hover:bg-blue-600">Register</button>
                </div>
            </form>
        </div>
    </div>
<!--
end register form***
-->

</x-app-layout>