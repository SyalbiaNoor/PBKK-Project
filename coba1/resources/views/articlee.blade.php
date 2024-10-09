<x-layout>
  <x-slot:title> {{ $title }} </x-slot:title>

    <article class= "py-8 max-w-screed-md>
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-800"> {{ $post['title'] }} </h2>
      <div class="text-base text-gray-600">
        <a href="#"> {{ $post['author'] }} </a> | October 9th 2024
        <p class="my-4 font-light">
          {{ $post['body'] }}
        </p>
        <a href="/article" class="font-medium text-blue-600 hover:underline"> Back to articles &laquo; </a>
      </div>
    </article>
</x-layout>