<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="p-5 m-0 bg-gray-800 flex flex-row justify-between">
        {{-- brand/sidebar-header --}}
        <div class="bg-purple-500/75 basis-1/4">
            <h1 class="text-2xl text-gray p-2">Labcom</h1>
        </div>
        <nav class="p-2 bg-blue-200">
            <ul class="flex flex-row">
                <li class="p-2"><a href="#">Home</a></li>
                <li class="p-2"><a href="#">About</a></li>
                <li class="p-2"><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="p-5 m-0 bg-red-500 flex flex-row">
        <section class="basis-1/4">
            <aside class="p-2 bg-green-200">
                <h2 class="text-xl text-gray-800">Sidebar</h2>
                <ul>
                    <li class="p-2"><a href="#">Menu 1</a></li>
                    <li class="p-2"><a href="#">Menu 2</a></li>
                    <li class="p-2"><a href="#">Menu 3</a></li>
                </ul>
            </aside>
        </section>
        <section class="basis-3/4">
            <article class="p-2 bg-yellow-200">
                <h2 class="text-xl text-gray-800">Content</h2>
                <p class="text-gray-800">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qu
            </article>
        </section>
    </main>
    <footer class="w-full bg-gray-800 fixed bottom-0">
        <p class="text-center text-gray-200">Belajar Tailwind</p>
    </footer>
</body>

</html>
