<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2>{{ $job["title"]}}</h2>

    <p>This Job Pays {{ $job["salary"] }}</p>
</x-layout>