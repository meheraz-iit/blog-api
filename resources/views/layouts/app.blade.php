<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Blog App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Navigation Bar -->
    <nav class="bg-gray-900 text-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="text-xl font-bold tracking-wide">
                    <a href="/app" class="text-blue-400">Blog<span class="text-white">API</span></a>
                </div>
                <div class="flex space-x-4">
                    <a href="/app" class="px-3 py-2 rounded-md font-medium hover:bg-gray-700 transition {{ Request::is('app') ? 'bg-blue-600 hover:bg-blue-600' : '' }}">
                        My Blogs (Manage API)
                    </a>
                    <a href="/external-blogs" class="px-3 py-2 rounded-md font-medium hover:bg-gray-700 transition {{ Request::is('external-blogs') ? 'bg-blue-600 hover:bg-blue-600' : '' }}">
                        External Blogs (API Fetch)
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Dynamic Content Area -->
    <main class="p-8 max-w-6xl mx-auto">
        @yield('content')
    </main>

</body>
</html>