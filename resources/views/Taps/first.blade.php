<div id="__next">
    <div style="position:fixed;bottom:16px;right:16px;z-index:70000"></div>
    <div id="id" class="relative flex h-screen flex-col justify-between">
        <div>
            <x-header />
            <div class="h-[84px] w-full"></div>
            <main class="container relative mx-auto">
                <div>
                    <div class="h-[32px] w-full"></div>
                    <div class="px-2">
                        <div class="mb-0">
                            <div class="relative mx-auto flex items-center justify-start">
                                {{-- <x-search /> --}}
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-2 py-6 sm:px-0 md:container md:mx-auto">
                        <div class="flex items-center justify-between">
                            {{-- <x-button /> --}}
                        </div>
                        <div class="h-[20px] w-full"></div>
                        <div class="h-[20px] w-full"></div>
                        <div class="mb-4">
                            <div class="flex items-center justify-between">
                                {{-- <x-article /> --}}
                            </div>
                        </div>
                        {{-- <x-images /> --}}
                        <div class="mx-auto mt-[20px] mb-[40px] w-[150px]">
                            {{-- <x-more/> --}}
                        </div>
                        <div class="flex items-center justify-between">
                            {{-- <x-seek-goal /> --}}
                        </div>
                        <div class="relative grid w-full grid-cols-1 gap-2">
                            {{-- <x-phnompenh /> --}}
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div>
            {{-- tver alov ai --}}
            <div class="h-[104px] w-full"></div>
            <div class="hidden lg:flex">
                <x-footer />
            </div>
            <div class="fixed bottom-[30px] right-[30px] z-20">
                <button>
                    <img src="" style="width: 46px; height: 46px; border-radius: 50%; background: black;"
                        class="h-[46px] w-[46px] rounded-full text-secondary duration-500 hover:text-primary hover:opacity-80">
                </button>
            </div>
        </div>
    </div>
</div>
