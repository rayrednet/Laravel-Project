<x-layout>
  <x-slot:title>{{ $title }}</x-slot>
    <x-search-bar/>

    {{ $posts->links() }}

  <div class="my-2 py-4 mx-auto max-w-screen-xl lg:py-8 px-0">
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
          @forelse ($posts as $post)
          <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 flex flex-col h-full"> 
              <div>
                  <div class="flex justify-between items-center mb-5 text-gray-500">
                      <a href="/posts?category={{ $post->category->slug }}">
                          <span class="bg-{{ $post->category->color }}-100 hover:underline text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            {!! $post->category->icon !!} 
                            <span class = "ml-2">  
                                {{ $post->category->name }}
                            </span>
                          </span>
                      </a>
                      <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                  </div>
                  <h2 class="mb-2 text-2xl font-bold tracking-tight hover:underline text-gray-900 dark:text-white">
                      <a href="/posts/{{ $post['slug'] }}">{{ $post->title }}</a>
                  </h2>
                  <p class="mb-5 font-light text-gray-500 dark:text-gray-400 flex-grow">{{ Str::limit($post['body'], 150) }}</p> 
              </div>
              <div class="mt-auto flex justify-between items-center">
                  <a href="/posts?author={{ $post->author->username }}">
                      <div class="flex items-center space-x-2">
                          <img class="w-7 h-7 rounded-full" src="{{ $post->author->profile_picture }}" alt="{{ $post->author->name }}" />
                          <span class="font-medium text-xs hover:underline dark:text-white">
                              {{ $post->author->name }}
                          </span>
                      </div>
                  </a>
                  <a href="/posts/{{ $post->slug }}" class="inline-flex items-center font-medium text-sm text-primary-600 dark:text-primary-500 hover:underline">
                      Read more
                      <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                  </a>
              </div>
          </article>
          @empty
          <div class="flex flex-col ">
            <p class="font-semibold text-xl my-4">No article found!</p>
            <a href="/posts" class="text-blue-500 hover:underline">&laquo; Back to posts</a>
          </div>
          @endforelse
      </div>
  </div>
  {{ $posts->links() }}

</x-layout>
