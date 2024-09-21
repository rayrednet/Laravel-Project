<x-layout>
  <x-slot:title>{{ $title }}</x-slot>

  <div class="welcome-section">
    <h3 class="text-xl">Welcome to my home page 👋</h3>

    <div class="mt-4 flex flex-col lg:flex-row items-start">
      <!-- YouTube Video Section -->
      <div class="youtube-section lg:w-1/2 w-full">
        <a href="https://youtu.be/T1TR-RGf2Pw?si=sAoPK1a8eLc_eNKS" target="_blank">
          <img src="https://img.youtube.com/vi/T1TR-RGf2Pw/0.jpg" alt="YouTube Thumbnail" class="rounded-md shadow-md w-full lg:w-auto">
        </a>
        <p class="mt-4 text-sm text-center">
          Watch the full playlist on 
          <a href="https://youtube.com/c/WebProgrammingUNPAS" target="_blank" class="text-blue-500 underline">Web Programming UNPAS</a>!
        </p>
      </div>

      <!-- CTA Text Section -->
      <div class="lg:ml-6 mt-6 lg:mt-0">
        <p>
          This Laravel project website is created based on the YouTube playlist by Web Programming UNPAS. Big thanks to their free course for making this possible!
        </p>
        <br />
        <p>
          I'd like to take a moment to extend my heartfelt gratitude to the creator of the playlist, Pak Sandhika Galih, for his dedication and hard work in creating the videos. I've learned a lot from his tutorials and I hope you will too! 😄
        </p>
      </div>
    </div>
  </div>
</x-layout>
