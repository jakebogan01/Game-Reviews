{{$slot}}


<div id="userForm" class="bg-gray-500 absolute top-0 left-0 w-full h-full" style="display: none;">
    <div class="flex justify-center mt-28 mb-8 mx-2 md:mx-0">
        <div class="w-full sm:w-2/5 bg-white p-6 rounded-lg">
            <h1 class="text-center mb-6 text-2xl font-semibold">Update User </h1>
            <form action="{{ route('edit') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name:</label>
                    <input type="text" name="name" id="name" placeholder="{{ auth()->user()->name }}" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ strtolower(auth()->user()->name) }}">
                    <!-- error message if not valid -->
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username:</label>
                    <input type="text" name="username" id="username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{ strtolower(auth()->user()->username) }}">
                    <!-- error message if not valid -->
                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email:</label>
                    <input type="email" name="email" id="email" placeholder="{{ auth()->user()->email }}" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ strtolower(auth()->user()->email) }}">
                    <!-- error message if not valid -->
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- login button -->
                <div>
                    <button class="bg-blue-500 text-white px-4 py-3 rounded-lg font-medium w-full hover:bg-blue-600">Submit</button>
                </div>
            </form>
            <div>
                <a href="{{ route('admin') }}" class="bg-red-500 text-white px-4 block text-center py-3 mt-4 rounded-lg font-medium w-full hover:bg-red-600">Cancel</a>
            </div>
        </div>
    </div>
</div>


<script>
    let editUser = document.querySelector('#editUser');
    let userForm = document.querySelector('#userForm');

    editUser.addEventListener('click',()=>{
        userForm.style.display = "block";
    });
</script>