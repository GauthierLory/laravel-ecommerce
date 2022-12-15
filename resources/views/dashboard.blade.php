<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <div class="">
                    <div class="flex flex-col items-start px-10 pt-5 pb-20 lg:pt-20 lg:flex-row">

                        <div class="w-full mx-auto bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
{{--                            <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="product designer">--}}
                            <h1 class="text-lg text-gray-700"> John Doe </h1>
                            <h3 class="text-sm text-gray-400 "> Jo**@d**.com</h3>
{{--                            <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>--}}
                            <button class="bg-indigo-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Modifier</button>
                        </div>
                        <div class="w-full max-w-2xl mx-auto">
                            <div id="accordion-collapse" class="bg-white" data-accordion="collapse">
                                <h2 id="accordion-collapse-heading-1">
                                    <button type="button" class="flex items-center focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 justify-between p-5 w-full font-medium text-left border border-gray-200 dark:border-gray-700 border-b-0 text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                        <span>What is Flowbite?</span>
                                        <svg data-accordion-icon class="w-6 h-6 shrink-0 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-1" aria-labelledby="accordion-collapse-heading-1">
                                    <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
                                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive
                                            components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                                        <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                                href="#" target="_blank"
                                                class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing
                                            websites even faster with components on top of Tailwind CSS.</p>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-2">
                                    <button type="button" class="flex items-center focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 justify-between p-5 w-full font-medium border border-gray-200 dark:border-gray-700 border-b-0 text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                        <span>Is there a Figma file available?</span>
                                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                                    <div class="p-5 border border-gray-200 dark:border-gray-700 border-b-0">
                                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the
                                            Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                                        <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                                                                                                     target="_blank" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a>
                                            based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-3">
                                    <button type="button" class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                                        <span>What are the differences between Flowbite and Tailwind UI?</span>
                                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                                    <div class="p-5 border border-gray-200 dark:border-gray-700 border-t-0">
                                        <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from
                                            Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another
                                            difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers
                                            sections of pages.</p>
                                        <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite,
                                            Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best
                                            of two worlds.</p>
                                        <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                                        <ul class="list-disc pl-5 dark:text-gray-400 text-gray-500">
                                            <li><a href="https://flowbite.com/pro/" target="_blank"
                                                   class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                                            <li><a href="https://tailwindui.com/" rel="nofollow" target="_blank"
                                                   class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <p class="mt-5">This accordion component is part of a larger, open-source library of Tailwind CSS components. Learn
                                more
                                by going to the official <a class="text-blue-600 hover:underline"
                                                            href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite Documentation</a>.
                            </p>
                            <script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
