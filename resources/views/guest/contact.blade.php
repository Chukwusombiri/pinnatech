<x-app-layout>
    {{-- hero --}}
    <section class="pt-12 md:pt-24 bg-primary-white">
        <div class="flex flex-col justify-center items-center px-4 md:px-10">
            <h1 class="text-4xl md:text-5xl sedan-regular-bold mb-4 md:mb-10 flex items-center">
                Contact us
                <svg class="size-12 ml-3" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path
                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                    <path d="M15 7a2 2 0 0 1 2 2" />
                    <path d="M15 3a6 6 0 0 1 6 6" />
                </svg>

            </h1>
            <p class="text-md md:text-2xl text-center max-w-2xl">
                Need assistance? We’re ready to help. Our Client Success team and advisors are here to answer any
                questions — from account transfers to building a personalized financial plan.
            </p>
        </div>
    </section>
    {{-- email --}}
    <section class="pt-10 md:pt-16">
        <div class="px-4 md:px-10 grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-14 max-w-8xl mx-auto">
            <a href="{{ config('app.socials.whatsapp_link') }}"
                class="flex flex-col rounded-xl border border-primary-light hover:border-primary-base p-6"
                x-data="{ isHovered: false }" @mouseenter="isHovered = true" @mouseleave="isHovered = false">
                <div class="w-full flex flex-wrap justify-between items-center">
                    <div class="flex flex-col justify-center">
                        <h2 class="text-3xl md:text-4xl futura-medium mb-2 md:mb-6">Send us a WhatsApp message</h2>
                        <p class="text-sm md:text-xl">Our team is always ready to chat with you.</p>
                    </div>
                    <div class="w-full md:w-auto flex justify-end mt-4 md:mt-0">
                        <span class="bg-primary rounded-full px-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" :class="{ 'w-8': isHovered }"
                                class="w-6 h-6 text-primary-light transition duration-150 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                </div>
            </a>
            <a href="mailto:{{ config('mail.mainTo.address') }}"
                class="flex flex-col rounded-xl border border-primary-light hover:border-primary-base p-6"
                x-data="{ isHovered: false }" @mouseenter="isHovered = true" @mouseleave="isHovered = false">
                <div class="w-full flex flex-wrap justify-between items-center">
                    <div class="flex flex-col justify-center">
                        <h2 class="text-3xl md:text-4xl futura-medium mb-2 md:mb-6">Contact us by Email</h2>
                        <p class="text-sm md:text-xl">We’re available 24/7 — reach out to us anytime.</p>
                    </div>

                    <div class="w-full md:w-auto flex justify-end mt-4 md:mt-0">
                        <span class="bg-primary rounded-full px-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" :class="{ 'w-8': isHovered }"
                                class="w-6 h-6 text-primary-light transition duration-150 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                </div>
            </a>
        </div>
    </section>
    {{-- other channels grid --}}
    <section class="pt-4 pb-16 md:pt-10 bg-primary-white">
        <div class="px-4 md:px-10 grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- priority support --}}
            <div class="">
                <div
                    class="md:min-h-[60vh] flex flex-col justify-between rounded-xl border border-primary-light hover:border-primary-white0 p-6">
                    <div>
                        <h2 class="text-3xl md:text-4xl futura-medium mb-2 md:mb-6">Priority Support</h2>
                        <p class="text-sm md:text-xl">
                            For {{ config('app.name') }} Priority inquiries, please email us at
                            <a href="mailto:{{ config('mail.mainTo.address') }}" class="underline futura-book">
                                {{ config('mail.mainTo.address') }}
                            </a>
                            or chat with our virtual assistant anytime — phone support is not available.
                        </p>
                    </div>
                </div>
            </div>
            {{-- chat with us --}}
            <div class="">
                <div
                    class="md:min-h-[60vh] flex flex-col justify-between rounded-xl border border-primary-light hover:border-primary-white0 p-6">
                    <div>
                        <h2 class="text-3xl md:text-4xl futura-medium mb-2 md:mb-6">Chat with Us</h2>
                        <p class="text-sm md:text-xl">
                            Need help fast? Chat with our Virtual Assistant anytime, or talk to our friendly team when
                            we’re online.
                        </p>
                        <ul class="mt-4 pl-6 list-disc space-y">
                            <li class="text-sm md:text-lg"><span class="futura-medium">Monday:</span> 9 am – 6 pm (UTC)
                            </li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Tuesday:</span> 9 am – 6 pm (UTC)
                            </li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Wednesday:</span> 9 am – 6 pm
                                (UTC)</li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Thursday:</span> 9 am – 6 pm
                                (UTC)</li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Friday:</span> 9 am – 6 pm (UTC)
                            </li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Saturday & Sunday:</span> Closed
                            </li>
                        </ul>
                    </div>

                    <div class="mt-14">
                        <ul class="pl-6 list-disc">
                            <li class="text-sm md:text-lg">Business hours may be subject to change on holidays</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- file a complaint --}}
            <div class="">
                <a href="mailto:{{ config('mail.from.address') }}" x-data="{ isHovered: false }"
                    @mouseenter="isHovered = true" @mouseleave="isHovered = false"
                    class="md:min-h-[60vh] w-full flex flex-col justify-between rounded-xl border border-primary-light hover:border-primary-white0 p-6 cursor-pointer">
                    <div>
                        <h2 class="text-3xl md:text-4xl futura-medium mb-2 md:mb-6">Share Your Concern</h2>
                        <p class="text-sm md:text-xl">
                            Your feedback matters to us. If something hasn’t met your expectations, find out how to
                            share your concern and we’ll make it right.
                        </p>
                    </div>
                    <div class="flex justify-end mt-4 md:mt-0">
                        <span class="bg-primary rounded-full px-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" :class="{ 'w-8': isHovered }"
                                class="w-6 h-6 text-primary-white transition duration-150 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                </a>
            </div>
            {{-- resolving balance --}}
            <div class="">
                <div
                    class="md:min-h-[60vh] flex flex-col justify-between rounded-xl border border-primary-light hover:border-primary-white0 p-6">
                    <div>
                        <h2 class="text-3xl md:text-4xl futura-medium mb-6">Resolving an Outstanding Balance</h2>
                        <p class="text-sm md:text-xl">
                            Our Resolutions team is here to help with negative account balances. We’re available on
                            weekdays from 9 am – 6 pm (UTC), or you can reach us anytime by email at
                            <a href="mailto:{{ config('mail.from.address') }}" class="futura-medium underline">
                                {{ config('mail.from.address') }}
                            </a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
