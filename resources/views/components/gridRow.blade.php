@props(['title', 'title_nl', 'description', 'description_nl','image'])

<div class="flex flex-col max-w-sm items-center text-center text-sm">
    <img src="{{ asset('images/' . $image) }}" class="w-20 md:w-52" alt="">
    <h1 class="text-main_dark_blue font-bold mb-4">
        <span lang="en">
            {{ $title }}
        </span>
        <span lang="nl">
            {{ $title_nl }}
        </span>
    </h1>
    <p class="text-xs">
        <span lang="en">
            {{ $description }}            
        </span>
        <span lang="nl">
            {{ $description_nl }}
        </span>
    </p>
</div>