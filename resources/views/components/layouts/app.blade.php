<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Home</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="bg-[#ff6b81] h-screen">
    <div class=" max-w-[1320px] mx-auto">
        <!-- ========== HEADER ========== -->
        <header class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full py-7">
            <nav
                class="relative max-w-7xl w-full flex flex-wrap md:grid md:grid-cols-12 basis-full items-center px-4 md:px-6 md:px-8 mx-auto"
                aria-label="Global">
                <div class="md:col-span-3">
                    <!-- Logo -->
                    <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                       href="../templates/creative-agency/index.html" aria-label="Preline">
                        <svg class="w-28 h-auto" width="116" height="32" viewBox="0 0 116 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M33.5696 30.8182V11.3182H37.4474V13.7003H37.6229C37.7952 13.3187 38.0445 12.9309 38.3707 12.5369C38.7031 12.1368 39.134 11.8045 39.6634 11.5398C40.1989 11.2689 40.8636 11.1335 41.6577 11.1335C42.6918 11.1335 43.6458 11.4044 44.5199 11.946C45.3939 12.4815 46.0926 13.291 46.6158 14.3743C47.139 15.4515 47.4006 16.8026 47.4006 18.4276C47.4006 20.0095 47.1451 21.3452 46.6342 22.4347C46.1295 23.518 45.4401 24.3397 44.5661 24.8999C43.6982 25.4538 42.7256 25.7308 41.6484 25.7308C40.8852 25.7308 40.2358 25.6046 39.7003 25.3523C39.1709 25.0999 38.737 24.7829 38.3984 24.4013C38.0599 24.0135 37.8014 23.6226 37.6229 23.2287H37.5028V30.8182H33.5696ZM37.4197 18.4091C37.4197 19.2524 37.5367 19.9879 37.7706 20.6158C38.0045 21.2436 38.343 21.733 38.7862 22.0838C39.2294 22.4285 39.768 22.6009 40.402 22.6009C41.0421 22.6009 41.5838 22.4254 42.027 22.0746C42.4702 21.7176 42.8056 21.2251 43.0334 20.5973C43.2673 19.9633 43.3842 19.2339 43.3842 18.4091C43.3842 17.5904 43.2704 16.8703 43.0426 16.2486C42.8149 15.6269 42.4794 15.1406 42.0362 14.7898C41.593 14.4389 41.0483 14.2635 40.402 14.2635C39.7618 14.2635 39.2202 14.4328 38.777 14.7713C38.34 15.1098 38.0045 15.59 37.7706 16.2116C37.5367 16.8333 37.4197 17.5658 37.4197 18.4091ZM49.2427 25.5V11.3182H53.0559V13.7926H53.2037C53.4622 12.9124 53.8961 12.2476 54.5055 11.7983C55.1149 11.3428 55.8166 11.1151 56.6106 11.1151C56.8076 11.1151 57.02 11.1274 57.2477 11.152C57.4754 11.1766 57.6755 11.2105 57.8478 11.2536V14.7436C57.6632 14.6882 57.4077 14.639 57.0815 14.5959C56.7553 14.5528 56.4567 14.5312 56.1859 14.5312C55.6073 14.5312 55.0903 14.6574 54.6348 14.9098C54.1854 15.156 53.8284 15.5007 53.5638 15.9439C53.3052 16.3871 53.176 16.898 53.176 17.4766V25.5H49.2427ZM64.9043 25.777C63.4455 25.777 62.1898 25.4815 61.1373 24.8906C60.0909 24.2936 59.2845 23.4503 58.7182 22.3608C58.1519 21.2652 57.8688 19.9695 57.8688 18.4737C57.8688 17.0149 58.1519 15.7346 58.7182 14.6328C59.2845 13.531 60.0816 12.6723 61.1096 12.0568C62.1437 11.4413 63.3563 11.1335 64.7474 11.1335C65.683 11.1335 66.5539 11.2843 67.3603 11.5859C68.1728 11.8814 68.8806 12.3277 69.4839 12.9247C70.0932 13.5218 70.5672 14.2727 70.9057 15.1776C71.2443 16.0762 71.4135 17.1288 71.4135 18.3352V19.4155H59.4384V16.978H67.7111C67.7111 16.4117 67.588 15.91 67.3418 15.473C67.0956 15.036 66.754 14.6944 66.317 14.4482C65.8861 14.1958 65.3844 14.0696 64.812 14.0696C64.2149 14.0696 63.6856 14.2081 63.2239 14.4851C62.7684 14.7559 62.4114 15.1222 62.1529 15.5838C61.8944 16.0393 61.762 16.5471 61.7559 17.1072V19.4247C61.7559 20.1264 61.8851 20.7327 62.1437 21.2436C62.4083 21.7545 62.7807 22.1484 63.2608 22.4254C63.741 22.7024 64.3103 22.8409 64.9689 22.8409C65.406 22.8409 65.8061 22.7794 66.1692 22.6562C66.5324 22.5331 66.8432 22.3485 67.1018 22.1023C67.3603 21.8561 67.5572 21.5545 67.6927 21.1974L71.3304 21.4375C71.1458 22.3116 70.7672 23.0748 70.1948 23.7273C69.6285 24.3736 68.896 24.8783 67.9974 25.2415C67.1048 25.5985 66.0738 25.777 64.9043 25.777ZM77.1335 6.59091V25.5H73.2003V6.59091H77.1335ZM79.5043 25.5V11.3182H83.4375V25.5H79.5043ZM81.4801 9.49006C80.8954 9.49006 80.3937 9.29616 79.9752 8.90838C79.5628 8.51444 79.3566 8.04356 79.3566 7.49574C79.3566 6.95407 79.5628 6.48935 79.9752 6.10156C80.3937 5.70762 80.8954 5.51065 81.4801 5.51065C82.0649 5.51065 82.5635 5.70762 82.9759 6.10156C83.3944 6.48935 83.6037 6.95407 83.6037 7.49574C83.6037 8.04356 83.3944 8.51444 82.9759 8.90838C82.5635 9.29616 82.0649 9.49006 81.4801 9.49006ZM89.7415 17.3011V25.5H85.8083V11.3182H89.5569V13.8203H89.723C90.037 12.9955 90.5632 12.343 91.3019 11.8629C92.0405 11.3767 92.9361 11.1335 93.9887 11.1335C94.9735 11.1335 95.8322 11.349 96.5647 11.7798C97.2971 12.2107 97.8665 12.8262 98.2728 13.6264C98.679 14.4205 98.8821 15.3684 98.8821 16.4702V25.5H94.9489V17.1719C94.9551 16.304 94.7335 15.6269 94.2841 15.1406C93.8348 14.6482 93.2162 14.402 92.4283 14.402C91.8989 14.402 91.4311 14.5159 91.0249 14.7436C90.6248 14.9714 90.3109 15.3037 90.0831 15.7408C89.8615 16.1716 89.7477 16.6918 89.7415 17.3011ZM107.665 25.777C106.206 25.777 104.951 25.4815 103.898 24.8906C102.852 24.2936 102.045 23.4503 101.479 22.3608C100.913 21.2652 100.63 19.9695 100.63 18.4737C100.63 17.0149 100.913 15.7346 101.479 14.6328C102.045 13.531 102.842 12.6723 103.87 12.0568C104.905 11.4413 106.117 11.1335 107.508 11.1335C108.444 11.1335 109.315 11.2843 110.121 11.5859C110.934 11.8814 111.641 12.3277 112.245 12.9247C112.854 13.5218 113.328 14.2727 113.667 15.1776C114.005 16.0762 114.174 17.1288 114.174 18.3352V19.4155H102.199V16.978H110.472C110.472 16.4117 110.349 15.91 110.103 15.473C109.856 15.036 109.515 14.6944 109.078 14.4482C108.647 14.1958 108.145 14.0696 107.573 14.0696C106.976 14.0696 106.446 14.2081 105.985 14.4851C105.529 14.7559 105.172 15.1222 104.914 15.5838C104.655 16.0393 104.523 16.5471 104.517 17.1072V19.4247C104.517 20.1264 104.646 20.7327 104.905 21.2436C105.169 21.7545 105.542 22.1484 106.022 22.4254C106.502 22.7024 107.071 22.8409 107.73 22.8409C108.167 22.8409 108.567 22.7794 108.93 22.6562C109.293 22.5331 109.604 22.3485 109.863 22.1023C110.121 21.8561 110.318 21.5545 110.454 21.1974L114.091 21.4375C113.907 22.3116 113.528 23.0748 112.956 23.7273C112.389 24.3736 111.657 24.8783 110.758 25.2415C109.866 25.5985 108.835 25.777 107.665 25.777Z"
                                class="fill-black dark:fill-white" fill="currentColor"/>
                            <path
                                d="M1 29.5V16.5C1 9.87258 6.37258 4.5 13 4.5C19.6274 4.5 25 9.87258 25 16.5C25 23.1274 19.6274 28.5 13 28.5H12"
                                class="stroke-black dark:stroke-white" stroke="currentColor" stroke-width="2"/>
                            <path
                                d="M5 29.5V16.66C5 12.1534 8.58172 8.5 13 8.5C17.4183 8.5 21 12.1534 21 16.66C21 21.1666 17.4183 24.82 13 24.82H12"
                                class="stroke-black dark:stroke-white" stroke="currentColor" stroke-width="2"/>
                            <circle cx="13" cy="16.5214" r="5" class="fill-black dark:fill-white" fill="currentColor"/>
                        </svg>
                    </a>
                    <!-- End Logo -->
                </div>

                <!-- Button Group -->
                <div class="flex items-center gap-x-2 ms-auto py-1 md:ps-6 md:order-3 md:col-span-3">
                    <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-gray-200 text-black hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:hover:bg-white/10 dark:text-white dark:hover:text-white">
                        Sign in
                    </button>
                    <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent bg-lime-400 text-black hover:bg-lime-500 transition disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-lime-500">
                        Hire us
                    </button>

                    <div class="md:hidden">
                        <button type="button"
                                class="hs-collapse-toggle size-[38px] flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700"
                                data-hs-collapse="#navbar-collapse-with-animation"
                                aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                            <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                 width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="3" x2="21" y1="6" y2="6"/>
                                <line x1="3" x2="21" y1="12" y2="12"/>
                                <line x1="3" x2="21" y1="18" y2="18"/>
                            </svg>
                            <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4"
                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"/>
                                <path d="m6 6 12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- End Button Group -->

                <!-- Collapse -->
                <div id="navbar-collapse-with-animation"
                     class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block md:w-auto md:basis-auto md:order-2 md:col-span-6">
                    <div
                        class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:justify-center md:items-center md:gap-y-0 md:gap-x-7 md:mt-0">
                        <div>
                            <a class="relative inline-block text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 dark:text-white"
                               href="#" aria-current="page">Work</a>
                        </div>
                        <div>
                            <a class="inline-block text-black hover:text-gray-600 dark:text-white dark:hover:text-neutral-300"
                               href="#">Services</a>
                        </div>
                        <div>
                            <a class="inline-block text-black hover:text-gray-600 dark:text-white dark:hover:text-neutral-300"
                               href="#">About</a>
                        </div>
                        <div>
                            <a class="inline-block text-black hover:text-gray-600 dark:text-white dark:hover:text-neutral-300"
                               href="#">Careers</a>
                        </div>
                        <div>
                            <a class="inline-block text-black hover:text-gray-600 dark:text-white dark:hover:text-neutral-300"
                               href="#">Blog</a>
                        </div>
                    </div>
                </div>
                <!-- End Collapse -->
            </nav>
        </header>
        <!-- ========== END HEADER ========== -->

        <!-- Hero -->
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Grid -->
            <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
                <div>
                    <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">
                        Start your journey with <span class="text-blue-600">Preline</span></h1>
                    <p class="mt-3 text-lg text-gray-800 dark:text-neutral-400">Hand-picked professionals and
                        expertly
                        crafted components, designed for any kind of entrepreneur.</p>

                    <!-- Buttons -->
                    <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                           href="#">
                            Get started
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"/>
                            </svg>
                        </a>
                        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                           href="#">
                            Contact sales team
                        </a>
                    </div>
                    <!-- End Buttons -->

                    <!-- Review -->
                    <div class="mt-6 lg:mt-10 grid grid-cols-2 gap-x-5">
                        <!-- Review -->
                        <div class="py-5">
                            <div class="flex space-x-1">
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                                     viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                        fill="currentColor"/>
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                                     viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                        fill="currentColor"/>
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                                     viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                        fill="currentColor"/>
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                                     viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                        fill="currentColor"/>
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                                     viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                        fill="currentColor"/>
                                </svg>
                            </div>

                            <p class="mt-3 text-sm text-gray-800 dark:text-neutral-200">
                                <span class="font-bold">4.6</span> /5 - from 12k reviews
                            </p>

                            <div class="mt-5">
                                <!-- Star -->
                                <svg class="h-auto w-16 text-gray-800 dark:text-white" width="80" height="27"
                                     viewBox="0 0 80 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.558 9.74046H11.576V12.3752H17.9632C17.6438 16.0878 14.5301 17.7245 11.6159 17.7245C7.86341 17.7245 4.58995 14.7704 4.58995 10.6586C4.58995 6.62669 7.70373 3.51291 11.6159 3.51291C14.6498 3.51291 16.4063 5.42908 16.4063 5.42908L18.2426 3.51291C18.2426 3.51291 15.8474 0.878184 11.4961 0.878184C5.94724 0.838264 1.67578 5.50892 1.67578 10.5788C1.67578 15.5289 5.70772 20.3592 11.6558 20.3592C16.8854 20.3592 20.7177 16.8063 20.7177 11.4969C20.7177 10.3792 20.558 9.74046 20.558 9.74046Z"
                                        fill="currentColor"/>
                                    <path
                                        d="M27.8621 7.78442C24.1894 7.78442 21.5547 10.6587 21.5547 14.012C21.5547 17.4451 24.1096 20.3593 27.9419 20.3593C31.415 20.3593 34.2094 17.7645 34.2094 14.0918C34.1695 9.94011 30.896 7.78442 27.8621 7.78442ZM27.902 10.2994C29.6984 10.2994 31.415 11.7764 31.415 14.0918C31.415 16.4072 29.7383 17.8842 27.902 17.8842C25.906 17.8842 24.3491 16.2874 24.3491 14.0519C24.3092 11.8962 25.8661 10.2994 27.902 10.2994Z"
                                        fill="currentColor"/>
                                    <path
                                        d="M41.5964 7.78442C37.9238 7.78442 35.2891 10.6587 35.2891 14.012C35.2891 17.4451 37.844 20.3593 41.6763 20.3593C45.1493 20.3593 47.9438 17.7645 47.9438 14.0918C47.9038 9.94011 44.6304 7.78442 41.5964 7.78442ZM41.6364 10.2994C43.4328 10.2994 45.1493 11.7764 45.1493 14.0918C45.1493 16.4072 43.4727 17.8842 41.6364 17.8842C39.6404 17.8842 38.0835 16.2874 38.0835 14.0519C38.0436 11.8962 39.6004 10.2994 41.6364 10.2994Z"
                                        fill="currentColor"/>
                                    <path
                                        d="M55.0475 7.82434C51.6543 7.82434 49.0195 10.7784 49.0195 14.0918C49.0195 17.8443 52.0934 20.3992 54.9676 20.3992C56.764 20.3992 57.6822 19.7205 58.4407 18.8822V20.1198C58.4407 22.2754 57.1233 23.5928 55.1273 23.5928C53.2111 23.5928 52.2531 22.1557 51.8938 21.3573L49.4587 22.3553C50.297 24.1517 52.0135 26.0279 55.0874 26.0279C58.4407 26.0279 60.9956 23.9122 60.9956 19.481V8.18362H58.3608V9.26147C57.6423 8.38322 56.5245 7.82434 55.0475 7.82434ZM55.287 10.2994C56.9237 10.2994 58.6403 11.7365 58.6403 14.1317C58.6403 16.6068 56.9636 17.9241 55.2471 17.9241C53.4507 17.9241 51.774 16.4471 51.774 14.1716C51.8139 11.6966 53.5305 10.2994 55.287 10.2994Z"
                                        fill="currentColor"/>
                                    <path
                                        d="M72.8136 7.78442C69.62 7.78442 66.9453 10.2994 66.9453 14.0519C66.9453 18.004 69.9393 20.3593 73.093 20.3593C75.7278 20.3593 77.4044 18.8822 78.3625 17.6048L76.1669 16.1277C75.608 17.006 74.6499 17.8443 73.093 17.8443C71.3365 17.8443 70.5381 16.8862 70.0192 15.9281L78.4423 12.4152L78.0032 11.3772C77.1649 9.46107 75.2886 7.78442 72.8136 7.78442ZM72.8934 10.2196C74.0511 10.2196 74.8495 10.8184 75.2487 11.5768L69.6599 13.9321C69.3405 12.0958 71.097 10.2196 72.8934 10.2196Z"
                                        fill="currentColor"/>
                                    <path d="M62.9531 19.9999H65.7076V1.47693H62.9531V19.9999Z"
                                          fill="currentColor"/>
                                </svg>
                                <!-- End Star -->
                            </div>
                        </div>
                        <!-- End Review -->

                        <!-- Review -->
                        <div class="py-5">
                            <div class="flex space-x-1">
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                                     viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                        fill="currentColor"/>
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                                     viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                        fill="currentColor"/>
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                                     viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                        fill="currentColor"/>
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                                     viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                        fill="currentColor"/>
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                                     viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M49.6867 20.0305C50.2889 19.3946 49.9878 18.1228 49.0846 18.1228L33.7306 15.8972C33.4296 15.8972 33.1285 15.8972 32.8275 15.2613L25.9032 0.317944C25.6021 0 25.3011 0 25 0V42.6046C25 42.6046 25.3011 42.6046 25.6021 42.6046L39.7518 49.9173C40.3539 50.2352 41.5581 49.5994 41.2571 48.6455L38.5476 32.4303C38.5476 32.1124 38.5476 31.7944 38.8486 31.4765L49.6867 20.0305Z"
                                        fill="transparent"/>
                                    <path
                                        d="M0.313299 20.0305C-0.288914 19.3946 0.0122427 18.1228 0.915411 18.1228L16.2694 15.8972C16.5704 15.8972 16.8715 15.8972 17.1725 15.2613L24.0968 0.317944C24.3979 0 24.6989 0 25 0V42.6046C25 42.6046 24.6989 42.6046 24.3979 42.6046L10.2482 49.9173C9.64609 50.2352 8.44187 49.5994 8.74292 48.6455L11.4524 32.4303C11.4524 32.1124 11.4524 31.7944 11.1514 31.4765L0.313299 20.0305Z"
                                        fill="currentColor"/>
                                </svg>
                            </div>

                            <p class="mt-3 text-sm text-gray-800 dark:text-neutral-200">
                                <span class="font-bold">4.8</span> /5 - from 5k reviews
                            </p>

                            <div class="mt-5">
                                <!-- Star -->
                                <svg class="h-auto w-16 text-gray-800 dark:text-white" width="110" height="28"
                                     viewBox="0 0 110 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M66.6601 8.35107C64.8995 8.35107 63.5167 8.72875 62.1331 9.48265C62.1331 5.4582 62.1331 1.81143 62.2594 0.554199L53.8321 2.06273V2.81736L54.7124 2.94301C55.8433 3.19431 56.2224 3.82257 56.4715 5.33255C56.725 8.35107 56.5979 24.4496 56.4715 27.0912C58.7354 27.5945 61.1257 27.9722 63.5159 27.9722C70.1819 27.9722 74.2064 23.8213 74.2064 17.281C74.2064 12.1249 70.9366 8.35107 66.6601 8.35107ZM63.7672 26.5878C63.2639 26.5878 62.6342 26.5878 62.258 26.4629C62.1316 24.7023 62.0067 17.281 62.1316 10.7413C62.8862 10.4893 63.3888 10.3637 64.0185 10.3637C66.7872 10.3637 68.2965 13.6335 68.2965 17.6572C68.2957 22.6898 66.4088 26.5878 63.7672 26.5878ZM22.1363 1.0568H0V2.18838L1.25796 2.31403C2.89214 2.56533 3.52184 3.57127 3.77242 5.9608C4.15082 10.4886 4.02445 18.6646 3.77242 22.5619C3.52112 24.9522 2.89287 26.0845 1.25796 26.2087L0 26.4615V27.4674H14.2123V26.4615L12.703 26.2087C11.0681 26.0838 10.4392 24.9522 10.1879 22.5619C10.0615 20.9263 9.93583 18.2847 9.93583 15.0156L12.9543 15.1413C14.8413 15.1413 15.7208 16.6505 16.0985 18.7881H17.2308V9.86106H16.0985C15.7201 11.9993 14.8413 13.5078 12.9543 13.5078L9.93655 13.6342C9.93655 9.35773 10.0622 5.33328 10.1886 2.94374H14.59C17.9869 2.94374 19.7475 5.08125 21.0047 8.85513L22.2626 8.47745L22.1363 1.0568Z"
                                        fill="currentColor"/>
                                    <path
                                        d="M29.3053 8.09998C35.5944 8.09998 38.7385 12.3764 38.7385 18.0358C38.7385 23.4439 35.2167 27.9731 28.9276 27.9731C22.6393 27.9731 19.4951 23.6959 19.4951 18.0358C19.4951 12.6277 23.0162 8.09998 29.3053 8.09998ZM28.9276 9.35793C26.1604 9.35793 25.4058 13.1311 25.4058 18.0358C25.4058 22.8149 26.6637 26.7137 29.1796 26.7137C32.0703 26.7137 32.8264 22.9405 32.8264 18.0358C32.8264 13.2567 31.5699 9.35793 28.9276 9.35793ZM75.8403 18.1622C75.8403 13.0054 79.1101 8.09998 85.5248 8.09998C90.8057 8.09998 93.3224 11.9995 93.3224 17.1555H81.6253C81.4989 21.8089 83.7628 25.2051 88.2913 25.2051C90.3038 25.2051 91.3098 24.7033 92.5685 23.8223L93.0703 24.4505C91.8124 26.2111 89.0459 27.9731 85.5248 27.9731C79.8647 27.9724 75.8403 23.9479 75.8403 18.1622ZM81.6253 15.7726L87.5366 15.6463C87.5366 13.1311 87.159 9.35793 85.0214 9.35793C82.8839 9.35793 81.7502 12.8791 81.6253 15.7726ZM108.291 9.10663C106.782 8.47693 104.77 8.09998 102.506 8.09998C97.8538 8.09998 94.9594 10.8665 94.9594 14.137C94.9594 17.4075 97.0955 18.7904 100.118 19.7971C103.261 20.9279 104.142 21.8089 104.142 23.3182C104.142 24.8275 103.01 26.2103 100.997 26.2103C98.6084 26.2103 96.8464 24.8275 95.4635 21.0536L94.5825 21.3063L94.7089 26.84C96.2181 27.4683 98.9846 27.9724 101.375 27.9724C106.28 27.9724 109.425 25.4557 109.425 21.5576C109.425 18.9161 108.041 17.4075 104.771 16.1489C101.249 14.766 99.992 13.8857 99.992 12.2501C99.992 10.6152 101.126 9.48286 102.635 9.48286C104.897 9.48286 106.407 10.8665 107.54 14.2627L108.42 14.0114L108.291 9.10663ZM55.0883 8.6033C52.9508 7.3468 49.1769 7.97433 47.1651 12.5028L47.29 8.1007L38.8642 9.73561V10.4902L39.7444 10.6159C40.8775 10.7423 41.3794 11.3705 41.5057 13.0062C41.757 16.0247 41.6314 21.3078 41.5057 23.9486C41.3794 25.4564 40.8775 26.2111 39.7444 26.3374L38.8642 26.4638V27.4697H50.5606V26.4638L49.0513 26.3374C47.7941 26.2111 47.4164 25.4564 47.29 23.9486C47.0387 21.5584 47.0387 16.7793 47.1651 13.7608C47.7933 12.8798 50.5606 12.1259 53.0757 13.7608L55.0883 8.6033Z"
                                        fill="currentColor"/>
                                </svg>
                                <!-- End Star -->
                            </div>
                        </div>
                        <!-- End Review -->
                    </div>
                    <!-- End Review -->
                </div>
                <!-- End Col -->

                <div class="relative ms-4">
                    <img class="w-full rounded-md"
                         src="https://images.unsplash.com/photo-1665686377065-08ba896d16fd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700&h=800&q=80"
                         alt="Image Description">
                    <div
                        class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-neutral-800 dark:via-neutral-900/0 dark:to-neutral-900/0"></div>

                    <!-- SVG-->
                    <div class="absolute bottom-0 start-0">
                        <svg class="w-2/3 ms-auto h-auto text-white dark:text-neutral-900" width="630" height="451"
                             viewBox="0 0 630 451" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="531" y="352" width="99" height="99" fill="currentColor"/>
                            <rect x="140" y="352" width="106" height="99" fill="currentColor"/>
                            <rect x="482" y="402" width="64" height="49" fill="currentColor"/>
                            <rect x="433" y="402" width="63" height="49" fill="currentColor"/>
                            <rect x="384" y="352" width="49" height="50" fill="currentColor"/>
                            <rect x="531" y="328" width="50" height="50" fill="currentColor"/>
                            <rect x="99" y="303" width="49" height="58" fill="currentColor"/>
                            <rect x="99" y="352" width="49" height="50" fill="currentColor"/>
                            <rect x="99" y="392" width="49" height="59" fill="currentColor"/>
                            <rect x="44" y="402" width="66" height="49" fill="currentColor"/>
                            <rect x="234" y="402" width="62" height="49" fill="currentColor"/>
                            <rect x="334" y="303" width="50" height="49" fill="currentColor"/>
                            <rect x="581" width="49" height="49" fill="currentColor"/>
                            <rect x="581" width="49" height="64" fill="currentColor"/>
                            <rect x="482" y="123" width="49" height="49" fill="currentColor"/>
                            <rect x="507" y="124" width="49" height="24" fill="currentColor"/>
                            <rect x="531" y="49" width="99" height="99" fill="currentColor"/>
                        </svg>
                    </div>
                    <!-- End SVG-->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Hero -->

        {{--<header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
            </div>
        </header>--}}
    </div>
