# Section 2 - Laravel Folder Structure and Blade

In this section, I followed a tutorial series to understand the Laravel folder structure and Blade templating engine. The tutorials I referenced are listed below:

### A. Installation Review
[Installation Tutorial](https://youtu.be/nW60yGRoUrs?si=QVzCjdFsiLO4qrL-)

### B. Folder Structure
[Folder Structure Tutorial](https://youtu.be/x55ndgkD2QI?si=7anOzBr9XZXpt7ul)

### C. Blade Templating Engine
[Blade Templating Engine (Part 1)](https://youtu.be/vDx6VA-6a6Y?si=5KL44NKwp9ToxHs3)  
[Blade Templating Engine (Part 2)](https://youtu.be/00o1vJYTp4I?si=Rd88-lMuZRQYiS5-)

---

After following the tutorials, I created a web application with the following pages and structure:

- **Home**
- **Blog**
- **About**
- **Contact**

All pages are fully responsive and optimized for both mobile and desktop views.

### Webpage Screenshots:
Here’s the updated version with descriptive alt text for each screenshot:

---

### Webpage Screenshots:
1. **Home Page**
    - Desktop  
    ![Home page desktop view](img/desktop-home.png)
    - Mobile  
    ![Home page mobile view](img/mobile-home.png)

2. **Blog Page**
    - Desktop  
    ![Blog page desktop view](img/desktop-blog.png)
    - Mobile  
    ![Blog page mobile view](img/mobile-blog.png)

3. **About Page**
    - Desktop  
    ![About page desktop view](img/desktop-about.png)
    - Mobile  
    ![About page mobile view](img/mobile-about.png)

4. **Contact Page**
    - Desktop  
    ![Contact page desktop view](img/desktop-contact.png)
    - Mobile  
    ![Contact page mobile view](img/mobile-contact.png)


## Key Components

In this project, I designed three main sections: **Navbar**, **Header**, and **Main Content**.

### 1. Navbar
The Navbar allows navigation between the pages and uses different components for mobile and desktop views.

#### Desktop Navbar (nav-link.blade.php)
```html
<a {{ $attributes->merge(['class' => ($active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white') . ' block sm:inline-block sm:mr-4 px-3 py-2 text-sm font-medium rounded-md']) }} 
    aria-current="{{ $active ? 'page' : false }}">
        {{ $slot }}
</a>
```
Called in the template as:
```html
<x-nav-link href="/" :active="request() -> is('/')"> Home </x-nav-link>
<x-nav-link href="/blog" :active="request() -> is('blog')"> Blog </x-nav-link>
<x-nav-link href="/about" :active="request() -> is('about')"> About </x-nav-link>
<x-nav-link href="/contact" :active="request() -> is('contact')"> Contact </x-nav-link>
```

#### Mobile Navbar (nav-link-mobile.blade.php)
```html
<a {{ $attributes->merge(['class' => ($active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white') . ' block px-3 py-2 text-sm font-medium rounded-md']) }} 
    aria-current="{{ $active ? 'page' : false }}">
        {{ $slot }}
</a>
```
Called in the template as:
```html
<x-nav-link-mobile href="/" :active="request() -> is('/')"> Home </x-nav-link-mobile>
<x-nav-link-mobile href="/blog" :active="request() -> is('blog')"> Blog </x-nav-link-mobile>
<x-nav-link-mobile href="/about" :active="request() -> is('about')"> About </x-nav-link-mobile>
<x-nav-link-mobile href="/contact" :active="request() -> is('contact')"> Contact </x-nav-link-mobile>
```

The `navbar.blade.php` file contains both components depending on the view (mobile or desktop).

---

### 2. Header and Main Layout
The **Header** and **Main Content** sections use a layout defined in `layout.blade.php`:

```html
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
</head>
<body>
    <div class="h-full">
        <x-navbar />
        <x-header>{{ $title }}</x-header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>
```

The `header` uses the `$title` variable, which is passed from each page like this:

```html
<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h3 class="text-xl">Welcome to my Blog! 🧳✈️</h3>
</x-layout>
```

### 3. Routes Setup
The page title is passed from the `web.php` route file as follows:

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Rayssa Ravelia', 'title' => 'About Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
```