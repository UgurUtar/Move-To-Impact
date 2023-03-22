@props(['title', 'title_nl', 'description', 'description_nl','image'])

<div class="border border-gray-200 rounded-lg p-4 transform transition duration-300 hover:scale-105 bg-[#ffffffaa]">
    <div class="h-10 w-10 rounded-xl bg-main_light_blue flex justify-center items-center">
        <img src="{{ asset('images/icons/' . $image) }}" alt="image" class="w-6 h-6 text-main_dark_blue">
    </div>

    <h1 class="text-main_dark_blue font-bold my-2">
        <span lang="en">
            {{ $title }}
        </span>
        <span lang="nl">
            {{ $title_nl }}
        </span>
    </h1>
    <p class="mt-2">
        <span lang="en">
            {{ $description }}
        </span>
        <span lang="nl">
            {{ $description_nl }}
        </span>
    </p>
</div>