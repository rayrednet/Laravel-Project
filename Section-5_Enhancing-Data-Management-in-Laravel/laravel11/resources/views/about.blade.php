<x-layout>
  <x-slot:title>{{ $title }}</x-slot>
  
  <h3 class="text-2xl font-bold mb-4">About Me ✨</h3>
  
  <p class="text-lg mb-4"> 
      Hello! I'm {{ $name }}, a dedicated software engineer with a passion for problem-solving and innovation
      <br /> 
      I'm always eager to learn new technologies that can help streamline processes and create impactful solutions.
      <br /> 
      At the moment, I’m diving into Laravel and Vue.js to sharpen my development skills
      <br />
      I love working on projects that challenge me and push me to grow both as a developer and as a thinker.
  </p>
  
  <div class="flex items-center">
      <img src="{{ asset('img/cat.jpg') }}" alt="Cat image" class="w-48 h-48 rounded-full shadow-lg mr-4">
      <p class="text-md">This is my coding buddy 🐱, keeping me company while I work on exciting projects!</p>
  </div>

</x-layout>
