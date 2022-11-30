<button
    title="Start searching"
    type="button"
    class="flex md:hidden bg-gray-100 hover:bg-blue-100 justify-center items-center border border-gray-500 rounded-full focus:outline-none h-10 px-3"
    onclick="searchInput.toggle()"
>
    <img src="/img/magnifying-glass.svg" alt="search icon" class="h-4 w-4 max-w-none">
</button>

<div id="js-search-input" class="docsearch-input__wrapper hidden md:block">
    <label for="search" class="hidden">Search</label>

    <input
        id="docsearch-input"
        class="docsearch-input relative block h-10 transition-fast w-full lg:w-1/2 xl:w-1/3 bg-gray-200 border-gray-300 outline-none rounded-lg text-gray-800 border border-transparent ml-auto px-4 pb-0 focus:shadow-md "
        name="docsearch"
        type="text"
        placeholder="Search the docs"
    >

    <button
        class="md:hidden absolute top-0 right-0 h-full font-normal text-3xl text-sea-green-500 hover:text-violet-400 focus:outline-none -mt-px pr-7"
        onclick="searchInput.toggle()"
    >&times;</button>
</div>

@push('scripts')
    @if ($page->docsearchApiKey && $page->docsearchAppId && $page->docsearchIndexName)
        <script type="text/javascript">
            docsearch({
                apiKey: '{{ $page->docsearchApiKey }}',
                appId: '{{ $page->docsearchAppId }}',
                indexName: '{{ $page->docsearchIndexName }}',
                inputSelector: '#docsearch-input',
                debug: false // Set debug to true if you want to inspect the dropdown
            });

            const searchInput = {
                toggle() {
                    const menu = document.getElementById('js-search-input');
                    menu.classList.toggle('hidden');
                    menu.classList.toggle('md:block');
                    document.getElementById('docsearch-input').focus();
                },
            }
        </script>
    @endif
@endpush
