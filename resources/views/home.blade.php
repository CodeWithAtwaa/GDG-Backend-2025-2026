<x-layout title="Home Page">

    <h2 class="text-xl font-semibold">
        {{ $greating }} From Home Page
    </h2>

    <hr>
    <br>
    <ul>
        @foreach ($jobs as $job)
            <li><strong>{{ $job['title'] }}:</strong>${{ $job['salary'] }}</li>
        @endforeach
    </ul>
</x-layout>