</div>
<div class=" max-w-[1320px] mx-auto">
    <main>
        <!-- Icon Blocks -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 items-center gap-2">
                <!-- Icon Block -->
                <a class="group flex flex-col justify-center hover:bg-gray-50 rounded-xl p-4 md:p-7 dark:hover:bg-neutral-800"
                   href="#">
                    <div class="flex justify-center items-center size-12 bg-blue-600 rounded-xl">
                        <svg class="flex-shrink-0 size-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <rect width="10" height="14" x="3" y="8" rx="2"/>
                            <path d="M5 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2h-2.4"/>
                            <path d="M8 18h.01"/>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">
                            Responsive</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Responsive, and mobile-first project on the
                            web</p>
                        <span
                            class="mt-2 inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 group-hover:underline font-medium">
          Learn more
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
               viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
               stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </span>
                    </div>
                </a>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <a class="group flex flex-col justify-center hover:bg-gray-50 rounded-xl p-4 md:p-7 dark:hover:bg-neutral-800"
                   href="#">
                    <div class="flex justify-center items-center size-12 bg-blue-600 rounded-xl">
                        <svg class="flex-shrink-0 size-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 7h-9"/>
                            <path d="M14 17H5"/>
                            <circle cx="17" cy="17" r="3"/>
                            <circle cx="7" cy="7" r="3"/>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">
                            Customizable</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Components are easily customized and
                            extendable</p>
                        <span
                            class="mt-2 inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 group-hover:underline font-medium">
          Learn more
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
               viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
               stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </span>
                    </div>
                </a>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <a class="group flex flex-col justify-center hover:bg-gray-50 rounded-xl p-4 md:p-7 dark:hover:bg-neutral-800"
                   href="#">
                    <div class="flex justify-center items-center size-12 bg-blue-600 rounded-xl">
                        <svg class="flex-shrink-0 size-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">
                            Documentation</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Every component and plugin is well
                            documented</p>
                        <span
                            class="mt-2 inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 group-hover:underline font-medium">
          Learn more
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
               viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
               stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </span>
                    </div>
                </a>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <a class="group flex flex-col justify-center hover:bg-gray-50 rounded-xl p-4 md:p-7 dark:hover:bg-neutral-800"
                   href="#">
                    <div class="flex justify-center items-center size-12 bg-blue-600 rounded-xl">
                        <svg class="flex-shrink-0 size-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z"/>
                            <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">
                            24/7 Support</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Contact us 24 hours a day, 7 days a week</p>
                        <span
                            class="mt-2 inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 group-hover:underline font-medium">
          Learn more
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
               viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
               stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </span>
                    </div>
                </a>
                <!-- End Icon Block -->
            </div>
        </div>
        <!-- End Icon Blocks -->

        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Features -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->
                <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
                    <div>
                        <img class="rounded-xl"
                             src="https://images.unsplash.com/photo-1648737963503-1a26da876aca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=900&h=900&q=80"
                             alt="Image Description">
                    </div>
                    <!-- End Col -->

                    <div class="mt-5 sm:mt-10 lg:mt-0">
                        <div class="space-y-6 sm:space-y-8">
                            <!-- Title -->
                            <div class="space-y-2 md:space-y-4">
                                <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-neutral-200">
                                    We tackle the challenges start-ups face
                                </h2>
                                <p class="text-gray-500 dark:text-neutral-500">
                                    Besides working with start-up enterprises as a partner for digitalization, we have
                                    built enterprise products for common pain points that we have encountered in various
                                    products and projects.
                                </p>
                            </div>
                            <!-- End Title -->

                            <!-- List -->
                            <ul class="space-y-2 sm:space-y-4">
                                <li class="flex space-x-3">
            <span
                class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
              <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>

                                    <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
              <span class="font-bold">Easy & fast</span> designing
            </span>
                                </li>

                                <li class="flex space-x-3">
            <span
                class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
              <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>

                                    <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
              Powerful <span class="font-bold">features</span>
            </span>
                                </li>

                                <li class="flex space-x-3">
            <span
                class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
              <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>

                                    <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
              User Experience Design
            </span>
                                </li>
                            </ul>
                            <!-- End List -->
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Features -->

            <!-- Features -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->
                <div class="grid gap-6 grid-cols-2 sm:gap-12 lg:grid-cols-3 lg:gap-8">
                    <!-- Stats -->
                    <div>
                        <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-neutral-200">Accuracy
                            rate</h4>
                        <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-blue-600">99.95%</p>
                        <p class="mt-1 text-gray-500 dark:text-neutral-500">in fulfilling orders</p>
                    </div>
                    <!-- End Stats -->

                    <!-- Stats -->
                    <div>
                        <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-neutral-200">Startup
                            businesses</h4>
                        <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-blue-600">2,000+</p>
                        <p class="mt-1 text-gray-500 dark:text-neutral-500">partner with Preline</p>
                    </div>
                    <!-- End Stats -->

                    <!-- Stats -->
                    <div>
                        <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-neutral-200">Happy
                            customer</h4>
                        <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-blue-600">85%</p>
                        <p class="mt-1 text-gray-500 dark:text-neutral-500">this year alone</p>
                    </div>
                    <!-- End Stats -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Features -->

            <!-- Pricing -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Title -->
                <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Pricing</h2>
                    <p class="mt-1 text-gray-600 dark:text-neutral-400">Whatever your status, our offers evolve
                        according to your needs.</p>
                </div>
                <!-- End Title -->

                <!-- Switch -->
                <div class="flex justify-center items-center">
                    <label class="min-w-14 text-sm text-gray-500 me-3 dark:text-neutral-400">Monthly</label>

                    <input type="checkbox" id="hs-basic-with-description" class="relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600

    before:inline-block before:size-6 before:bg-white checked:before:bg-white before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-neutral-400 dark:checked:before:bg-white"
                           checked>

                    <label class="relative min-w-14 text-sm text-gray-500 ms-3 dark:text-neutral-400">
                        Annual
                        <span class="absolute -top-10 start-auto -end-28">
        <span class="flex items-center">
          <svg class="w-14 h-8 -me-6" width="45" height="25" viewBox="0 0 45 25" fill="none"
               xmlns="http://www.w3.org/2000/svg">
            <path
                d="M43.2951 3.47877C43.8357 3.59191 44.3656 3.24541 44.4788 2.70484C44.5919 2.16427 44.2454 1.63433 43.7049 1.52119L43.2951 3.47877ZM4.63031 24.4936C4.90293 24.9739 5.51329 25.1423 5.99361 24.8697L13.8208 20.4272C14.3011 20.1546 14.4695 19.5443 14.1969 19.0639C13.9242 18.5836 13.3139 18.4152 12.8336 18.6879L5.87608 22.6367L1.92723 15.6792C1.65462 15.1989 1.04426 15.0305 0.563943 15.3031C0.0836291 15.5757 -0.0847477 16.1861 0.187863 16.6664L4.63031 24.4936ZM43.7049 1.52119C32.7389 -0.77401 23.9595 0.99522 17.3905 5.28788C10.8356 9.57127 6.58742 16.2977 4.53601 23.7341L6.46399 24.2659C8.41258 17.2023 12.4144 10.9287 18.4845 6.96211C24.5405 3.00476 32.7611 1.27399 43.2951 3.47877L43.7049 1.52119Z"
                fill="currentColor" class="fill-gray-300 dark:fill-neutral-700"/>
          </svg>
          <span
              class="mt-3 inline-block whitespace-nowrap text-[11px] leading-5 font-semibold tracking-wide uppercase bg-blue-600 text-white rounded-full py-1 px-2.5">Save up to 10%</span>
        </span>
      </span>
                    </label>
                </div>
                <!-- End Switch -->

                <!-- Grid -->
                <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:items-center">
                    <!-- Card -->
                    <div
                        class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-neutral-800">
                        <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">Free</h4>
                        <span class="mt-7 font-bold text-5xl text-gray-800 dark:text-neutral-200">Free</span>
                        <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">Forever free</p>

                        <ul class="mt-7 space-y-2.5 text-sm">
                            <li class="flex space-x-2">
                                <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
            1 user
          </span>
                            </li>

                            <li class="flex space-x-2">
                                <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
            Plan features
          </span>
                            </li>

                            <li class="flex space-x-2">
                                <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
            Product support
          </span>
                            </li>
                        </ul>

                        <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600"
                           href="#">
                            Sign up
                        </a>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div
                        class="flex flex-col border-2 border-blue-600 text-center shadow-xl rounded-xl p-8 dark:border-blue-700">
                        <p class="mb-3"><span
                                class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg text-xs uppercase font-semibold bg-blue-100 text-blue-800 dark:bg-blue-600 dark:text-white">Most popular</span>
                        </p>
                        <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">Startup</h4>
                        <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-neutral-200">
        <span class="font-bold text-2xl -me-2">$</span>
        39
      </span>
                        <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">All the basics for starting a new
                            business</p>

                        <ul class="mt-7 space-y-2.5 text-sm">
                            <li class="flex space-x-2">
                                <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
            2 users
          </span>
                            </li>

                            <li class="flex space-x-2">
                                <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
            Plan features
          </span>
                            </li>

                            <li class="flex space-x-2">
                                <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
            Product support
          </span>
                            </li>
                        </ul>

                        <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                           href="#">
                            Sign up
                        </a>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div
                        class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-neutral-800">
                        <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">Team</h4>
                        <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-neutral-200">
        <span class="font-bold text-2xl -me-2">$</span>
        89
      </span>
                        <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">Everything you need for a growing
                            business</p>

                        <ul class="mt-7 space-y-2.5 text-sm">
                            <li class="flex space-x-2">
                                <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
            5 users
          </span>
                            </li>

                            <li class="flex space-x-2">
                                <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
            Plan features
          </span>
                            </li>

                            <li class="flex space-x-2">
                                <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
            Product support
          </span>
                            </li>
                        </ul>

                        <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600"
                           href="#">
                            Sign up
                        </a>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div
                        class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-neutral-800">
                        <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">Enterprise</h4>
                        <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-neutral-200">
        <span class="font-bold text-2xl -me-2">$</span>
        149
      </span>
                        <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">Advanced features for scaling your
                            business</p>

                        <ul class="mt-7 space-y-2.5 text-sm">
                            <li class="flex space-x-2">
                                <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
            10 users
          </span>
                            </li>

                            <li class="flex space-x-2">
                                <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
            Plan features
          </span>
                            </li>

                            <li class="flex space-x-2">
                                <svg class="flex-shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
            Product support
          </span>
                            </li>
                        </ul>

                        <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600"
                           href="#">
                            Sign up
                        </a>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Grid -->

                <!-- Comparison table -->
                <div class="mt-20 lg:mt-32">
                    <div class="lg:text-center mb-10 lg:mb-20">
                        <h3 class="text-2xl font-semibold dark:text-white">Compare plans</h3>
                    </div>

                    <!-- xs to lg -->
                    <div class="space-y-24 lg:hidden">
                        <section>
                            <div class="px-4 mb-4">
                                <h2 class="text-lg leading-6 font-medium text-gray-800">Free</h2>
                            </div>
                            <table class="w-full">
                                <caption
                                    class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                                    Financial data
                                </caption>
                                <thead>
                                <tr>
                                    <th class="sr-only" scope="col">Feature</th>
                                    <th class="sr-only" scope="col">Included</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Open/High/Low/Close
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Price-volume difference indicator
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="w-full">
                                <caption
                                    class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                                    On-chain data
                                </caption>
                                <thead>
                                <tr>
                                    <th class="sr-only" scope="col">Feature</th>
                                    <th class="sr-only" scope="col">Included</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Network growth
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Average token age consumed
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Exchange flow
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Total ERC20 exchange funds flow
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Transaction volume
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Total circulation (beta)
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Velocity of tokens (beta)
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">ETH gas used
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="w-full">
                                <caption
                                    class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                                    Social data
                                </caption>
                                <thead>
                                <tr>
                                    <th class="sr-only" scope="col">Feature</th>
                                    <th class="sr-only" scope="col">Included</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Dev activity
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Topic search
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Relative social dominance
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Total social volume
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </section>

                        <section>
                            <div class="px-4 mb-4">
                                <h2 class="text-lg leading-6 font-medium text-gray-800">Startup</h2>
                            </div>
                            <table class="w-full">
                                <caption
                                    class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                                    Financial data
                                </caption>
                                <thead>
                                <tr>
                                    <th class="sr-only" scope="col">Feature</th>
                                    <th class="sr-only" scope="col">Included</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Open/High/Low/Close
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Price-volume difference indicator
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="w-full">
                                <caption
                                    class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                                    On-chain data
                                </caption>
                                <thead>
                                <tr>
                                    <th class="sr-only" scope="col">Feature</th>
                                    <th class="sr-only" scope="col">Included</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Network growth
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Average token age consumed
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Exchange flow
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Total ERC20 exchange funds flow
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Transaction volume
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Total circulation (beta)
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Velocity of tokens (beta)
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">ETH gas used
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="w-full">
                                <caption
                                    class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                                    Social data
                                </caption>
                                <thead>
                                <tr>
                                    <th class="sr-only" scope="col">Feature</th>
                                    <th class="sr-only" scope="col">Included</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Dev activity
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Topic search
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Relative social dominance
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Total social volume
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </section>

                        <section>
                            <div class="px-4 mb-4">
                                <h2 class="text-lg leading-6 font-medium text-gray-800">Team</h2>
                            </div>
                            <table class="w-full">
                                <caption
                                    class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                                    Financial data
                                </caption>
                                <thead>
                                <tr>
                                    <th class="sr-only" scope="col">Feature</th>
                                    <th class="sr-only" scope="col">Included</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Open/High/Low/Close
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Price-volume difference indicator
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="w-full">
                                <caption
                                    class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                                    On-chain data
                                </caption>
                                <thead>
                                <tr>
                                    <th class="sr-only" scope="col">Feature</th>
                                    <th class="sr-only" scope="col">Included</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Network growth
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Average token age consumed
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Exchange flow
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Total ERC20 exchange funds flow
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Transaction volume
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Total circulation (beta)
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Velocity of tokens (beta)
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">ETH gas used
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="w-full">
                                <caption
                                    class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                                    Social data
                                </caption>
                                <thead>
                                <tr>
                                    <th class="sr-only" scope="col">Feature</th>
                                    <th class="sr-only" scope="col">Included</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Dev activity
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Topic search
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Relative social dominance
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Total social volume
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Minus -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                        </svg>
                                        <!-- Minus -->
                                        <span class="sr-only">No</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </section>

                        <section>
                            <div class="px-4 mb-4">
                                <h2 class="text-lg leading-6 font-medium text-gray-800">Enterprise</h2>
                            </div>
                            <table class="w-full">
                                <caption
                                    class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                                    Financial data
                                </caption>
                                <thead>
                                <tr>
                                    <th class="sr-only" scope="col">Feature</th>
                                    <th class="sr-only" scope="col">Included</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Open/High/Low/Close
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Price-volume difference indicator
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="w-full">
                                <caption
                                    class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                                    On-chain data
                                </caption>
                                <thead>
                                <tr>
                                    <th class="sr-only" scope="col">Feature</th>
                                    <th class="sr-only" scope="col">Included</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Network growth
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Average token age consumed
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Exchange flow
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Total ERC20 exchange funds flow
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Transaction volume
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Total circulation (beta)
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Velocity of tokens (beta)
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">ETH gas used
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="w-full">
                                <caption
                                    class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                                    Social data
                                </caption>
                                <thead>
                                <tr>
                                    <th class="sr-only" scope="col">Feature</th>
                                    <th class="sr-only" scope="col">Included</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Dev activity
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Topic search
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Relative social dominance
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>

                                <tr class="border-t border-gray-200 dark:border-neutral-700">
                                    <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                        scope="row">Total social volume
                                    </th>
                                    <td class="py-5 pe-4">
                                        <!-- Check -->
                                        <svg class="flex-shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <!-- End Solid Check -->
                                        <span class="sr-only">Yes</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                    <!-- End xs to lg -->

                    <!-- lg+ -->
                    <div class="hidden lg:block">
                        <table class="w-full h-px">
                            <caption class="sr-only">
                                Pricing plan comparison
                            </caption>
                            <thead class="sticky top-0 inset-x-0 bg-white dark:bg-neutral-900">
                            <tr>
                                <th class="py-4 ps-6 pe-6 text-sm font-medium text-gray-800 text-start" scope="col">
                                    <span class="sr-only">Feature by</span>
                                    <span class="dark:text-white">Plans</span>
                                </th>

                                <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white"
                                    scope="col">Free
                                </th>
                                <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white"
                                    scope="col">Startup
                                </th>
                                <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white"
                                    scope="col">Team
                                </th>
                                <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white"
                                    scope="col">Enterprise
                                </th>
                            </tr>
                            </thead>
                            <tbody
                                class="border-t border-gray-200 divide-y divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                            <tr>
                                <th class="py-3 ps-6 bg-gray-50 font-bold text-gray-800 text-start dark:bg-neutral-800 dark:text-white"
                                    colspan="5" scope="colgroup">Financial data
                                </th>
                            </tr>

                            <tr>
                                <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Open/High/Low/Close
                                </th>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Free</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Startup</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Team</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Enterprise</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Price-volume difference indicator
                                </th>

                                <td class="py-5 px-6">
                                    <!-- Minus -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">Not included in Free</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Startup</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Team</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Enterprise</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="py-3 ps-6 bg-gray-50 font-bold text-gray-800 text-start dark:bg-neutral-800 dark:text-white"
                                    colspan="5" scope="colgroup">On-chain data
                                </th>
                            </tr>

                            <tr>
                                <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Network growth
                                </th>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Free</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Startup</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Team</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Enterprise</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Average token age consumed
                                </th>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Not included in Free</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Startup</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Team</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Enterprise</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Exchange flow
                                </th>

                                <td class="py-5 px-6">
                                    <!-- Minus -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">Not included in Free</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Startup</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Team</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Enterprise</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Total ERC20 exchange funds flow
                                </th>

                                <td class="py-5 px-6">
                                    <!-- Minus -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">Not included in Free</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Startup</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Team</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Enterprise</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Transaction volume
                                </th>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Free</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Startup</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Team</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Enterprise</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Total circulation (beta)
                                </th>

                                <td class="py-5 px-6">
                                    <!-- Minus -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">Not included in Free</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Startup</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Team</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Enterprise</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Velocity of tokens (beta)
                                </th>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Not included in Free</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Startup</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Team</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Enterprise</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">ETH gas used
                                </th>

                                <td class="py-5 px-6">
                                    <!-- Minus -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">Not included in Free</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Startup</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Team</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Enterprise</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="py-3 ps-6 bg-gray-50 font-bold text-gray-800 text-start dark:bg-neutral-800 dark:text-white"
                                    colspan="5" scope="colgroup">Social data
                                </th>
                            </tr>

                            <tr>
                                <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Dev activity
                                </th>

                                <td class="py-5 px-6">
                                    <!-- Minus -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">Included in Free</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Startup</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Team</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Enterprise</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Topic search
                                </th>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Free</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Startup</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Team</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Enterprise</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Relative social dominance
                                </th>

                                <td class="py-5 px-6">
                                    <!-- Minus -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">Included in Free</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Minus -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">Included in Startup</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Minus -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">Included in Team</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Minus -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">Included in Enterprise</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Relative social dominance
                                </th>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Free</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Startup</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Team</span>
                                </td>

                                <td class="py-5 px-6">
                                    <!-- Check -->
                                    <svg class="mx-auto flex-shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">Included in Enterprise</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End lg+ -->
                </div>
                <!-- End Comparison table -->
            </div>
            <!-- End Pricing -->

            <!-- Team -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Title -->
                <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Our leadership</h2>
                    <p class="mt-1 text-gray-600 dark:text-neutral-400">Creative people</p>
                </div>
                <!-- End Title -->

                <!-- Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div
                        class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                        <div class="flex items-center gap-x-4">
                            <img class="rounded-full size-20"
                                 src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                 alt="Image Description">
                            <div class="grow">
                                <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                                    David Forren
                                </h3>
                                <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                    Founder / CEO
                                </p>
                            </div>
                        </div>

                        <p class="mt-3 text-gray-500 dark:text-neutral-500">
                            I am an ambitious workaholic, but apart from that, pretty simple person.
                        </p>

                        <!-- Social Brands -->
                        <div class="mt-3 space-x-1">
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                                </svg>
                            </a>
                        </div>
                        <!-- End Social Brands -->
                    </div>
                    <!-- End Col -->

                    <div
                        class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                        <div class="flex items-center gap-x-4">
                            <img class="rounded-full size-20"
                                 src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                 alt="Image Description">
                            <div class="grow">
                                <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                                    Amil Evara
                                </h3>
                                <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                    UI/UX Designer
                                </p>
                            </div>
                        </div>

                        <p class="mt-3 text-gray-500 dark:text-neutral-500">
                            I am an ambitious workaholic, but apart from that, pretty simple person.
                        </p>

                        <!-- Social Brands -->
                        <div class="mt-3 space-x-1">
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                                </svg>
                            </a>
                        </div>
                        <!-- End Social Brands -->
                    </div>
                    <!-- End Col -->

                    <div
                        class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                        <div class="flex items-center gap-x-4">
                            <img class="rounded-full size-20"
                                 src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                 alt="Image Description">
                            <div class="grow">
                                <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                                    Ebele Egbuna
                                </h3>
                                <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                    Support Consultant
                                </p>
                            </div>
                        </div>

                        <p class="mt-3 text-gray-500 dark:text-neutral-500">
                            I am an ambitious workaholic, but apart from that, pretty simple person.
                        </p>

                        <!-- Social Brands -->
                        <div class="mt-3 space-x-1">
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                                </svg>
                            </a>
                        </div>
                        <!-- End Social Brands -->
                    </div>
                    <!-- End Col -->

                    <div
                        class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                        <div class="flex items-center gap-x-4">
                            <img class="rounded-full size-20"
                                 src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                 alt="Image Description">
                            <div class="grow">
                                <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                                    Maria Powers
                                </h3>
                                <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                    Director of sales
                                </p>
                            </div>
                        </div>

                        <p class="mt-3 text-gray-500 dark:text-neutral-500">
                            I am an ambitious workaholic, but apart from that, pretty simple person.
                        </p>

                        <!-- Social Brands -->
                        <div class="mt-3 space-x-1">
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                                </svg>
                            </a>
                        </div>
                        <!-- End Social Brands -->
                    </div>
                    <!-- End Col -->

                    <div
                        class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                        <div class="flex items-center gap-x-4">
                            <img class="rounded-full size-20"
                                 src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                 alt="Image Description">
                            <div class="grow">
                                <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                                    Delia Pawelke
                                </h3>
                                <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                    Front-end Developer
                                </p>
                            </div>
                        </div>

                        <p class="mt-3 text-gray-500 dark:text-neutral-500">
                            I am an ambitious workaholic, but apart from that, pretty simple person.
                        </p>

                        <!-- Social Brands -->
                        <div class="mt-3 space-x-1">
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                                </svg>
                            </a>
                        </div>
                        <!-- End Social Brands -->
                    </div>
                    <!-- End Col -->

                    <div
                        class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                        <div class="flex items-center gap-x-4">
                            <img class="rounded-full size-20"
                                 src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                 alt="Image Description">
                            <div class="grow">
                                <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                                    Tom Lowry
                                </h3>
                                <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                    UI/UX Designer
                                </p>
                            </div>
                        </div>

                        <p class="mt-3 text-gray-500 dark:text-neutral-500">
                            I am an ambitious workaholic, but apart from that, pretty simple person.
                        </p>

                        <!-- Social Brands -->
                        <div class="mt-3 space-x-1">
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                                </svg>
                            </a>
                        </div>
                        <!-- End Social Brands -->
                    </div>
                    <!-- End Col -->

                    <div
                        class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                        <div class="flex items-center gap-x-4">
                            <img class="rounded-full size-20"
                                 src="https://images.unsplash.com/photo-1579017331263-ef82f0bbc748?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                 alt="Image Description">
                            <div class="grow">
                                <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                                    Louise Donadieu
                                </h3>
                                <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                    Support Consultant
                                </p>
                            </div>
                        </div>

                        <p class="mt-3 text-gray-500 dark:text-neutral-500">
                            I am an ambitious workaholic, but apart from that, pretty simple person.
                        </p>

                        <!-- Social Brands -->
                        <div class="mt-3 space-x-1">
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                                </svg>
                            </a>
                        </div>
                        <!-- End Social Brands -->
                    </div>
                    <!-- End Col -->

                    <div
                        class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                        <div class="flex items-center gap-x-4">
                            <img class="rounded-full size-20"
                                 src="https://images.unsplash.com/photo-1514222709107-a180c68d72b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                 alt="Image Description">
                            <div class="grow">
                                <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                                    Jeff Fisher
                                </h3>
                                <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                    Project Manager
                                </p>
                            </div>
                        </div>

                        <p class="mt-3 text-gray-500 dark:text-neutral-500">
                            I am an ambitious workaholic, but apart from that, pretty simple person.
                        </p>

                        <!-- Social Brands -->
                        <div class="mt-3 space-x-1">
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700"
                               href="#">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                                </svg>
                            </a>
                        </div>
                        <!-- End Social Brands -->
                    </div>
                    <!-- End Col -->

                    <a class="col-span-full lg:col-span-1 group flex flex-col justify-center text-center rounded-xl p-4 md:p-6 border border-dashed border-gray-200 hover:shadow-sm dark:border-neutral-700"
                       href="#">
                        <h3 class="text-lg text-gray-800 dark:text-neutral-200">
                            We are hiring!
                        </h3>
                        <div>
        <span
            class="inline-flex items-center gap-x-2 text-blue-600 group-hover:text-blue-700 dark:text-blue-500 dark:group-hover:text-blue-400">
          See all opening positions
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
               viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
               stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </span>
                        </div>
                    </a>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Team -->

            <!-- Testimonials -->
            <div class="relative max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Blockquote -->
                <blockquote class="text-center lg:mx-auto lg:w-3/5">
                    <svg class="mx-auto w-20 h-auto sm:w-28 text-gray-800 dark:text-neutral-200" width="106" height="36"
                         viewBox="0 0 106 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M55.4732 9.52669C55.4732 10.6846 54.5258 11.6846 53.3153 11.6846C52.1048 11.6846 51.1574 10.7372 51.1574 9.52669C51.1574 8.31616 52.0521 7.36879 53.3153 7.36879C54.5785 7.47406 55.4732 8.42142 55.4732 9.52669ZM46.6837 13.8425C46.6837 14.053 46.6837 14.3688 46.6837 14.3688C46.6837 14.3688 45.6837 13.053 43.5258 13.053C39.9469 13.053 37.1574 15.7898 37.1574 19.5267C37.1574 23.2635 39.8942 26.0004 43.5258 26.0004C45.7363 26.0004 46.6837 24.6319 46.6837 24.6319V25.2109C46.6837 25.4741 46.8942 25.6846 47.1574 25.6846H49.789V13.3688C49.789 13.3688 47.3679 13.3688 47.1574 13.3688C46.8942 13.3688 46.6837 13.632 46.6837 13.8425ZM46.6837 21.7372C46.21 22.4741 45.21 23.1056 44.0521 23.1056C41.9469 23.1056 40.3679 21.7898 40.3679 19.5793C40.3679 17.3688 41.9995 16.053 44.0521 16.053C45.21 16.053 46.2627 16.6846 46.6837 17.4214V21.7372ZM51.789 13.3688H54.9469V25.6846H51.789V13.3688ZM98.789 13.053C96.6311 13.053 95.6311 14.3688 95.6311 14.3688V7.47406H92.4732V25.7372C92.4732 25.7372 94.8942 25.7372 95.1048 25.7372C95.3679 25.7372 95.5785 25.5267 95.5785 25.2635V24.6846C95.5785 24.6846 96.5785 26.053 98.7364 26.053C102.315 26.053 105.105 23.3162 105.105 19.5793C105.157 15.7898 102.368 13.053 98.789 13.053ZM98.2627 23.053C97.0521 23.053 96.1048 22.4214 95.6311 21.6846V17.2635C96.1048 16.632 97.1574 15.8951 98.2627 15.8951C100.368 15.8951 101.947 17.2109 101.947 19.4214C101.947 21.632 100.368 23.053 98.2627 23.053ZM90.8416 18.4214V25.7898H87.6837V18.7898C87.6837 16.7372 87.0521 15.9477 85.2627 15.9477C84.3153 15.9477 83.3153 16.4214 82.6837 17.1583V25.7372H79.5258V13.3688H81.9995C82.2627 13.3688 82.4732 13.5793 82.4732 13.8425V14.3688C83.3679 13.4214 84.6311 13.053 85.8416 13.053C87.21 13.053 88.3679 13.4214 89.2627 14.2109C90.4206 15.1583 90.8416 16.3162 90.8416 18.4214ZM71.8942 13.053C69.7364 13.053 68.7364 14.3688 68.7364 14.3688V7.47406H65.5785V25.7372C65.5785 25.7372 67.9995 25.7372 68.21 25.7372C68.4732 25.7372 68.6837 25.5267 68.6837 25.2635V24.6846C68.6837 24.6846 69.6837 26.053 71.8416 26.053C75.4206 26.053 78.21 23.3162 78.21 19.5793C78.2627 15.7898 75.4732 13.053 71.8942 13.053ZM71.3679 23.053C70.1574 23.053 69.21 22.4214 68.7364 21.6846V17.2635C69.21 16.632 70.2627 15.8951 71.3679 15.8951C73.4732 15.8951 75.0521 17.2109 75.0521 19.4214C75.0521 21.632 73.4732 23.053 71.3679 23.053ZM62.8416 13.053C63.789 13.053 64.2627 13.2109 64.2627 13.2109V16.1056C64.2627 16.1056 61.6311 15.2109 59.9995 17.1056V25.7372H56.8416V13.3688C56.8416 13.3688 59.2627 13.3688 59.4732 13.3688C59.7364 13.3688 59.9469 13.5793 59.9469 13.8425V14.3688C60.5785 13.6846 61.8942 13.053 62.8416 13.053ZM30.1574 24.6319C29.9995 24.2635 29.8416 23.7898 29.6837 23.4741C29.4206 22.8951 29.1574 22.3162 28.9469 21.7898L28.8942 21.7372C26.6311 16.8425 24.21 11.8425 21.6311 6.89511L21.5258 6.68458C21.2627 6.2109 20.9995 5.68458 20.7363 5.15827C20.4206 4.57932 20.1048 3.94774 19.5785 3.36879C18.5258 2.053 16.9995 1.31616 15.4206 1.31616C13.789 1.31616 12.3153 2.053 11.21 3.26353C10.6837 3.89511 10.3153 4.47406 9.99951 5.10564C9.73635 5.63195 9.47319 6.15827 9.21003 6.63195L9.10477 6.84248C6.57845 11.7372 4.10477 16.7372 1.84161 21.6846L1.78898 21.7372C1.57845 22.2635 1.3153 22.8425 1.05214 23.4214C0.894243 23.7898 0.736348 24.1583 0.578453 24.5793C0.1574 25.7898 -0.000494055 26.9477 0.210032 28.1056C0.578453 30.5793 2.21003 32.632 4.47319 33.5267C5.3153 33.8951 6.21003 34.053 7.10477 34.053C7.36793 34.053 7.68372 34.0004 7.94687 34.0004C9.05214 33.8951 10.1574 33.5267 11.21 32.8951C12.5785 32.1583 13.8416 31.053 15.2627 29.4741C16.6837 31.053 17.9995 32.1056 19.3153 32.8951C20.4206 33.5267 21.5258 33.8951 22.5785 34.0004C22.8416 34.053 23.1574 34.053 23.4206 34.053C24.3153 34.053 25.2627 33.8951 26.0521 33.5267C28.3679 32.632 29.9469 30.5267 30.3153 28.1056C30.6837 26.9477 30.5785 25.8425 30.1574 24.6319ZM15.3679 26.3162C13.5785 24.1056 12.4732 22.0004 12.0521 20.2109C11.8942 19.4741 11.8416 18.7898 11.9469 18.2109C11.9995 17.6846 12.21 17.2109 12.4732 16.8425C13.1048 15.9477 14.1574 15.4214 15.3679 15.4214C16.5785 15.4214 17.6837 15.9477 18.2627 16.8425C18.5258 17.2109 18.7363 17.6846 18.789 18.2109C18.8942 18.7898 18.8416 19.4741 18.6837 20.2109C18.2627 21.9477 17.1048 24.053 15.3679 26.3162ZM28.4206 27.8425C28.21 29.5267 27.0521 31.0004 25.4206 31.6846C24.6311 32.0004 23.789 32.1056 22.9469 32.0004C22.1048 31.8951 21.3153 31.632 20.4732 31.1583C19.3153 30.5267 18.1048 29.4741 16.7363 28.0004C18.8942 25.3688 20.21 22.8951 20.6837 20.7372C20.8942 19.7372 20.9469 18.7898 20.8416 17.9477C20.7363 17.1056 20.4206 16.3688 19.9469 15.7372C18.9469 14.2635 17.21 13.4214 15.3153 13.4214C13.4206 13.4214 11.6837 14.3162 10.6837 15.7372C10.21 16.3688 9.94687 17.1583 9.78898 17.9477C9.68372 18.7898 9.68372 19.7372 9.94687 20.7372C10.4206 22.8951 11.789 25.3688 13.8942 28.0004C12.5258 29.5267 11.3153 30.5267 10.1574 31.1583C9.3153 31.632 8.47319 31.8951 7.68372 32.0004C6.78898 32.1056 5.94687 31.9477 5.21003 31.6846C3.57845 31.053 2.47319 29.5267 2.21003 27.8425C2.10477 27.0004 2.1574 26.2109 2.52582 25.2635C2.63108 24.9477 2.78898 24.632 2.94687 24.2109C3.1574 23.6846 3.42056 23.1056 3.68372 22.5793L3.73635 22.5267C5.99951 17.632 8.42056 12.632 10.9469 7.78985L11.0521 7.57932C11.3153 7.10564 11.5785 6.57932 11.8416 6.053C12.1048 5.52669 12.4206 5.053 12.7363 4.63195C13.4206 3.84248 14.3679 3.42143 15.3679 3.42143C16.3679 3.42143 17.3153 3.84248 17.9995 4.63195C18.3679 5.053 18.6311 5.52669 18.8942 6.053C19.1574 6.52669 19.4206 7.053 19.6837 7.57932L19.789 7.78985C22.2627 12.6846 24.6837 17.6846 26.9469 22.5267V22.5793C27.21 23.1056 27.4206 23.6846 27.6837 24.2109C27.8416 24.5793 27.9995 24.9477 28.1048 25.2635C28.4732 26.1583 28.5785 27.0004 28.4206 27.8425Z"
                            fill="currentColor"></path>
                    </svg>

                    <div class="mt-6 lg:mt-10">
                        <p class="relative text-xl sm:text-2xl md:text-3xl md:leading-normal font-medium text-gray-800">
                            <svg
                                class="absolute top-0 start-0 transform -translate-x-8 -translate-y-8 size-16 text-gray-200 sm:h-24 sm:w-24 dark:text-neutral-700"
                                width="16" height="13" viewBox="0 0 16 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M7.18079 9.25611C7.18079 10.0101 6.93759 10.6211 6.45119 11.0891C5.96479 11.5311 5.35039 11.7521 4.60799 11.7521C3.71199 11.7521 2.96958 11.4531 2.38078 10.8551C1.81758 10.2571 1.53598 9.39911 1.53598 8.28111C1.53598 7.08511 1.86878 5.91511 2.53438 4.77111C3.22559 3.60111 4.18559 2.67811 5.41439 2.00211L6.29759 3.36711C5.63199 3.83511 5.09439 4.35511 4.68479 4.92711C4.30079 5.49911 4.04479 6.16211 3.91679 6.91611C4.14719 6.81211 4.41599 6.76011 4.72319 6.76011C5.43999 6.76011 6.02879 6.99411 6.48959 7.46211C6.95039 7.93011 7.18079 8.52811 7.18079 9.25611ZM14.2464 9.25611C14.2464 10.0101 14.0032 10.6211 13.5168 11.0891C13.0304 11.5311 12.416 11.7521 11.6736 11.7521C10.7776 11.7521 10.0352 11.4531 9.44639 10.8551C8.88319 10.2571 8.60159 9.39911 8.60159 8.28111C8.60159 7.08511 8.93439 5.91511 9.59999 4.77111C10.2912 3.60111 11.2512 2.67811 12.48 2.00211L13.3632 3.36711C12.6976 3.83511 12.16 4.35511 11.7504 4.92711C11.3664 5.49911 11.1104 6.16211 10.9824 6.91611C11.2128 6.81211 11.4816 6.76011 11.7888 6.76011C12.5056 6.76011 13.0944 6.99411 13.5552 7.46211C14.016 7.93011 14.2464 8.52811 14.2464 9.25611Z"
                                    fill="currentColor"/>
                            </svg>
                            <span class="relative z-10 italic text-gray-800 dark:text-neutral-200">I just wanted to say that I'm very happy with my purchase of Preline so far. The documentation is outstanding - clear and detailed.</span>
                        </p>
                    </div>

                    <footer class="mt-6">
                        <div class="font-semibold text-gray-800 dark:text-neutral-200">Philip</div>
                        <div class="text-sm text-gray-500 dark:text-neutral-500">Product Manager | Airbnb</div>
                    </footer>
                </blockquote>
                <!-- End Blockquote -->
            </div>
            <!-- End Testimonials -->

            <!-- Hero -->
            <div
                class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] dark:before:bg-[url('https://preline.co/assets/svg/examples-dark/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:size-full before:-z-[1] before:transform before:-translate-x-1/2">
                <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">
                    <!-- Announcement Banner -->
                    <div class="flex justify-center">
                        <a class="inline-flex items-center gap-x-2 bg-white border border-gray-200 text-sm text-gray-800 p-1 ps-3 rounded-full transition hover:border-gray-300 dark:bg-neutral-800 dark:border-neutral-700 dark:hover:border-neutral-600 dark:text-neutral-200"
                           href="#">
                            PRO release - Join to waitlist
                            <span
                                class="py-1.5 px-2.5 inline-flex justify-center items-center gap-x-2 rounded-full bg-gray-200 font-semibold text-sm text-gray-600 dark:bg-neutral-700 dark:text-neutral-400">
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
               viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
               stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </span>
                        </a>
                    </div>
                    <!-- End Announcement Banner -->

                    <!-- Title -->
                    <div class="mt-5 max-w-2xl text-center mx-auto">
                        <h1 class="block font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
                            Let's Build
                            <span class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">Together</span>
                        </h1>
                    </div>
                    <!-- End Title -->

                    <div class="mt-5 max-w-3xl text-center mx-auto">
                        <p class="text-lg text-gray-600 dark:text-neutral-400">Preline UI is an open-source set of
                            prebuilt UI components, ready-to-use examples and Figma design system based on the
                            utility-first Tailwind CSS framework.</p>
                    </div>

                    <!-- Buttons -->
                    <div class="mt-8 gap-3 flex justify-center">
                        <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:ring-1 focus:ring-gray-600 py-3 px-4 dark:focus:ring-offset-gray-800"
                           href="#">
                            Get started
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"/>
                            </svg>
                        </a>
                        <button type="button"
                                class="relative group p-2 ps-3 inline-flex items-center gap-x-2 text-sm font-mono rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                            $ npm i preline
                            <span
                                class="flex justify-center items-center bg-gray-200 rounded-md size-7 dark:bg-neutral-700 dark:text-neutral-400">
          <svg class="flex-shrink-0 size-4 group-hover:rotate-6 transition" xmlns="http://www.w3.org/2000/svg"
               width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
               stroke-linecap="round" stroke-linejoin="round"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path
                  d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/></svg>
        </span>
                        </button>
                    </div>
                    <!-- End Buttons -->

                    <div class="mt-5 flex justify-center items-center gap-x-1 sm:gap-x-3">
                        <span class="text-sm text-gray-600 dark:text-neutral-400">Package Manager:</span>
                        <span class="text-sm font-bold text-gray-900 dark:text-white">npm</span>
                        <svg class="size-5 text-gray-300 dark:text-neutral-600" width="16" height="16"
                             viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"/>
                        </svg>
                        <a class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium"
                           href="#">
                            Installation Guide
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Hero -->

            <!-- FAQ -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Title -->
                <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Your questions,
                        answered</h2>
                    <p class="mt-1 text-gray-600 dark:text-neutral-400">Answers to the most frequently asked
                        questions.</p>
                </div>
                <!-- End Title -->

                <div class="max-w-2xl mx-auto">
                    <!-- Accordion -->
                    <div class="hs-accordion-group">
                        <div
                            class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10 active"
                            id="hs-basic-with-title-and-arrow-stretched-heading-one">
                            <button
                                class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                                Can I cancel at anytime?
                                <svg
                                    class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>
                                <svg
                                    class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6"/>
                                </svg>
                            </button>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
                                 class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                 aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                                <p class="text-gray-800 dark:text-neutral-200">
                                    Yes, you can cancel anytime no questions are asked while you cancel but we would
                                    highly appreciate if you will give us some feedback.
                                </p>
                            </div>
                        </div>

                        <div
                            class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10"
                            id="hs-basic-with-title-and-arrow-stretched-heading-two">
                            <button
                                class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
                                My team has credits. How do we use them?
                                <svg
                                    class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>
                                <svg
                                    class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6"/>
                                </svg>
                            </button>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-two"
                                 class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                 aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
                                <p class="text-gray-800 dark:text-neutral-200">
                                    Once your team signs up for a subscription plan. This is where we sit down, grab a
                                    cup of coffee and dial in the details.
                                </p>
                            </div>
                        </div>

                        <div
                            class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10"
                            id="hs-basic-with-title-and-arrow-stretched-heading-three">
                            <button
                                class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
                                How does Preline's pricing work?
                                <svg
                                    class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>
                                <svg
                                    class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6"/>
                                </svg>
                            </button>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
                                 class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                 aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
                                <p class="text-gray-800 dark:text-neutral-200">
                                    Our subscriptions are tiered. Understanding the task at hand and ironing out the
                                    wrinkles is key.
                                </p>
                            </div>
                        </div>

                        <div
                            class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10"
                            id="hs-basic-with-title-and-arrow-stretched-heading-four">
                            <button
                                class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-four">
                                How secure is Preline?
                                <svg
                                    class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>
                                <svg
                                    class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6"/>
                                </svg>
                            </button>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-four"
                                 class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                 aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-four">
                                <p class="text-gray-800 dark:text-neutral-200">
                                    Protecting the data you trust to Preline is our first priority. This part is really
                                    crucial in keeping the project in line to completion.
                                </p>
                            </div>
                        </div>

                        <div
                            class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10"
                            id="hs-basic-with-title-and-arrow-stretched-heading-five">
                            <button
                                class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-five">
                                How do I get access to a theme I purchased?
                                <svg
                                    class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>
                                <svg
                                    class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6"/>
                                </svg>
                            </button>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-five"
                                 class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                 aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-five">
                                <p class="text-gray-800 dark:text-neutral-200">
                                    If you lose the link for a theme you purchased, don't panic! We've got you covered.
                                    You can login to your account, tap your avatar in the upper right corner, and tap
                                    Purchases. If you didn't create a login or can't remember the information, you can
                                    use our handy Redownload page, just remember to use the same email you originally
                                    made your purchases with.
                                </p>
                            </div>
                        </div>

                        <div
                            class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10"
                            id="hs-basic-with-title-and-arrow-stretched-heading-six">
                            <button
                                class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-six">
                                Upgrade License Type
                                <svg
                                    class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>
                                <svg
                                    class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6"/>
                                </svg>
                            </button>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-six"
                                 class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                 aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-six">
                                <p class="text-gray-800 dark:text-neutral-200">
                                    There may be times when you need to upgrade your license from the original type you
                                    purchased and we have a solution that ensures you can apply your original purchase
                                    cost to the new license purchase.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion -->
                </div>
            </div>
            <!-- End FAQ -->

            <!-- Card Blog -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Title -->
                <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">The Blog</h2>
                    <p class="mt-1 text-gray-600 dark:text-neutral-400">See how game-changing companies are making the
                        most of every engagement with Preline.</p>
                </div>
                <!-- End Title -->

                <!-- Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card -->
                    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
                       href="#">
                        <div class="aspect-w-16 aspect-h-11">
                            <img class="w-full object-cover rounded-xl"
                                 src="https://images.unsplash.com/photo-1633114128174-2f8aa49759b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                                 alt="Image Description">
                        </div>
                        <div class="my-6">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                                Announcing a free plan for small teams
                            </h3>
                            <p class="mt-5 text-gray-600 dark:text-neutral-400">
                                At Wake, our mission has always been focused on bringing openness.
                            </p>
                        </div>
                        <div class="mt-auto flex items-center gap-x-3">
                            <img class="size-8 rounded-full"
                                 src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                 alt="Image Description">
                            <div>
                                <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Lauren Waller</h5>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
                       href="#">
                        <div class="aspect-w-16 aspect-h-11">
                            <img class="w-full object-cover rounded-xl"
                                 src="https://images.unsplash.com/photo-1562851529-c370841f6536?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3540&q=80"
                                 alt="Image Description">
                        </div>
                        <div class="my-6">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                                How Google Assistant now helps you record stories for kids
                            </h3>
                            <p class="mt-5 text-gray-600 dark:text-neutral-400">
                                Google is constantly updating its consumer AI, Google Assistant, with new features.
                            </p>
                        </div>
                        <div class="mt-auto flex items-center gap-x-3">
                            <img class="size-8 rounded-full"
                                 src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                 alt="Image Description">
                            <div>
                                <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Aaron Larsson</h5>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
                       href="#">
                        <div class="aspect-w-16 aspect-h-11">
                            <img class="w-full object-cover rounded-xl"
                                 src="https://images.unsplash.com/photo-1521321205814-9d673c65c167?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3548&q=80"
                                 alt="Image Description">
                        </div>
                        <div class="my-6">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                                Front accounts - let's work together
                            </h3>
                            <p class="mt-5 text-gray-600 dark:text-neutral-400">
                                Are you an accountant? Are you a company formation advisor?
                            </p>
                        </div>
                        <div class="mt-auto flex items-center gap-x-3">
                            <img class="size-8 rounded-full"
                                 src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                 alt="Image Description">
                            <div>
                                <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Lauren Waller</h5>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Grid -->

                <!-- Card -->
                <div class="mt-12 text-center">
                    <a class="py-3 px-4 inline-flex items-center gap-x-1 text-sm font-medium rounded-full border border-gray-200 bg-white text-blue-600 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-blue-500 dark:hover:bg-neutral-800"
                       href="#">
                        Read more
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"/>
                        </svg>
                    </a>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Card Blog -->

            <!-- Clients -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Title -->
                <div class="w-2/3 sm:w-1/2 lg:w-1/3 mx-auto text-center mb-6">
                    <h2 class="text-gray-600 dark:text-neutral-400">Trusted by Open Source, enterprise, and more than
                        99,000 of you</h2>
                </div>
                <!-- End Title -->

                <div class="flex justify-center gap-x-6 sm:gap-x-12 lg:gap-x-24">
                    <svg
                        class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto sm:mx-0 text-gray-500 dark:text-neutral-500"
                        enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m431.7 0h-235.5v317.8h317.8v-235.5c0-45.6-36.7-82.3-82.3-82.3zm-308.9 0h-40.5c-45.6 0-82.3 36.7-82.3 82.3v40.5h122.8zm-122.8 196.2h122.8v122.8h-122.8zm392.5 317.8h40.5c45.6 0 82.3-36.7 82.3-82.3v-39.2h-122.8zm-196.3-121.5h122.8v122.8h-122.8zm-196.2 0v40.5c0 45.6 36.7 82.3 82.3 82.3h40.5v-122.8zm828-359.6h-48.1v449.4h254.5v-43h-206.4zm360.8 119c-93.7 0-159.5 69.6-159.5 169.6v11.5c1.3 43 20.3 83.6 51.9 113.9 30.4 27.9 69.6 44.3 111.4 44.3h6.3c44.3 0 86.1-16.5 119-44.3l1.3-1.3-21.5-35.4-2.5 1.3c-26.6 24.1-59.5 38-94.9 38-58.2 0-117.7-38-121.5-122.8h243.1v-2.5s1.3-15.2 1.3-22.8c-.3-91.2-53.4-149.5-134.4-149.5zm-108.9 134.2c10.1-57 51.9-93.7 106.3-93.7 40.5 0 84.8 24.1 88.6 93.7zm521.6-96.2v16.5c-20.3-34.2-58.2-55.7-97.5-55.7h-3.8c-86.1 0-145.6 68.4-145.6 168.4 0 101.3 57 169.6 141.8 169.6 67.1 0 97.5-40.5 107.6-58.2v49.4h45.6v-447h-46.8v157zm-98.8 257c-59.5 0-98.7-50.6-98.7-126.6 0-73.4 41.8-125.3 100-125.3 49.4 0 98.7 39.2 98.7 125.3 0 93.7-51.9 126.6-100 126.6zm424.1-250.7v2.5c-8.9-15.2-36.7-48.1-103.8-48.1-84.8 0-140.5 64.6-140.5 163.3s58.2 165.8 144.3 165.8c46.8 0 78.5-16.5 100-50.6v44.3c0 62-39.2 97.5-108.9 97.5-29.1 0-59.5-7.6-86.1-21.5l-2.5-1.3-17.7 39.2 2.5 1.3c32.9 16.5 69.6 25.3 105.1 25.3 74.7 0 154.4-38 154.4-143.1v-311.3h-46.8zm-93.7 241.8c-62 0-102.5-48.1-102.5-122.8 0-76 35.4-119 96.2-119 67.1 0 98.7 39.2 98.7 119 1.3 78.5-31.6 122.8-92.4 122.8zm331.7-286.1c-93.7 0-158.2 69.6-158.2 168.4v11.4c1.3 43 20.3 83.6 51.9 113.9 30.4 27.9 69.6 44.3 111.4 44.3h6.3c44.3 0 86.1-16.5 119-44.3l1.3-1.3-22.8-35.4-2.5 1.3c-26.6 24.1-59.5 38-94.9 38-58.2 0-117.7-38-121.5-122.8h244.2v-2.5s1.3-15.2 1.3-22.8c0-89.9-53.2-148.2-135.5-148.2zm-107.6 134.2c10.1-57 51.9-93.7 106.3-93.7 40.5 0 84.8 24.1 88.6 93.7zm440.6-127.9c-6.3-1.3-11.4-1.3-17.7-2.5-44.3 0-81 27.9-100 74.7v-72.2h-46.8l1.3 320.3v2.5h48.1v-135.4c0-20.3 2.5-41.8 8.9-60.8 15.2-49.4 49.4-81 89.9-81 5.1 0 10.1 0 15.2 1.3h2.5v-46.8z"
                            fill="currentColor"/>
                    </svg>

                    <svg
                        class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto sm:mx-0 text-gray-500 dark:text-neutral-500"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="-4.126838974812941 0.900767442746961 939.436838974813 230.18142889845947" width="2500"
                        height="607">
                        <path
                            d="M667.21 90.58c-13.76 0-23.58 4.7-28.4 13.6l-2.59 4.82V92.9h-22.39v97.86h23.55v-58.22c0-13.91 7.56-21.89 20.73-21.89 12.56 0 19.76 7.77 19.76 21.31v58.8h23.56v-63c0-23.3-12.79-37.18-34.22-37.18zm-114.21 0c-27.79 0-45 17.34-45 45.25v13.74c0 26.84 17.41 43.51 45.44 43.51 18.75 0 31.89-6.87 40.16-21l-14.6-8.4c-6.11 8.15-15.87 13.2-25.55 13.2-14.19 0-22.66-8.76-22.66-23.44v-3.89h65.73v-16.23c0-26-17.07-42.74-43.5-42.74zm22.09 43.15h-44.38v-2.35c0-16.11 7.91-25 22.27-25 13.83 0 22.09 8.76 22.09 23.44zm360.22-56.94V58.07h-81.46v18.72h28.56V172h-28.56v18.72h81.46V172h-28.57V76.79zM317.65 55.37c-36.38 0-59 22.67-59 59.18v19.74c0 36.5 22.61 59.18 59 59.18s59-22.68 59-59.18v-19.74c-.01-36.55-22.65-59.18-59-59.18zm34.66 80.27c0 24.24-12.63 38.14-34.66 38.14S283 159.88 283 135.64v-22.45c0-24.24 12.64-38.14 34.66-38.14s34.66 13.9 34.66 38.14zm98.31-45.06c-12.36 0-23.06 5.12-28.64 13.69l-2.53 3.9V92.9h-22.4v131.53h23.56v-47.64l2.52 3.74c5.3 7.86 15.65 12.55 27.69 12.55 20.31 0 40.8-13.27 40.8-42.93v-16.64c0-21.37-12.63-42.93-41-42.93zM468.06 149c0 15.77-9.2 25.57-24 25.57-13.8 0-23.43-10.36-23.43-25.18v-14.72c0-15 9.71-25.56 23.63-25.56 14.69 0 23.82 9.79 23.82 25.56zm298.47-90.92L719 190.76h23.93l9.1-28.44h54.64l.09.28 9 28.16h23.92L792.07 58.07zm-8.66 85.53l21.44-67.08 21.22 67.08zM212.59 95.12a57.27 57.27 0 0 0-4.92-47.05 58 58 0 0 0-62.4-27.79A57.29 57.29 0 0 0 102.06 1a57.94 57.94 0 0 0-55.27 40.14A57.31 57.31 0 0 0 8.5 68.93a58 58 0 0 0 7.13 67.94 57.31 57.31 0 0 0 4.92 47A58 58 0 0 0 83 211.72 57.31 57.31 0 0 0 126.16 231a57.94 57.94 0 0 0 55.27-40.14 57.3 57.3 0 0 0 38.28-27.79 57.92 57.92 0 0 0-7.12-67.95zM126.16 216a42.93 42.93 0 0 1-27.58-10c.34-.19 1-.52 1.38-.77l45.8-26.44a7.43 7.43 0 0 0 3.76-6.51V107.7l19.35 11.17a.67.67 0 0 1 .38.54v53.45A43.14 43.14 0 0 1 126.16 216zm-92.59-39.54a43 43 0 0 1-5.15-28.88c.34.21.94.57 1.36.81l45.81 26.45a7.44 7.44 0 0 0 7.52 0L139 142.52v22.34a.67.67 0 0 1-.27.6l-46.3 26.72a43.14 43.14 0 0 1-58.86-15.77zm-12-100A42.92 42.92 0 0 1 44 57.56V112a7.45 7.45 0 0 0 3.76 6.51l55.9 32.28L84.24 162a.68.68 0 0 1-.65.06L37.3 135.33a43.13 43.13 0 0 1-15.77-58.87zm159 37l-55.9-32.28L144 70a.69.69 0 0 1 .65-.06l46.29 26.73a43.1 43.1 0 0 1-6.66 77.76V120a7.44 7.44 0 0 0-3.74-6.54zm19.27-29c-.34-.21-.94-.57-1.36-.81L152.67 57.2a7.44 7.44 0 0 0-7.52 0l-55.9 32.27V67.14a.73.73 0 0 1 .28-.6l46.29-26.72a43.1 43.1 0 0 1 64 44.65zM78.7 124.3l-19.36-11.17a.73.73 0 0 1-.37-.54V59.14A43.09 43.09 0 0 1 129.64 26c-.34.19-.95.52-1.38.77l-45.8 26.44a7.45 7.45 0 0 0-3.76 6.51zm10.51-22.67l24.9-14.38L139 101.63v28.74l-24.9 14.38-24.9-14.38z"
                            fill="currentColor"/>
                    </svg>

                    <svg
                        class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto sm:mx-0 text-gray-500 dark:text-neutral-500"
                        fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2428 1002">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M311.5 389.8h191.8l67 117.5 77.8-117.5h178.3L682.7 590.7l154 220.7H648.1l-77.8-135.8-91.7 135.8h-175l153.2-220.7-145.3-200.9Z"
                              fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M1279.3 640.7H955.4c2.9 26 10 45.2 21 58a76.5 76.5 0 0 0 61.1 27.3c16 0 31.5-4 45.3-12 8.8-5 18.2-13.7 28.2-26.5l159.2 14.7c-24.4 42.4-53.7 72.7-88 91.2-34.5 18.2-83.8 27.5-148.2 27.5-55.8 0-99.7-7.9-131.8-23.6a193.2 193.2 0 0 1-79.6-75c-21-34.4-31.6-74.6-31.6-121 0-65.8 21.2-119.2 63.3-159.8 42.3-40.8 100.6-61.3 175-61.3 60.3 0 108 9.2 142.8 27.5a184 184 0 0 1 79.8 79.3c18.3 34.7 27.4 79.8 27.4 135.3v18.4ZM1115 563.3c-3.2-31.3-11.6-53.7-25.2-67.1a73.1 73.1 0 0 0-53.8-20.3 73.6 73.6 0 0 0-61.6 30.6c-9.7 12.7-16 31.6-18.5 56.8H1115Zm137-173.5h168.3l81.9 267.1 84.5-267H1750l-179.1 421.5h-143.3L1252 389.8Zm463.2 212c0-64.3 21.7-117.4 65-159 43.5-41.7 102-62.6 176-62.6 84.4 0 148.2 24.5 191.3 73.5 34.6 39.4 52 88 52 145.8 0 64.7-21.5 117.8-64.5 159.3-43 41.3-102.4 62-178.5 62-67.7 0-122.5-17.1-164.3-51.5-51.4-42.6-77-98.4-77-167.6Zm162-.5c0 37.7 7.5 65.5 22.8 83.4a72 72 0 0 0 57.3 27.1c23.4 0 42.5-9 57.4-26.7 15-17.8 22.5-46 22.5-85.4 0-36.4-7.6-63.7-22.7-81.5a70.5 70.5 0 0 0-56-26.7c-23.5 0-43 9-58.3 27-15.4 18.2-23 45.9-23 82.8ZM2363.1.1a64 64 0 0 1 0 127.9 64 64 0 0 1 0-128Z"
                              fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M1912.1 671.5c220.3-135 326.4-327 334-419.2 8.7-106.7-71-235.9-358.9-238-345 3.6-790 158.3-1163.6 360.4h138c315.8-152.6 672-266.2 1000.8-275.2 287.7-7.8 304.4 149.2 302 199-3.6 71-74.7 234.5-252.3 373Zm-1315.7-222-36 22.7 10 17.5 26-40.1ZM419.8 567.5C212 717 57 873.2.8 1001.9 77.8 897.1 217 771 394.9 647l40.4-58.1-15.5-21.4Z"
                              fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M2036.3 580a819.8 819.8 0 0 0 114.2-122.8l-3-3.5c-8-9.2-17-17.5-26.5-25-21 39.8-50 83.7-88.2 128.3 1.6 7 2.8 14.7 3.5 23Z"
                              fill="currentColor"/>
                    </svg>

                    <svg
                        class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto sm:mx-0 text-gray-500 dark:text-neutral-500"
                        viewBox="0 -8.881784197001252e-16 267.51517722360785 65.24679557585003"
                        xmlns="http://www.w3.org/2000/svg" width="2500" height="610">
                        <path
                            d="M263.043 56.411a4.418 4.418 0 1 0 .085 0zm0 8.33a3.874 3.874 0 1 1 3.809-3.938v.065a3.791 3.791 0 0 1-3.708 3.871h-.1m-16.96-9.535h-9.6V40.17c0-3.585-.064-8.2-4.993-8.2-5 0-5.765 3.906-5.765 7.939v15.294h-9.6V24.287h9.216v4.225h.129a10.1 10.1 0 0 1 9.093-4.994c9.73 0 11.524 6.4 11.524 14.726zm-40.79-35.143a5.571 5.571 0 1 1 5.57-5.572 5.571 5.571 0 0 1-5.57 5.572m4.8 35.143h-9.61V24.287h9.61zM250.87.004h-55.21a4.728 4.728 0 0 0-4.781 4.67v55.439a4.731 4.731 0 0 0 4.781 4.675h55.21a4.741 4.741 0 0 0 4.8-4.675V4.67a4.738 4.738 0 0 0-4.8-4.67m-86.12 31.749c-4.8 0-7.68 3.205-7.68 7.875s2.879 7.878 7.68 7.878 7.687-3.2 7.687-7.878-2.881-7.875-7.687-7.875m16.525 23.437h-8.838v-4.1h-.131a12.071 12.071 0 0 1-9.544 4.868c-9.224 0-15.3-6.657-15.3-16.071 0-8.646 5.377-16.585 14.216-16.585 3.973 0 7.684 1.087 9.861 4.1h.126V9.577h9.609zm-46.139-19.048a5.756 5.756 0 0 0-5.894-5.89 6.406 6.406 0 0 0-6.784 5.89zm8.132 13.7a16.909 16.909 0 0 1-13.128 6.151c-9.6 0-17.286-6.408-17.286-16.331s7.685-16.328 17.286-16.328c8.973 0 14.6 6.4 14.6 16.328v3.01h-22.282a7.171 7.171 0 0 0 7.235 6.019 8.193 8.193 0 0 0 6.851-3.778zM47.834 24.279h9.219v4.225h.131a10.085 10.085 0 0 1 9.09-4.994c9.735 0 11.527 6.405 11.527 14.726V55.19h-9.6V40.159c0-3.588-.066-8.2-5-8.2-4.99 0-5.76 3.907-5.76 7.939v15.288h-9.6zM82.669 9.58h9.6v27.265l10.88-12.583h11.77l-12.6 14.313 12.335 16.63h-12.066L92.397 39.923h-.126v15.28h-9.6zM32.911 24.276h9.6v30.916h-9.6zm4.8-15.37a5.569 5.569 0 1 1-5.57 5.569 5.569 5.569 0 0 1 5.57-5.569M0 9.587h9.993v36.4h18.5v9.222H0zm263.744 51.522a1.2 1.2 0 0 0 1.21-1.269c0-.9-.543-1.33-1.657-1.33h-1.8v4.712h.677v-2.054h.832l.019.025 1.291 2.029h.724l-1.389-2.1zm-.783-.472h-.785v-1.593h.995c.514 0 1.1.084 1.1.757 0 .774-.593.836-1.314.836"
                            fill="currentColor"/>
                    </svg>
                </div>
            </div>
            <!-- End Clients -->

            <!-- Your content -->
            {{ $slot }}
        </div>
    </main>
</div>
<div class="bg-[#081828]">
    <div class="max-w-[1320px] mx-auto">
        <!-- ========== FOOTER ========== -->
        <footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
            <!-- Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 mb-10">
                <div class="col-span-full hidden lg:col-span-1 lg:block">
                    <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">Brand</a>
                    <p class="mt-3 text-xs sm:text-sm text-gray-600 dark:text-neutral-400">© 2022 Preline.</p>
                </div>
                <!-- End Col -->

                <div>
                    <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Product</h4>

                    <div class="mt-3 grid space-y-3 text-sm">
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Pricing</a></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Changelog</a></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Docs</a></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Download</a></p>
                    </div>
                </div>
                <!-- End Col -->

                <div>
                    <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Company</h4>

                    <div class="mt-3 grid space-y-3 text-sm">
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">About us</a></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Blog</a></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Careers</a> <span
                                class="inline text-blue-600 dark:text-blue-500">— We're hiring</span></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Customers</a></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Newsroom</a></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Sitemap</a></p>
                    </div>
                </div>
                <!-- End Col -->

                <div>
                    <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Resources</h4>

                    <div class="mt-3 grid space-y-3 text-sm">
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Community</a></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Help & Support</a></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">eBook</a></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">What's New</a></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Status</a></p>
                    </div>
                </div>
                <!-- End Col -->

                <div>
                    <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Developers</h4>

                    <div class="mt-3 grid space-y-3 text-sm">
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Api</a></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Status</a></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">GitHub</a> <span class="inline text-blue-600 dark:text-blue-500">— New</span>
                        </p>
                    </div>

                    <h4 class="mt-7 text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Industries</h4>

                    <div class="mt-3 grid space-y-3 text-sm">
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Financial Services</a></p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Education</a></p>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->

            <div class="pt-5 mt-5 border-t border-gray-200 dark:border-neutral-700">
                <div class="sm:flex sm:justify-between sm:items-center">
                    <div class="flex items-center gap-x-3">
                        <!-- Language Dropdown -->
                        <div class="hs-dropdown [--placement:top-left] relative inline-flex">
                            <button id="footer-language-dropdown" type="button"
                                    class="hs-dropdown-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg"
                                     id="flag-icon-css-us1"
                                     viewBox="0 0 512 512">
                                    <g fill-rule="evenodd">
                                        <g stroke-width="1pt">
                                            <path fill="#bd3d44"
                                                  d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                  transform="scale(3.9385)"/>
                                            <path fill="#fff"
                                                  d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                  transform="scale(3.9385)"/>
                                        </g>
                                        <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/>
                                        <path fill="#fff"
                                              d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                              transform="scale(3.9385)"/>
                                    </g>
                                </svg>
                                English (US)
                                <svg
                                    class="hs-dropdown-open:rotate-180 flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6"/>
                                </svg>
                            </button>

                            <div
                                class="hs-dropdown-menu w-40 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white shadow-md rounded-lg p-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700"
                                aria-labelledby="footer-language-dropdown">
                                <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                                   href="#">
                                    <svg class="size-3.5 rounded-full" xmlns="http://www.w3.org/2000/svg"
                                         id="flag-icon-css-us" viewBox="0 0 512 512">
                                        <g fill-rule="evenodd">
                                            <g stroke-width="1pt">
                                                <path fill="#bd3d44"
                                                      d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                      transform="scale(3.9385)"/>
                                                <path fill="#fff"
                                                      d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                      transform="scale(3.9385)"/>
                                            </g>
                                            <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/>
                                            <path fill="#fff"
                                                  d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                                  transform="scale(3.9385)"/>
                                        </g>
                                    </svg>
                                    English (US)
                                </a>
                                <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                                   href="#">
                                    <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg"
                                         id="flag-icon-css-de" viewBox="0 0 512 512">
                                        <path fill="#ffce00" d="M0 341.3h512V512H0z"/>
                                        <path d="M0 0h512v170.7H0z"/>
                                        <path fill="#d00" d="M0 170.7h512v170.6H0z"/>
                                    </svg>
                                    Deutsch
                                </a>
                                <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                                   href="#">
                                    <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg"
                                         id="flag-icon-css-dk" viewBox="0 0 512 512">
                                        <path fill="#c8102e" d="M0 0h512.1v512H0z"/>
                                        <path fill="#fff" d="M144 0h73.1v512H144z"/>
                                        <path fill="#fff" d="M0 219.4h512.1v73.2H0z"/>
                                    </svg>
                                    Dansk
                                </a>
                                <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                                   href="#">
                                    <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg"
                                         id="flag-icon-css-it" viewBox="0 0 512 512">
                                        <g fill-rule="evenodd" stroke-width="1pt">
                                            <path fill="#fff" d="M0 0h512v512H0z"/>
                                            <path fill="#009246" d="M0 0h170.7v512H0z"/>
                                            <path fill="#ce2b37" d="M341.3 0H512v512H341.3z"/>
                                        </g>
                                    </svg>
                                    Italiano
                                </a>
                                <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                                   href="#">
                                    <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn"
                                         viewBox="0 0 512 512">
                                        <defs>
                                            <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"/>
                                        </defs>
                                        <path fill="#de2910" d="M0 0h512v512H0z"/>
                                        <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)"
                                             xlink:href="#a"/>
                                        <use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)"
                                             xlink:href="#a"/>
                                        <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)"
                                             xlink:href="#a"/>
                                        <use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)"
                                             xlink:href="#a"/>
                                        <use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)"
                                             xlink:href="#a"/>
                                    </svg>
                                    中文 (繁體)
                                </a>
                            </div>
                        </div>
                        <!-- End Language Dropdown -->

                        <div class="space-x-4 text-sm ms-4">
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Terms</a>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Privacy</a>
                            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                               href="#">Status</a>
                        </div>
                    </div>

                    <div class="flex justify-between items-center">
                        <div class="mt-3 sm:hidden">
                            <a class="flex-none text-xl font-semibold dark:text-white" href="#"
                               aria-label="Brand">Brand</a>
                            <p class="mt-1 text-xs sm:text-sm text-gray-600 dark:text-neutral-400">© 2022 Preline.</p>
                        </div>

                        <!-- Social Brands -->
                        <div class="space-x-4">
                            <a class="inline-block text-gray-500 hover:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200"
                               href="#">
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16"
                                     fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                            <a class="inline-block text-gray-500 hover:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200"
                               href="#">
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16"
                                     fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                            <a class="inline-block text-gray-500 hover:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200"
                               href="#">
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                     height="16"
                                     fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                                </svg>
                            </a>
                        </div>
                        <!-- End Social Brands -->
                    </div>
                    <!-- End Col -->
                </div>
            </div>
        </footer>
        <!-- ========== END FOOTER ========== -->
    </div>
</div>
</body>
</html>
