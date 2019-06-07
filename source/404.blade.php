---
extends: _layouts.master
section: body
permalink: 404.html
---

<div class="flex flex-col items-center mt-32 text-gray-700">
    <h1 class="text-6xl font-normal leading-none mb-2">404</h1>

    <h2 class="text-3xl">Page not found</h2>

    <hr class="block w-full max-w-8xl mx-auto my-8 border">

    <p class="text-xl">
        Need help? Please <a title="Contact Us" href="https://www.spendology.com/contact-us/">Contact us</a>.
    </p>

    <div class="my-10">
        <a href="/docs/innovation-forever" title="{{ $page->siteName }} getting started" class="bg-sea-green-500 hover:bg-sea-green-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>

        <a href="https://www.spendology.com/" title="Spendology Cloud" class="bg-blue-900 hover:bg-navy-500 text-white font-normal hover:text-white rounded py-2 px-6">About Spendology</a>
    </div>
</div>
