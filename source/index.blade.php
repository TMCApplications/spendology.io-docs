@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12 xs:py-6 lg:mt-32">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-16">
        <div class="mt-8 xs:mt-0">
            <h1 id="intro-heading">{{ $page->siteHeading }}</h1>

            <h2 id="intro-description" class="font-normal mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">Travel money the Spendology way. <br class="hidden sm:block">All of the profit, none of the headache.</p>

            <div class="flex my-10">
                <a href="/docs/innovation-forever" title="{{ $page->siteName }} getting started" class="bg-sea-green-500 hover:bg-sea-green-600 font-normal text-white font-semibold hover:text-white rounded-lg shadow-lg mr-4 py-2 px-6">Get Started</a>

                <a href="https://www.spendology.com/" title="Spendology Cloud" class="bg-white hover:bg-gray-200 text-gray-800 hover:text-gray-800 font-semibold rounded-lg shadow-lg py-2 px-6">Why Spendology?</a>
            </div>
        </div>

        <img src="/img/play-green-cloud.png" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 hidden lg:mb-0 lg:block h-64">
    </div>
</section>
@endsection
