<div class="fixed bottom-0 right-0">
    <div id="info-popup" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed z-50 right-0 bottom-0">
        <div class="relative p-4 w-full max-w-lg h-full md:h-auto right-0">
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 md:p-8">
                <div class="mb-4 text-sm font-light text-gray-500 dark:text-gray-400">
                    <h3 class="mb-3 text-2xl font-bold text-gray-900 dark:text-white">
                        <span lang="en">
                            Interested in a demo?
                        </span>
                        <span lang="nl">
                            Geïnteresseerd in een demo?
                        </span>
                    </h3>
                    <iframe class="w-fit md:w-[400px]" height="200px" src="https://www.youtube.com/embed/e3woGAzgMqo">
                    </iframe>
                </div>
                <div class="justify-between items-center pt-0 space-y-4 sm:flex sm:space-y-0">
                    <a href="#" class="font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        <span lang="en">
                            Book a demo now!
                        </span>
                        <span lang="nl">
                            Boek nu een demo!
                        </span>
                    </a>
                    <div class="items-center space-y-4 sm:space-x-4 sm:flex sm:space-y-0">
                        <button id="close-modal" type="button"
                            class="py-2 px-4 w-full text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 sm:w-auto hover:bg-gray-100 focus:outline-none hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                            <span lang="en">
                                Close
                            </span>
                            <span lang="nl">
                                Sluiten
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    setTimeout(function() {
        document.getElementById('info-popup').classList.remove('hidden');
        document.getElementById('info-popup').classList.add('flex');
    }, 6000);


    const closeModalEl = document.getElementById('close-modal');
    closeModalEl.addEventListener('click', function() {
        document.getElementById('info-popup').classList.remove('flex');
        document.getElementById('info-popup').classList.add('hidden');
        $('iframe').each(function() {
            $(this).attr('src', $(this).attr('src'));
        });
    });
</script>
