<footer class="p-4 sm:p-6 bg-main_dark_blue ">
    <div class="mx-auto max-w-screen-xl">
        <div class="md:flex md:justify-between">
            <div class="flex flex-col mb-8">
                <div>
                    <h2
                        class="mb-8 mt-8 lg:mb-4 text-3xl font-extrabold tracking-tight leading-tight text-white md:text-4xl">
                        <span lang="en">
                            Subscribe to our monthly newsletter!
                        </span>
                        <span lang="nl">
                            Abonneer op onze nieuwsbrief!
                        </span>
                    </h2>
                    <p class="mb-10 text-white">
                        <span lang="en">
                            Don't miss out on the latest B Corp and CSRD news
                        </span>
                        <span lang="nl">
                            Mis niks van het laatste nieuws over B Corp en CSRD
                        </span>
                    </p>
                </div>
                <form id="subscribe-newsletter" method="post">
                    @csrf
                <div class="mb-2">
                    <div class="flex flex-col">
                        <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                            for="grid-first-name">
                            Email
                        </label>
                        <input
                            class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg  py-3 px-4 leading-tight focus:outline-none mb-6"
                            id="grid-first-name" type="text">

                        <button type="submit"
                            class="w-full bg-main_turquoise text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <span lang="en">
                                Submit
                            </span>
                            <span lang="nl">
                                Verzenden
                            </span>
                        </button>
                    </div>
                </div>
            </form>

            
            </div>
            <div class="mt-8">
                <div class="flex flex-col">
                    <div class="mb-6 md:mb-0">
                        <a href="/" class="flex items-center">
                            <img src="images/logo-blue.png" class="mr-3 h-8" alt="FlowBite Logo" />
                        </a>
                    </div>
                    <div class="grid grid-cols-2 mt-8">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold uppercase text-main_turquoise">
                                <span lang="en">
                                    Legal
                                </span>
                                <span lang="nl">
                                    Legaal
                                </span>
                            </h2>
                            <ul class="text-white">
                                <li class="mb-4">
                                    <a href="https://movetoimpact.com/terms-and-conditions/">
                                        <span lang="en">
                                            Terms and conditions
                                        </span>
                                        <span lang="nl">
                                            Algemene voorwaarden
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold uppercase text-main_turquoise">Contact</h2>
                            <ul class="text-white">
                                <li class="mb-4">
                                    <a href="mailto: info@movetoimpact.com">info@movetoimpact.com</a>
                                </li>
                                <li>
                                    <a href="tel:020 215 7722">020 215 7722</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>