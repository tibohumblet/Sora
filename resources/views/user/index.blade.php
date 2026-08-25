<!DOCTYPE html>
<html>
<head>
    <title>Users</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">

    <div class="flex flex-col items-center pt-16">

        <h1 class="text-2xl font-semibold mb-6">
            Users
        </h1>

        @if (session('success'))
            <div class="mb-6 px-5 py-3 border border-gray-300 rounded-md bg-gray-50 text-sm text-gray-700">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-6 flex items-center gap-4">

            <a
                href="{{ route('user.create') }}"
                class="px-5 py-2.5 border border-black bg-black text-white rounded-md text-sm hover:bg-gray-800"
            >
                Create User
            </a>

        </div>

        <table class="border border-gray-400 border-collapse">

            <thead>
                <tr>
                    <th class="px-8 py-4 border border-gray-400 text-left">
                        ID
                    </th>

                    <th class="px-8 py-4 border border-gray-400 text-left">
                        Name
                    </th>

                    <th class="px-8 py-4 border border-gray-400 text-left">
                        Email
                    </th>

                    <th class="px-8 py-4 border border-gray-400 text-left">
                        Delete
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>

                        <td class="px-8 py-4 border border-gray-400">
                            {{ $user->id }}
                        </td>

                        <td class="px-8 py-4 border border-gray-400">
                            {{ $user->name }}
                        </td>

                        <td class="px-8 py-4 border border-gray-400">
                            {{ $user->email }}
                        </td>

                        <td class="px-8 py-4 border border-gray-400">
                            <form
                                method="POST"
                                action="{{ route('user.destroy', $user) }}"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="text-sm underline hover:no-underline"
                                >
                                    Delete
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</body>
</html>