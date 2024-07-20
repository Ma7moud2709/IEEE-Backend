<x-layout>
    <x-slot:title>
    Job - Show
    </x-slot:title>
    <x-slot:heading>
        Job details
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{ $job['title'] }}.</h2>
    <h3>This job pays {{ $job['salary'] }} per year.</h3>
    @if ($job)
    @else
        <h2 class="font-bold text-lg text-center text-red-700">Job Not Found</h2>
    @endif
</x-layout>
