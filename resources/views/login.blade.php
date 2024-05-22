<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silahkan Login ke IOT PANEL</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Navigation bar -->
    <nav class="bg-white shadow dark:bg-gray-800">
        <div class="container px-6 py-4 mx-auto">
            <div class="flex items-center justify-between">
                <div>
                    <a class="text-xl font-bold text-gray-800 dark:text-white lg:text-2xl hover:text-gray-700 dark:hover:text-gray-300"
                        href="#">IOT PANEL</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content section -->
    <div class="container px-6 py-8 mx-auto">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full p-4 px-6 py-10">
                    <h1 class="text-2xl font-semibold text-gray-800 mb-4">Silahkan Login ke IOT PANEL</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mt-4">
                            <label for="email" class="block text-gray-700">Email Address</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                autocomplete="email" class="form-input mt-1 block w-full">
                        </div>

                        <div class="mt-4">
                            <label for="password" class="block text-gray-700">Password</label>
                            <input id="password" type="password" name="password" required autocomplete="current-password"
                                class="form-input mt-1 block w-full">
                        </div>

                        <div class="mt-6">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
