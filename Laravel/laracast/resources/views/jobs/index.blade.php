<x-layout>
    <x-slot:title>
        All Jobs
    </x-slot:title>
    <x-slot:heading>
        jobs Page
    </x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}"
                class="block px-5 py-6 hover:bg-cyan-950 hover:text-white rounded-lg border border-gray-500">

                <div class="text-orange-700 py-2 font-bold">
                    {{ $job->Employer->name }}
                </div>

                <div>
                    <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year
                </div>

            </a>
        @endforeach
        <div>
            {{ $jobs->links() }}{{-- for pagination links --}}
        </div>
    </div>
</x-layout>
