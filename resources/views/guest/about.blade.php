<x-app-layout>
    {{-- Hero --}}
    <section class="relative bg-cover bg-center bg-no-repeat md:h-screen"
        style="background-image:url('/images/about/about.jpg')">
        <div
            class="h-full relative px-4 py-16 sm:px-10 md:flex md:flex-col justify-center bg-gray-900 bg-opacity-50 backdrop-blur-[2px]">
            <div class="max-w-2xl text-white">
                <h1 class="futura-medium text-2xl md:text-5xl font-semibold tracking-wider" data-aos="fade-up">
                    Whether you’re establishing a new portfolio or expanding existing assets, our platform provides the
                    strategic clarity and insight required for informed financial decisions.
                </h1>

                <p class="mt-4 md:mt-8 max-w-lg sm:text-xl/relaxed uppercase futura-medium" data-aos="fade-up">
                    — Marcus D. Hartley, Executive & Chartered Accountant
                </p>
            </div>
        </div>
    </section>
    {{-- Who we are --}}
    <section class="py-12 md:py-24">
        <div class="flex px-4 md:px-10">
            <div class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center">
                <div class="col-span-full md:col-span-1">
                    <h2 data-aos="fade-up"
                        class="futura-medium text-3xl md:text-4xl font-extrabold tracking-wider mb-4 md:mb-0 p-0 text-primary-light capitalize">
                        {{ $appFullName }}: About Us
                    </h2>
                </div>
                <div class="col-span-full md:col-span-2">
                    <div data-aos="fade-up" class="w-full md:w-4/5 lg:w-3/4">
                        <p class="mb-4 text-xl">
                            At {{ config('app.name') }}, we empower individuals and businesses to reach financial
                            independence and long-term growth. Guided by integrity, innovation, and personalized
                            service, our experienced team helps clients navigate the evolving investment landscape.
                        </p>
                        <p class="mb-4 text-xl">
                            As trusted thought leaders, our Investment Advisory Committee shares valuable insights and
                            works closely with the {{ config('app.name') }} leadership to deliver informed, strategic
                            investment decisions.
                        </p>
                        <p class="text-xl">
                            What started as an ambition to reshape the financial sector has evolved into a reliable
                            partner, known for providing clear, accessible, and high-quality investment solutions with
                            strategic direction and customized support.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- What we do --}}
    <section class="pt-8 pb-12 md:py-24" id="workEthics">
        <div class="flex px-4 md:px-10">
            <div class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center">
                <div class="col-span-full md:col-span-1" data-aos="fade-up">
                    <h2
                        class="futura-medium text-xl md:text-5xl font-extrabold tracking-wider mb-4 md:mb-0 p-0 text-blue-600 capitalize">
                        More Than Portfolio Managers
                    </h2>
                </div>
                <div class="col-span-full md:col-span-2">
                    <div class="w-full md:w-4/5 lg:w-3/4">
                        <p class="mb-4 md:text-xl" data-aos="fade-up">
                            We provide a comprehensive suite of financial services, from crypto investments and
                            diversified portfolios to strategic financial planning. Our tailored approach ensures every
                            client receives customized advice aligned with their specific objectives.
                        </p>
                        <p class="mb-4 md:text-xl" data-aos="fade-up">
                            Our seasoned advisors are always ready to guide you, address your questions, and help you
                            choose the right investment accounts with clarity and confidence.
                        </p>
                        <p class="md:text-xl" data-aos="fade-up">
                            Since day one, we’ve supported our clients in achieving their financial ambitions through
                            smart tools, expert insights, and data-driven strategies—delivering real impact for
                            individuals and the wider financial community.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- stats --}}
    <section class="bg-center bg-cover my-16" style="background-image: url('/images/about/hero.jpg')">
        <div class="bg-gray-900 bg-opacity-80 py-24">
            <div class="max-w-4xl mx-auto px-6 md:px-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="flex flex-col items-center gap-3 border-b border-gray-300 pb-6 md:pb-0 md:border-transparent">
                    <h2 class="text-4xl md:text-6xl font-bold text-gray-100">
                        5,678</h2>
                    <span class="text-gray-50 text-xl capitalize tracking-wider font-semibold sedan-regular">Active
                        Investors</span>
                </div>
                <div
                    class="flex flex-col items-center gap-3 border-b border-gray-300 pb-6 md:pb-0 md:border-transparent">
                    <h2 class="text-4xl md:text-6xl font-bold text-gray-100">
                        $400M+</h2>
                    <span class="text-gray-50 text-xl capitalize tracking-wider font-semibold sedan-regular">Active
                        Deposits</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <h2 class="text-4xl md:text-6xl font-bold text-gray-100">
                        $250M+</h2>
                    <span class="text-gray-50 text-xl capitalize tracking-wider font-semibold sedan-regular">Funds
                        withdrawn</span>
                </div>
            </div>
        </div>
    </section>
    {{-- Board of directors --}}
    <section class="py-12 md:py-24" id="team">
        <div class="flex flex-col px-6 md:px-10">
            <div data-aos="fade-up" class="w-full flex mb-4 md:mb-10">
                <h2 class="sedan-regular-bold text-xl md:text-5xl font-bold">Board of <span
                        class="text-blue-600">Directors</span></h2>
            </div>
            <div data-aos="fade-up"
                class="w-full grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-x-4 gap-y-6 md:gap-x-6 md:gap-y-10 md:gap-10">
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Marcus D. Hartley</h4>
                    <p class="text-sm">Executive & Board Director </p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Leo Andersson</h4>
                    <p class="text-sm">Global Markets Advisor</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Stanley Druckenmiller</h4>
                    <p class="text-sm">Founder, Duquesne Capital</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Joseph Yong Bum Bae</h4>
                    <p class="text-sm">Founder & CO-CEO, KKR Capital</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Keith Rabois</h4>
                    <p class="text-sm">GP, Founders Fund. Ex-MD, Khosla Ventures</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Gabriel Stone</h4>
                    <p class="text-sm">Executive Financial Planner</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Olivia Trent</h4>
                    <p class="text-sm">Senior Wealth Advisor</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Executive & CFA Charterholder</h4>
                    <p class="text-sm">Executive & CFA Charterholder</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">David Linwood</h4>
                    <p class="text-sm">Chartered Wealth Manager</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Sheila Anderson</h4>
                    <p class="text-sm">Advisor and Chartered Investment manager</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Natalie Rivers </h4>
                    <p class="text-sm">Portfolio Director</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Map --}}
    <section class="py-16 md:py-24 bg-primary-white">
        <div class="flex px-4 md:px-10">
            <div class="w-full text-primary">
                <h2
                    class="futura-medium text-xl md:text-5xl font-extrabold tracking-wider mb-4 md:mb-10 text-blue-600 capitalize">
                    Our Locations
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="w-full order-2 md:order-1">
                        <div class="flex md:mx-6 py-6 border-b border-gray-500">
                            <span class="mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-building-skyscraper text-blue-600"
                                    width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 21l18 0" />
                                    <path d="M5 21v-14l8 -4v18" />
                                    <path d="M19 21v-10l-6 -4" />
                                    <path d="M9 9l0 .01" />
                                    <path d="M9 12l0 .01" />
                                    <path d="M9 15l0 .01" />
                                    <path d="M9 18l0 .01" />
                                </svg>
                            </span>
                            <span class="flex flex-col max-w-[80%]">
                                <h4 class="text-xl md:text-3xl font-semibold text-primary-light text-wrap">
                                    {{ config('app.company.address') }}</h4>
                            </span>
                        </div>
                    </div>
                    <div class="h-[60vh] md:h-auto w-full max-w-full overflow-x-scroll order-1 md:order-2">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18347.474417809433!2d-5.1233449952455326!3d54.912850627093306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48623b3a00660d09%3A0xeda5a02b2221c62b!2sLeswalt%2C%20Stranraer%20DG9%200LT%2C%20UK!5e0!3m2!1sen!2sng!4v1749420078908!5m2!1sen!2sng"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Call to action --}}
    <section class="min-h-screen py-16 md:py-24 bg-gray-900">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 px-4 md:px-10">
            <div class="flex flex-col">
                <h2 class="text-3xl md:text-6xl sedan-regular font-bold">
                    Take control — invest in <span class="text-blue-600">minutes</span>
                </h2>
            </div>
            <div class="flex flex-col">
                <x-validation-errors class="mb-4" />
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-6 md:mb-8">
                        <x-label for="email" value="{{ __('Email Address') }}"
                            class="text-primary-light text-md" />
                        <x-input placeholder="Enter your email address" id="email"
                            class="block mt-1 w-full bg-transparent text-primary-light placeholder:text-gray-400 focus:border-blue-600 py-4"
                            type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>
                    <div class="mt-6 md:mb-8">
                        <x-label for="password" value="{{ __('Password') }}" class="text-primary-light text-md" />
                        <x-input placeholder="create a secure password" id="password"
                            class="block mt-1 w-full bg-transparent text-primary-light placeholder:text-gray-400 focus:border-blue-600 py-4"
                            type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-6 md:mb-8">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}"
                            class="text-primary-light text-md" />
                        <x-input placeholder="Repeat secure password" id="password_confirmation"
                            class="block mt-1 w-full bg-transparent text-primary-light placeholder:text-gray-400 focus:border-blue-600 py-4"
                            type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required
                                        class="bg-transparent border-blue-600 checked:bg-gray-700 checked:text-primary-light" />

                                    <div class="ml-2 text-primary-light">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' =>
                                                '<a target="_blank" href="' .
                                                route('terms.show') .
                                                '" class="underline text-sm text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">' .
                                                __('Terms of Service') .
                                                '</a>',
                                            'privacy_policy' =>
                                                '<a target="_blank" href="' .
                                                route('policy.show') .
                                                '" class="underline text-sm text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">' .
                                                __('Privacy Policy') .
                                                '</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-md text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="ml-4 px-8 py-4 rounded-xl bg-blue-600 hover:bg-blue-700 text-lighter">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- FAQs --}}
    <section class="py-16 md:py-24" id="faqs">
        <div class="container mx-auto px-4 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
                <div class="flex justify-start">
                    <h2 class="text-3xl md:text-6xl font-semibold sedan-regular">FAQS</h2>
                </div>
                <div class="flex flex-col">
                    <x-faq-list></x-faq-list>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
