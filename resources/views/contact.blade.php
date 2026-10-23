<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    @vite('resources/css/app.css')
</head>
<body>
<nav
   class="flex py-2 px-4 md:px-4 bg-white border-b border-slate-300 dark:border-neutral-700 dark:bg-neutral-900 min-h-[50px] relative z-20"
   aria-label="Main navigation">
   <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-4 w-full">
      <a href="#"
         class="min-w-9 inline-block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
         <span class="sr-only"></span>
      </a>

      <div id="collapseMenu" tabindex="-1"
         class="hidden lg:block max-lg:bg-white dark:max-lg:bg-neutral-900 max-lg:border-l max-lg:border-slate-300 dark:max-lg:border-neutral-700 max-lg:w-1/2 max-lg:fixed max-lg:top-0 max-lg:right-0 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto max-sm:w-full z-50 outline-none">

         <div
            class="py-2 px-4 flex justify-between items-center border-b border-slate-300 sticky top-0 bg-white dark:border-neutral-700 dark:bg-neutral-900 lg:hidden max-lg:min-h-[68px]">
            <a href="#"
               class="inline-block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
               <span class="sr-only">Halaman menu</span>
               <img src="https://readymadeui.com/logo-alt.svg" alt="readymadeui logo dialog" class="h-9 w-auto" />
            </a>
         </div>

         <ul class="flex flex-col gap-8 font-semibold text-sm text-slate-900 dark:text-slate-50 lg:flex-row max-lg:p-6">
            <li>
               <a href="/"
                  class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">home</a>
            </li>
            <li>
               <a href="/about"
                  class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">about</a>
            </li>
            <li>
               <a href="/blog"
                  class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">blog</a>
            </li>
            <li>
               <a href="/contact"
                  class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded"
                  aria-current="page">contact</a>
            </li>
         </ul>
      </div>

      <div class="flex items-center gap-4">
         <a href="#"
            class="py-2 px-3.5 text-sm rounded-md font-semibold cursor-pointer transition-all focus:outline-none focus-visible:ring-2"></a>


         <button type="button" aria-controls="collapseMenu" aria-expanded="false" aria-haspopup="true" id="toggleOpen"
            class="cursor-pointer lg:hidden focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
            <svg class="size-7 fill-slate-900 dark:fill-slate-50" aria-hidden="true" viewBox="0 0 20 20"
               xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"></path>
            </svg>
         </button>
      </div>
   </div>
</nav>

<main class="max-w-7xl mx-auto px-6 py-6 space-y-6">
    <h1 class="text-3xl font-bold">CONTACT</h1>

    <ul class="list-disc list-inside">
        <li>
            Artikel:
            <a href="https://www.themintmagazine.com/economics-rules-not-ok/" target="_blank"
                class="text-blue-600 underline hover:text-blue-800">The Mint Magazine</a>
        </li>
    </ul>
</main>
</body>
</html>