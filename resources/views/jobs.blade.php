<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <li><strong>{{ $job['title'] }}</strong>: Pays {{ $job["salary"] }} per year.</li>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>