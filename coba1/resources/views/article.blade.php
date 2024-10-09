<x-layout>
  <x-slot:title> {{ $title }} </x-slot:title>

    @foreach ( $posts as $articlee)
      
    <article class= "py-8 max-w-screed-md border-b border-gray-300">
      <a href="/posts/{{ $articlee['slug'] }}" class="hover:underline">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-800"> {{ $articlee['title'] }} </h2>
      </a>
      <div class="text-base text-gray-600">
        <a href="#"> {{ $articlee['author'] }} </a> | October 9th 2024
        <p class="my-4 font-light">
          {{ Str::limit($articlee['body'], 100) }}
        </p>
        <a href="/posts/{{ $articlee['slug'] }}" class="font-medium text-blue-600 hover:underline"> Read more &raquo; </a>
      </div>
    </article>
    @endforeach
</x-layout>