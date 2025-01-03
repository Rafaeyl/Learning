<x-layout>
    <x-slot:heading>
        Job listing
    </x-slot:heading>

    <ul>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="hover:underline">
               <strong> {{ $job['title'] }} </strong>: Pays {{ $job['salary'] }} per year
            </a>
        </li>
    @endforeach
    </ul>
</x-layout>