<x-layout>
    <div class="container mx-auto px-4 flex flex-col gap-4 my-12">
        @foreach ($jobs as $job)
            <x-single-job-card :job="$job" />
        @endforeach
    </div>
</x-layout>
