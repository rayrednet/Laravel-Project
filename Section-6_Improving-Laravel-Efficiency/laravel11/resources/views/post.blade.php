<x-layout>
  <x-slot:title>{{ $title }}</x-slot>  
  <main class="pt-4 pb-16 lg:pt-8 lg:pb-24 dark:bg-gray-900 antialiased"> 
      <div class="container mx-auto max-w-screen-xl px-4">
          <article class="mx-auto w-full max-w-6xl prose lg:prose-lg dark:prose-invert">
              <header class="mb-2">
                  <a href="/posts" class="text-blue-500 hover:underline font-medium">&laquo; Back to posts</a>
                  <address class="flex items-center my-4 not-italic"> 
                    <a href="/authors/{{ $post->author->username }}"> 
                      <img class="mr-4 w-16 h-16 rounded-full" src="{{ $post->author->profile_picture }}" alt="{{ $post->author->name }}">
                    </a>
                      <div>
                          <a href="/posts?author={{ $post->author->username }}"
                             class="text-xl font-bold hover:underline dark:text-white">{{ $post->author->name }}</a>
                          <p class="text-sm text-gray-500 dark:text-gray-400">
                              {{ $post->created_at->format('g:i A F j, Y') }} | {{ $post->created_at->diffForHumans() }}
                          </p>
                      </div>
                  </address>
                  <a href="/posts?category={{ $post->category->slug }}">
                    <span class="bg-{{ $post->category->color }}-100 hover:underline text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        {!! $post->category->icon !!} 
                        <span class = "ml-2">  
                            {{ $post->category->name }}
                        </span>
                      </span>
                  </a>
                  <h1 class="mt-2 mb-4 text-3xl font-extrabold leading-tight dark:text-white lg:text-4xl">{{ $post->title }}</h1> 
              </header>
              <div class="prose dark:prose-invert">
                  {!! $post->body !!}
              </div>
          </article>
      </div>
  </main>
</x-layout>
