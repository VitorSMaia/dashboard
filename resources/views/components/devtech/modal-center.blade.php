<div x-show="Modalopen">
    <div class="fixed inset-0 bg-gray-900 opacity-90"></div>
    <div class="m-auto p-5 max-w-sm h-40 rounded-md fixed inset-0 shadow-lg bg-white">
        <div class="flex flex-col h-full justify-between">
            <header>
                <p class="font-extralight text-3xl ">{{ $title}}</p>
            </header>
            <main class="font-extralight text-xl ">
                <p>{{ $body}}</p>
            </main>
            <footer>
                {{ $footer}}
            </footer>
        </div>
    </div>
</div>
