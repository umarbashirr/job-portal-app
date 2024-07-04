<x-layout>
    <div class="container mx-auto px-4 my-12">
        <div class="rounded-xl shadow-sm m-6 p-4 flex flex-col gap-4 bg-white">
            <div class="flex flex-col gap-2">
                <h2 class="text-2xl font-medium">{{ $job->title }}</h2>
                <ul class="flex items-center gap-4">
                    <li class="flex items-center gap-2 text-gray-500 capitalize">
                        <i class="fa-solid fa-location-dot"></i>
                        <p class="text-gray-500">{{ $job->location }}</p>
                    </li>
                    <li class="flex items-center gap-2 text-gray-500 capitalize">
                        <i class="fas fa-briefcase"></i>
                        <p class="text-gray-500">{{ $job->type }}</p>
                    </li>
                    <li class="flex items-center gap-2 text-gray-500 capitalize">
                        <i class="fas fa-dollar-sign"></i>
                        <p class="text-gray-500">{{ $job->salary }}</p>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col gap-2">
                <h3 class="font-semibold text-lg">Job Description:</h3>
                <p>
                    {{ $job->description }}
                </p>
            </div>
            <div class="flex flex-col gap-2 border p-2 rounded-lg">
                <h3 class="font-semibold text-lg">Employer Details:</h3>
                <p>
                    {{ $job->employer->name }}
                </p>
                <p>
                    {{ $job->employer->email }}
                </p>
                <p>
                    {{ $job->employer->phone }}
                </p>
                <p>
                    {{ $job->employer->website }}
                </p>
            </div>
        </div>
</x-layout>
