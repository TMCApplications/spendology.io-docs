@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12 xs:py-6 lg:mt-32">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-16">
        <div class="mt-8 xs:mt-0">
            <h1 id="intro-docs-template">{{ $page->siteHeading }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-normal mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">Travel money the Spendology way. <br class="hidden sm:block">All of the profit, none of the headache.</p>

            <div class="flex my-10">
                <a href="/docs/innovation-forever" title="{{ $page->siteName }} getting started" class="bg-sea-green-500 hover:bg-sea-green-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>

                <a href="https://www.spendology.com/" title="Spendology Cloud" class="bg-blue-900 hover:bg-navy-500 text-white font-normal hover:text-white rounded py-2 px-6">About Spendology</a>
            </div>
        </div>

        <img src="/img/play-green-cloud.png" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 hidden lg:mb-0 lg:block h-64">
    </div>

    <hr class="block my-8 border lg:hidden">
</section>
@endsection
