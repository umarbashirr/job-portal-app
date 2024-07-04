@props(['job'])

<div class="rounded-lg shadow-sm p-4 relative bg-white">
    <h2 class="font-semibold">{{ $job->employer->name }}</h2>
    <h3 class="text-2xl font-medium">{{ $job->title }}</h3>
    <ul class="flex items-center gap-4 mt-4">
        <li class="flex items-center gap-2 text-gray-500 capitalize">
            <i class="fa-solid fa-location-dot"></i>
            <p class="text-gray-500">{{ $job->location }}</p>
        </li>
        <li class="flex items-center gap-2 text-gray-500 capitalize">
            <i class="fas fa-briefcase"></i>
            <p class="text-gray-500">{{ $job->type }}</p>
        </li>
    </ul>
    <p class="text-gray-500 mt-4">{{ $job->created_at->diffForHumans() }}</p>
    <p class="font-semibold text-lg absolute right-4 top-4">
        {{ $job->salary }}
    </p>
    <a href="/job-listings/{{ $job->id }}"
        class="bg-indigo-600 text-white py-2 px-6 rounded-sm shadow-sm absolute bottom-4 right-4">
        View Job
    </a>
</div>
