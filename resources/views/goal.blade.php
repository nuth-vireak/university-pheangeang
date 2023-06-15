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
                                <x-search />
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-2 py-6 sm:px-0 md:container md:mx-auto">
                        <div class="flex items-center justify-between">
                            <div class="rounded-x flex w-full max-w-lg space-x-1 p-1" role="tablist"
                                    aria-orientation="horizontal">
                                    <button
                                        class="shadow text-white w-full rounded-lg py-2.5 text-sm font-medium leading-5 text-secondary ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none focus:ring-2"
                                        id="headlessui-tabs-tab-:ru:" role="tab" aria-selected="true"
                                        tabindex="0" data-headlessui-state="selected" type="button"><a href="http://127.0.0.1:8000/welcome">ទាំងអស់(27)</a></button>
                                    <button
                                        class="text-secondary hover:bg-white/[0.12] hover:text-secondary w-full rounded-lg py-2.5 text-sm font-medium leading-5 text-secondary ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none focus:ring-2"
                                        id="headlessui-tabs-tab-:rv:" role="tab" aria-selected="false"
                                        tabindex="-1" data-headlessui-state="" type="button"><a href="/article">អត្ថបទ (26)</a></button>
                                    <button
                                        class="bg-primary text-secondary hover:bg-white/[0.12] hover:text-secondary w-full rounded-lg py-2.5 text-sm font-medium leading-5 text-secondary ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none focus:ring-2"
                                        id="headlessui-tabs-tab-:r10:" role="tab" aria-selected="false"
                                        tabindex="-1" data-headlessui-state="" type="button"><a href="/goal">គោលដៅ (1)</a></button>
                                </div>
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
                            <x-seek-goal />
                        </div>
                        <div class="relative grid w-full grid-cols-1 gap-2">
                            <x-phnompenh />
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
