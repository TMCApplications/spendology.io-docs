@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12 xs:py-6">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-16">
        <div class="mt-8 xs:mt-0">
            <h1 id="intro-docs-template">{{ $page->siteHeading }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-normal mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">Travel money the Spendology way. <br class="hidden sm:block">All of the profit, none of the headache.</p>

            <div class="flex my-10">
                <a href="/docs/getting-started" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>

                <a href="https://www.spendology.com/" title="Spendology Cloud" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">About Spendology</a>
            </div>
        </div>

        <img src="/assets/img/play-green-cloud.png" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 hidden lg:mb-0 lg:block h-64">
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/play-tick.png" class="h-12 w-12" alt="window icon">

            <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">Helpful intuitive widgets</h3>
            <p class="text-sm mt-0"><a href="/docs/getting-started">Get started today!</a></p>

            <p>Integrate our clever widgets into your website and online marketing and give your customers access to live rate boards, instant quotes and competitor comparison widgets.</p>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/play-pound.png" class="h-12 w-12" alt="terminal icon">

            <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">The voice of Alexa</h3>

            <p class="text-sm mt-0">Coming soon</p>

            <p>Voice technology and digital assistants are changing how the nation browses and shops. Your customers can use their Amazon Echo to check exchange rates and to create and track orders.</p>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="/assets/img/play-star.png" class="h-12 w-12" alt="stack icon">

            <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Five star support</h3>

            <p>We treat your customers just like our own with 5 star support by telephone, chat and email for all support queries. Because your brand is just as important as ours.</p>
        </div>
    </div>
</section>
@endsection
