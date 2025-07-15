<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h2>{{$job['title']}}</h2>
    <p>
        {{$job['title']}}: </strong> Pays {{$job['salary']}} per year.
    </p>
</x-layout>