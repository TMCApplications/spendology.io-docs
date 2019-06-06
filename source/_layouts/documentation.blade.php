@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="container max-w-8xl mx-auto px-6 md:px-8 py-4">
    <div class="flex flex-col lg:flex-row">
        <nav id="js-nav-menu" class="nav-menu hidden lg:block">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>
        <div class="w-full lg:w-3/5 break-words pb-16" v-pre>
            <div class="bg-white shadow-lg rounded-lg p-5 ">
                @yield('content')
            </div>
            @if(!$page->hideBackToTop)
                <p class="text-right"><a href="#top-of-the-page">Back to the top</a></p>
            @endif
        </div>
        <div id="page-menu" class="hidden lg:block lg:p-5 lg:w-1/4">
            @if(!$page->hidePageMenu)
                @if($page->pageItems)
                    @include('_partials.page_menu', compact('page'))
                @else
                    @include('_partials.on_this_page')
                    @yield('page-menu')
                @endif
            @endif
        </div>
    </div>
</section>
@endsection
