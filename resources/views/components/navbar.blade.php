<nav class="max-w-6xl mx-auto bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center">
            <img src="/images/logo.png" class="h-6 mr-3 sm:h-9" alt="">
        </a>
        <div class="flex items-center md:order-2">
            <button type="button" data-dropdown-toggle="language-dropdown-menu"
                class="inline-flex items-center justify-center px-4 py-2 text-sm text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <span lang="en" class="flex flex-row items-center justify-center">
                    <img src="images/uk.png" class="h-3.5 w-3.5 rounded-full mr-2" alt="">
                    English
                </span>
                <span lang="nl" class="flex flex-row items-center justify-center">
                    <img src="images/nl.png" class="h-3.5 w-3.5 rounded-full mr-2" alt="">
                    Nederlands
                </span>
            </button>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                id="language-dropdown-menu">
                <ul class="py-2" role="none">
                    <li>
                        <button onclick="myFunction('en')"
                            class="block px-4 py-2 text-sm w-full text-left text-gray-400 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <img src="images/uk.png" class="h-3.5 w-3.5 rounded-full mr-2" alt="">
                                English
                            </div>
                        </button>
                    </li>
                    <li>
                        <button onclick="myFunction('nl')"
                            class="block px-4 py-2 text-sm w-full text-left text-gray-400 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <img src="images/nl.png" class="h-3.5 w-3.5 rounded-full mr-2" alt="">
                                Nederlands
                            </div>
                        </button>
                    </li>
                </ul>
            </div>
            <button data-collapse-toggle="mobile-menu-language-select" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="mobile-menu-language-select" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
            id="mobile-menu-language-select">
            <ul
                class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-white bg-blue-700 md:bg-transparent md:text-gray-400 md:p-0 dark:text-white"
                        aria-current="page">
                        <span lang="en">
                            Tools & Services
                        </span>
                        <span lang="nl">
                            Tools & Services
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-main_turquoise md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        <span lang="en">
                            Cases
                        </span>
                        <span lang="nl">
                            Cases
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-main_turquoise md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        <span lang="en">
                            Insights
                        </span>
                        <span lang="nl">
                            Insights
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-main_turquoise md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        <span lang="en">
                            About us
                        </span>
                        <span lang="nl">
                            Over ons
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-main_turquoise md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        <span lang="en">
                            Contact
                        </span>
                        <span lang="nl">
                            Contact
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    $('[lang]').hide();
    $('[lang="en"]').show();

    function myFunction(language) {
        $('[lang]').hide();
        $('[lang="' + language + '"]').show();
    }
</script>
