<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">

    <div class="flex flex-col items-center pt-16">

        <h1 class="text-2xl font-semibold mb-8">
            Create User
        </h1>

        @if ($errors->any())
            <div class="w-full max-w-md mb-6 px-5 py-4 border border-gray-300 rounded-md bg-gray-50">
                <ul class="text-sm text-gray-700 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form
            method="POST"
            action="{{ route('user.store') }}"
            class="w-full max-w-md"
        >

            @csrf

            <div class="mb-5">
                <label
                    for="name"
                    class="block mb-2 text-sm font-medium"
                >
                    Name
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name') }}"
                    required
                    class="w-full px-4 py-3 border border-gray-400 rounded-md outline-none focus:border-black"
                >
            </div>

            <div class="mb-5">
                <label
                    for="email"
                    class="block mb-2 text-sm font-medium"
                >
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    required
                    class="w-full px-4 py-3 border border-gray-400 rounded-md outline-none focus:border-black"
                >
            </div>

            <div class="mb-5">
                <label
                    for="password"
                    class="block mb-2 text-sm font-medium"
                >
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    id="password"
                    required
                    class="w-full px-4 py-3 border border-gray-400 rounded-md outline-none focus:border-black"
                >
            </div>

            <div class="mb-6">
                <label
                    for="password_confirmation"
                    class="block mb-2 text-sm font-medium"
                >
                    Confirm Password
                </label>

                <input
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    required
                    class="w-full px-4 py-3 border border-gray-400 rounded-md outline-none focus:border-black"
                >
            </div>

            <button
                type="submit"
                class="px-5 py-2.5 bg-black text-white rounded-md text-sm hover:bg-gray-800"
            >
                Create User
            </button>

        </form>

    </div>

</body>
</html>