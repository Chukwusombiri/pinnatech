<x-app-layout>
    <!-- Hero Section -->
    <section class="md:h-[70vh] py-16 bg-gray-950 text-primary-light">
        <div class="h-full flex flex-col items-center justify-center px-4 md:px-10">
            <h1
                class="sedan-regular text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold mb-4 text-center max-w-4xl">
                Welcome to the {{ $appName }} Knowledge Hub
            </h1>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl mt-2 md:mt-6 text-center max-w-3xl">
                Explore helpful guides and answers to all your questions.
            </p>
            <x-link-two href="#start" class="mt-4 md:mt-10">Start Exploring</x-link-two>

        </div>
    </section>
    {{-- intro --}}
    <section class="text-primary-light py-10 md:py-24" id="start">
        <div class="px-6 md:px-10 flex">
            <div class="w-full grid grid-cols-1 md:grid-cols-3 justify-center gap-4 lg:gap-8">
                <div class="col-span-3 md:col-span-1">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl futura-medium w-full max-w-[70%]">
                        {{ $appName }} Usage <span class="text-indigo-600">Guide</span>
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2">
                    <div class="w-full md:max-w-[90%] flex flex-col">
                        <p class="text-base md:text-lg lg:text-base xl:text-lg mb-4">
                            Learn how to make your first investment, withdraw your income, and explore much more. We’re
                            here to make your journey rewarding!
                        </p>
                        <ul class="mb-4 md:mb-6">
                            <li class="mb-3 md:mb-2">
                                <a href="#register" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>Create your account</span>
                                </a>
                            </li>
                            <li class="mb-3 md:mb-2">
                                <a href="#investment" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>Make your first deposit</span>
                                </a>
                            </li>
                            <li class="mb-3 md:mb-2">
                                <a href="#withdrawal" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>Withdraw your returns step by step</span>
                                </a>
                            </li>
                            <li>
                                <a href="#referrals" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>Grow your network with referrals</span>
                                </a>
                            </li>
                            <li class="mb-3 md:mb-2">
                                <a href="#forgot-password" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>Reset a forgotten password</span>
                                </a>
                            </li>
                            <li class="mb-3 md:mb-2">
                                <a href="#change-pasword" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>Change your account password</span>
                                </a>
                            </li>
                            <li class="mb-3 md:mb-2">
                                <a href="#session" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>Manage your active sessions</span>
                                </a>
                            </li>
                            <li>
                                <a href="#delete-account" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>Delete your account</span>
                                </a>
                            </li>
                        </ul>
                        <p class="text-lg text-primary-light mb-2">
                            Need more help? Reach out by email — we’re ready to assist you!
                        </p>
                        <div class="flex mt-2">
                            <x-link-two href="mailto:{{ config('mail.mainTo.address') }}"
                                class="font-semibold">Contact Us</x-link-two>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- how tos --}}
    <section class="py-10 md:py-24 h-full">
        <div class="container mx-auto px-4 md:px-10">
            {{-- registration --}}
            <div
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-gray-500">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl md:text-left mb-2 md:mb-0">
                        Create your account
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 1</h4>
                                <p class="text-lg">Click “Get Started” on our homepage or use the “Login” button in the
                                    menu.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 2</h4>
                                <p class="text-lg">Select “New here? Create an account” to open the sign-up page.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 3</h4>
                                <p class="text-lg">Complete the registration form and submit it.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 4</h4>
                                <p class="text-lg">After registering, follow the prompt to verify your email.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 5</h4>
                                <p class="text-lg">Open the “Verify Email” message in your inbox and confirm your
                                    email.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 6</h4>
                                <p class="text-lg">You’ll be redirected to your dashboard. Welcome aboard!</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- depositing --}}
            <div id="investment"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-gray-500">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-2 md:mb-0">
                        Make your first deposit
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg">Log in to your {{ $appName }} account.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg">Pick your preferred plan from your dashboard.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg">Complete the deposit form:</p>
                                <ul class="ml-4 list-disc">
                                    <li>Enter an amount within the plan’s range.</li>
                                    <li>Select your crypto funding option.</li>
                                    <li>Submit the form.</li>
                                </ul>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p class="text-lg">Follow the deposit instructions on the next page.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 5</h4>
                                <p class="text-lg">Copy the wallet address, send your crypto, and take a screenshot.
                                </p>
                            </li>
                            <li class="mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 6</h4>
                                <p class="text-lg">Upload the screenshot under “Deposits” to speed up approval.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- withdrawal --}}
            <div id="withdrawal"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-gray-500">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-2 md:mb-0">
                        Grow your network with referrals
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg">Log in to your account and click the “Withdrawals” button on your
                                    dashboard — you’ll be taken straight to the withdrawals page.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg">Enter the amount you’d like to withdraw — just make sure it doesn’t
                                    exceed your available <strong>ROI</strong>.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg">If you’ve already added your crypto wallets, simply select one. If
                                    not, click “Add Wallet” to set yours up.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p class="text-lg">Complete the form with your crypto name and wallet address, save it,
                                    then select your wallet and submit the withdrawal request.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 5</h4>
                                <p class="text-lg">That’s it! Our team will review and approve your request, then your
                                    funds will be on their way to you soon.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- referrals --}}
            <div id="referrals"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-gray-500">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-4 md:mb-6">
                        Grow your network with referrals
                    </h2>
                    <p class="text-lg md:text-xl mb-2 md:mb-0">
                        When you invite a friend to {{ $appName }}, you will earn 10% of your friend’s initial
                        deposit.
                    </p>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <p class="text-lg md:text-xl mb-px md:mb-2 font-semibold">How to Refer a Friend</p>
                        <p class="text-lg mb-4">Invite your friends in just a few simple steps:</p>
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg">Go to our website and log in to your account.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg">Open the menu and select “Referrals” to access your referral page.
                                </p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg">Scroll down to find your referral link. Click the clipboard icon to
                                    copy it, then share it with your friends, family, or colleagues.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p class="text-lg">When someone signs up and deposits funds through your link, you’ll
                                    earn 10% of their deposit. Your referral reward will be added to your portfolio and
                                    you’ll get a confirmation email.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- forgot-password --}}
            <div id="forgot-password"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-gray-500">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-2 md:mb-0">
                        Reset a forgotten password
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg">Go to the login page and click the “Forgot password…” link. You’ll
                                    be taken to the password reset page.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg">Enter your email address and submit the form. Check your inbox for a
                                    password reset email. If you don’t see it, return to the reset page and request a
                                    new link.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg">Open the email and click the “Reset Password” button. This will
                                    redirect you back to our website.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p class="text-lg">Keep your email address the same. Enter your new password, confirm
                                    it, and submit the form. You’ll be redirected to the login page — sign in with your
                                    new password.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- change-password --}}
            <div id="change-password"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24  border-b border-gray-500">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-2 md:mb-0">
                        Change your account password
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg">Log in to your account and open the menu to select “Profile”.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg">On your profile page, click “Change Password”. Enter your current
                                    password, then your new password, and confirm it. Once all fields are filled out,
                                    click “Save” to update your password.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg">After saving your new password, you’ll be logged out automatically.
                                    Log back in using your new password.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- session --}}
            <div id="session"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-gray-500">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-2 md:mb-0">
                        Manage your active sessions
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg">Log in to your account, go to your dashboard, and select “Profile”
                                    from the menu. This will take you to your Profile Information page.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg">Scroll down until you find the section labeled “Browser Sessions.”
                                </p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg">Click the “Log Out Other Browser Sessions” button.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p class="text-lg">A confirmation prompt will appear asking for your password. Enter
                                    your password and submit it. That’s it — you’re now logged out from all other
                                    devices!</p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            {{-- delete-account --}}
            <div id="delete-account" class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center md:pb-16">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-2 md:mb-0">
                        Delete your account
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg">Log in to your account, go to your dashboard, and click “Profile”.
                                    This will take you to your Profile Information page.</p>
                            </li>
                            <li class="mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg">Scroll down until you find the section labeled “Delete Account”.</p>
                            </li>
                            <li class="mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg">Click the “Delete Account” button.</p>
                            </li>
                            <li class="mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p class="text-lg">A confirmation prompt will appear asking for your password. Enter
                                    your password and submit it. Your account will then be permanently deleted.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FAQs --}}
    <section class="bg-primary-white py-16 md:py-24" id="faqs">
        <div class="container mx-auto px-4 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
                <div class="flex justify-start">
                    <h2 class="text-3xl md:text-6xl font-semibold sedan-regular">FAQS</h2>
                </div>
                <div class="flex flex-col">
                    <x-faq-list />
                </div>
            </div>
        </div>
    </section>
    {{-- cta --}}
    <section class="bg-gray-950 py-12 px-6 lg:px-10">
        <div class="bg-slate-900 rounded-xl lg:flex lg:items-center lg:justify-between w-full mx-auto p-8 lg:p-12">
            <div class="flex flex-col gap-2 lg:gap-4 items-center lg:items-start mb-4 lg:mb-0">
                <h2 class="text-4xl lg:text-5xl font-bold sedan-regular-bold sm:text-4xl text-gray-200">
                    Your first time here?
                </h2>
                <p class="text-lg text-gray-300">
                    Experience streamlined, simpler and more secure way to invest is here.
                </p>
            </div>
            <div class="lg:flex-shrink-0 flex items-center justify-center">
                <x-link-one href="{{ route('user.deposit.pricingTable') }}">
                    Get started
                </x-link-one>
            </div>
        </div>
    </section>
</x-app-layout>
