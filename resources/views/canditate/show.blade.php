@extends('layouts.main')
@section('title', '- Canditates')
@section('content')

    <!DOCTYPE html>
    <html lang="vi">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link data-n-head="true" rel="icon" type="image/x-icon" href="https://abchr.com.vn/frontend/images/logo_hr.svg">
        <!-- Tailwind -->
        <link href="https://abchr.com.vn/frontend/css/app.css?v=1.6" rel="stylesheet" />
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;900&display=swap"
            rel="stylesheet" />
        <link href="https://abchr.com.vn/frontend/css/virtual-select.min.css?v=1.6" rel="stylesheet" />
        <link href="https://abchr.com.vn/frontend/css/index.css?v=1.6" rel="stylesheet" />
        <link href="https://abchr.com.vn/frontend/css/toastr.min.css?v=1.6" rel="stylesheet" />
        <link href="https://abchr.com.vn/akita_chat/chat.css?v=1.6" rel="stylesheet" />
        <link href="https://abchr.com.vn/frontend/lib/MagnificPopup/magnific-popup.css?v=1.6" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://abchr.com.vn/static/css/dropzone.min.css">
        <link rel="stylesheet" href="https://abchr.com.vn/frontend/css/nice-select.css" />
        <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet" />
        <style>
            .mt-4\/3 {
                margin-top: calc(100% * 4 / 3);
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button.current {
                background: #EB5757;
                color: white !important;
                border-radius: 4px;
                border: 1px solid;
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
                background: #EB5757;
                color: white !important;
                border-radius: 4px;
                border: 1px solid;
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
                background: #EB5757;
                color: white;
                border-radius: 4px;
                border: 1px solid;
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button:active {
                background: none;
                color: black !important;
            }

            .nice-select {
                border: none;
                line-height: 1.5rem;
                height: 1.7rem;
            }

            .nice-select .current {
                color: #2F80ED;
            }

            .nice-select:after {
                border-bottom: 2px solid rgba(59, 130, 246, 1) !important;
                border-right: 2px solid rgba(59, 130, 246, 1) !important;
            }

            table.dataTable thead .sorting_asc {
                background-image: none !important;
            }

            table.dataTable thead .sorting {
                background-image: none !important;
            }
        </style>
        <script type="text/javascript">
            //Handle all javascript configs and events
            var $su = {
                homePage: "https://abchr.com.vn",
                module: null,
                action: null,
                ipLocale: null,
                clientLocale: null,
                serverLocale: "vi",
                defaultLocale: 'vi',
                debug: false,
                csrfToken: 'U8azFgSsKZNMsrq7S1OeIEUNYa9MuMUJyvApscBA',
                urlMaps: {},
                helpers: {},
                trans: function(key, defaultMessage = null) {
                    if (typeof doTranslate === 'function') {
                        return doTranslate(this.serverLocale, key);
                    }
                    return defaultMessage ?? key;
                },
                _jQueryReady: [],
                jQueryReady: function(fn) {
                    this._jQueryReady.push(fn);
                }
            };
            $su.jQueryReady(function() {
                if (typeof getCountryCode === 'function') {
                    $su.ipLocale = getCountryCode().toLowerCase();
                }
                if (typeof baseHelper === 'object') {
                    $su.helpers = baseHelper;
                    $su.clientLocale = $su.helpers.getCookie('locale');
                }
            });
        </script>
    </head>

    <body class="bg-gray-100 font-roboto">

        <div class="max-w-screen-xl mx-auto py-4 lg:px-0 px-4">
            <div class="bg-white rounded grid p-4">
                <div class="worker-entry flex-wrap flex md:border-b lg:border-none border-gray-300 pb-4">
                    <div class="avatar">
                        <img class="rounded" src="{{ $worker->avatar_path }}">
                    </div>

                    <!--group button-->
                    <div class="group-button flex flex-col justify-between px-4 py-4 md:py-0">
                        <div class="text-lg md:text-xl pb-2 font-bold text-red-700 text-center md:text-left">
                            {{ $worker->name ?? '' }}
                        </div>
                        <div class=" grid md:grid-cols-1 grid-cols-3 gap-4 items-center">
                            <a class="flex flex-col text-xs md:text-sm font-bold text-blue-500 col-span-3"
                                href="{{ $worker->cv_file ?? '' }}" target="_blank">
                                <div class="py-2 p-4 rounded border border-gray-400 flex w-full">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.4375 0H11.5625C12.082 0 12.5 0.417969 12.5 0.9375V7.5H15.9258C16.6211 7.5 16.9688 8.33984 16.4766 8.83203L10.5352 14.7773C10.2422 15.0703 9.76172 15.0703 9.46875 14.7773L3.51953 8.83203C3.02734 8.33984 3.375 7.5 4.07031 7.5H7.5V0.9375C7.5 0.417969 7.91797 0 8.4375 0ZM20 14.6875V19.0625C20 19.582 19.582 20 19.0625 20H0.9375C0.417969 20 0 19.582 0 19.0625V14.6875C0 14.168 0.417969 13.75 0.9375 13.75H6.66797L8.58203 15.6641C9.36719 16.4492 10.6328 16.4492 11.418 15.6641L13.332 13.75H19.0625C19.582 13.75 20 14.168 20 14.6875ZM15.1562 18.125C15.1562 17.6953 14.8047 17.3438 14.375 17.3438C13.9453 17.3438 13.5938 17.6953 13.5938 18.125C13.5938 18.5547 13.9453 18.9062 14.375 18.9062C14.8047 18.9062 15.1562 18.5547 15.1562 18.125ZM17.6562 18.125C17.6562 17.6953 17.3047 17.3438 16.875 17.3438C16.4453 17.3438 16.0938 17.6953 16.0938 18.125C16.0938 18.5547 16.4453 18.9062 16.875 18.9062C17.3047 18.9062 17.6562 18.5547 17.6562 18.125Z"
                                            fill="#2F80ED" />
                                    </svg>
                                    <span class="pl-2 leading-5">
                                        Download CV
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--group button-->

                    <!--thông tin ứng viên-->
                    <div class="worker-summary">
                        <div class="grid grid-cols-2 gap-y-1 gap-x-4 md:grid-cols-4">
                            <div class="text-gray-600 truncate">Full name</div>
                            <div class="font-semibold truncate">
                                {{ $worker->name ?? '' }}
                            </div>

                            <div class="text-gray-600 truncate">
                                Japanese language proficiency
                            </div>
                            <div class="font-semibold">
                                <div class="italic flex items-center text-gray-500 font-semibold truncate">
                                    {{ $worker->japanese_level ?? '' }}
                                </div>
                            </div>

                            <div class="text-gray-600 truncate">
                                Sex
                            </div>
                            <div class="font-semibold truncate">
                                {{ $worker->gender ?? '' }}
                            </div>

                            <div class="text-gray-600 truncate">
                                Address
                            </div>
                            <div class="font-semibold">
                                <div class="truncate">
                                    {{ $worker->address ?? '' }}
                                </div>
                            </div>

                            <div class="text-gray-600 truncate">
                                Date of birth
                            </div>
                            <div class="font-semibold">
                                <div class="truncate">
                                    {{ $worker->birthday ?? '' }}
                                </div>
                            </div>

                            <div class="text-gray-600 truncate">
                                Education / Qualifications
                            </div>
                            <div class="font-semibold">
                                <div class="truncate">
                                    {{ $worker->education ?? '' }}
                                </div>
                            </div>

                            <div class="text-gray-600 truncate">
                                Desired profession
                            </div>
                            <div class="font-semibold">
                                <div class="truncate">
                                    {{ $worker->apply_position ?? '' }}
                                </div>
                            </div>

                            <div class="text-gray-600 truncate">
                                Collective living experience
                            </div>
                            <div class="font-semibold">
                                <div class="truncate">
                                    {{ $worker->collective_living_experience ?? '' }}
                                </div>
                            </div>

                            <div class="text-gray-600">
                                Height
                            </div>
                            <div class="font-semibold">
                                <div>
                                    {{ $worker->height ?? '' }} cm
                                </div>
                            </div>

                            <div class="text-gray-600">
                                Smoke
                            </div>
                            <div class="font-semibold">
                                <div>
                                    {{ $worker->smoking ?? '' }}
                                </div>
                            </div>

                            <div class="text-gray-600">
                                Weight
                            </div>
                            <div class="font-semibold">
                                <div>
                                    {{ $worker->weight ?? '' }}
                                </div>
                            </div>

                            <div class="text-gray-600">
                                Drink alcohol
                            </div>
                            <div class="font-semibold">
                                <div>
                                    {{ $worker->drink_alcohol ?? '' }}
                                </div>
                            </div>

                            <div class="text-gray-600">
                                Eye sight
                            </div>
                            <div class="font-semibold">
                                <div>
                                    {{ $worker->sight ?? '' }}
                                </div>
                            </div>

                            <div class="text-gray-600">Test IQ</div>
                            <div class="font-semibold">
                                <div>
                                    {{ $worker->test_iq ?? '' }}
                                </div>
                            </div>

                            <div class="text-gray-600">
                                Marital Status
                            </div>
                            <div class="font-semibold">
                                <div>
                                    {{ $worker->marital_status ?? '' }}
                                </div>
                            </div>

                            <div class="text-gray-600">
                                Math Test
                            </div>
                            <div class="font-semibold">
                                <div>
                                    {{ $worker->math_test ?? '' }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--thông tin ứng viên-->
                </div>
            </div>




            <div class="py-4 border-b border-gray-300 md:grid md:grid-cols-3 gap-4">
                <div class="max-w-full pr-6">
                    <div class="font-bold"></div>
                    <div>
                        <div class="italic flex items-center text-gray-500 font-semibold text-base"></div>
                    </div>
                </div>
                <div class="mb-4 md:col-span-2">
                    <div class="mb-4">
                        <div class="font-bold mb-1">
                            Hope for work
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-3 text-base mb-1">
                            <div class="col-span-1 text-gray-500">
                                Desired monthly income
                            </div>
                            <div class="col-span-1 md:col-span-2 font-semibold text-base">
                                {{ $worker->desired_monthly_salary ?? '' }}
                            </div>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-3 text-base mb-1">
                            <div class="col-span-1 text-gray-500">
                                Hope for overtime
                            </div>
                            <div class="col-span-1 md:col-span-2 font-semibold text-base">
                                {{ $worker->want_to_do_more ?? '' }}
                            </div>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-3 text-base mb-1">
                            <div class="col-span-1 text-gray-500">
                                Desired years of employment
                            </div>
                            <div class="col-span-1 md:col-span-2 font-semibold text-base">
                                {{ $worker->want_to_work_in_japan ?? '' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-4 border-b border-gray-300">
                <div class="font-bold mb-4">
                    Self-introduction
                </div>
                <div class="space-x-2 text-base">
                    {{ $worker->introduce_yourself ?? '' }}
                </div>
            </div>


            <div class="py-4 border-b border-gray-300">
                <div class="font-bold mb-4">
                    interview questions
                </div>
                <div class="grid gap-2">
                    {!! $worker->interview_questions ?? '' !!}
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
@section('script')
@endsection
