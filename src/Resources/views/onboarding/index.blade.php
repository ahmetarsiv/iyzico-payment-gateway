<x-admin::layouts>
    <x-slot:title>
        @lang('iyzico::app.iyzico.onboarding.title')
    </x-slot>

    <div class="flex items-center justify-between gap-4 max-sm:flex-wrap">
        <p class="text-xl font-bold text-gray-800 dark:text-white">
            @lang('iyzico::app.iyzico.onboarding.title')
        </p>
    </div>

    <div class="mt-7 flex flex-col gap-6 xl:flex-row">

        <div class="flex-1 w-full">
            <div class="box-shadow rounded-lg border bg-white p-5 dark:border-gray-800 dark:bg-gray-900">
                <div class="mb-6 flex items-center gap-3">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 shadow-lg">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                            @lang('iyzico::app.iyzico.onboarding.title')
                        </h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            @lang('iyzico::app.iyzico.onboarding.onboarding-redirect-description')
                        </p>
                    </div>
                </div>

                <div class="pt-2">
                    <a
                        href="https://iyzico.codenteq.com"
                        target="_blank"
                        class="primary-button inline-block w-full text-center px-5 py-3 text-base font-semibold"
                    >
                        @lang('iyzico::app.iyzico.onboarding.go-to-iyzico')
                    </a>
                </div>
            </div>
        </div>

        <div class="flex w-full shrink-0 flex-col gap-5 xl:w-[380px]">
            <div class="box-shadow overflow-hidden rounded-lg border bg-white dark:border-gray-800 dark:bg-gray-900">
                <div class="bg-gradient-to-r from-blue-600 to-indigo-700 p-5">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-white/20 backdrop-blur-sm">
                            <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-white">
                            @lang('iyzico::app.iyzico.onboarding.pricing-title')
                        </h3>
                    </div>
                </div>
                <div class="p-5">
                    <div class="mb-4 flex items-baseline gap-1">
                        <span class="text-3xl font-extrabold text-blue-600 dark:text-blue-400">%2.29</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">@lang('iyzico::app.iyzico.onboarding.starting-from')</span>
                    </div>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-2.5 text-sm text-gray-600 dark:text-gray-300">
                            <svg class="h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            @lang('iyzico::app.iyzico.onboarding.feature-1')
                        </li>
                        <li class="flex items-center gap-2.5 text-sm text-gray-600 dark:text-gray-300">
                            <svg class="h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            @lang('iyzico::app.iyzico.onboarding.feature-2')
                        </li>
                        <li class="flex items-center gap-2.5 text-sm text-gray-600 dark:text-gray-300">
                            <svg class="h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            @lang('iyzico::app.iyzico.onboarding.feature-3')
                        </li>
                        <li class="flex items-center gap-2.5 text-sm text-gray-600 dark:text-gray-300">
                            <svg class="h-5 w-5 flex-shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            @lang('iyzico::app.iyzico.onboarding.feature-4')
                        </li>
                    </ul>
                </div>
            </div>

            <div class="box-shadow rounded-lg border bg-white p-5 dark:border-gray-800 dark:bg-gray-900">
                <div class="mb-3 flex items-center gap-2.5">
                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-50 dark:bg-emerald-900/30">
                        <svg class="h-5 w-5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 dark:text-white">
                        @lang('iyzico::app.iyzico.onboarding.settlement-title')
                    </h3>
                </div>
                <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                    @lang('iyzico::app.iyzico.onboarding.settlement-description')
                </p>
            </div>

            <div class="box-shadow rounded-lg border bg-white p-5 dark:border-gray-800 dark:bg-gray-900">
                <div class="mb-3 flex items-center gap-2.5">
                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-amber-50 dark:bg-amber-900/30">
                        <svg class="h-5 w-5 text-amber-600 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 dark:text-white">
                        @lang('iyzico::app.iyzico.onboarding.info-title')
                    </h3>
                </div>
                <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                    @lang('iyzico::app.iyzico.onboarding.info-description')
                </p>
            </div>
        </div>
    </div>
</x-admin::layouts>
