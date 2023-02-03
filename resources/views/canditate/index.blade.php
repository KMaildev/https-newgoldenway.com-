@extends('layouts.main')
@section('title', '- Canditates')
@section('content')

    <!DOCTYPE html>
    <html lang="jp">

    <head>
        <!-- Tailwind -->
        <link href="https://abchr.com.vn/frontend/css/app.css?v=1.6" rel="stylesheet" />
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;900&display=swap"
            rel="stylesheet" />
        <link href="https://abchr.com.vn/frontend/css/virtual-select.min.css?v=1.6" rel="stylesheet" />
        <link href="https://abchr.com.vn/frontend/css/index.css?v=1.6" rel="stylesheet" />
        <link href="https://abchr.com.vn/frontend/css/toastr.min.css?v=1.6" rel="stylesheet" />
        <link href="https://abchr.com.vn/frontend/lib/MagnificPopup/magnific-popup.css?v=1.6" rel="stylesheet" />
        <style>
            @media (min-width: 768px) {
                .item_content {
                    width: calc(100% - 144px);
                }

                #worker-search {
                    padding: 2rem 0 0 0;
                }

                #worker-search #search,
                #worker-search .search-worker {
                    display: none;
                }
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
                serverLocale: "jp",
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


        <div class="w-full bg-gray-100">
            <div class="max-w-screen-xl mx-auto px-4 xl:px-0">
                <div id="worker-search"
                    class="flex justify-center relative items-center py-4 md:py-16 max-w-2xl lg:max-w-4xl m-auto">
                    <div id="show_filter_left" class="bg-white rounded-l p-3 pr-0 block md:hidden">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.9998 4.8001C5.9998 4.48184 5.87337 4.17661 5.64832 3.95157C5.42328 3.72653 5.11806 3.6001 4.7998 3.6001C4.48154 3.6001 4.17631 3.72653 3.95127 3.95157C3.72622 4.17661 3.5998 4.48184 3.5998 4.8001V13.5217C3.23498 13.7323 2.93204 14.0353 2.72141 14.4001C2.51079 14.765 2.3999 15.1788 2.3999 15.6001C2.3999 16.0214 2.51079 16.4352 2.72141 16.8C2.93204 17.1649 3.23498 17.4678 3.5998 17.6785V19.2001C3.5998 19.5184 3.72622 19.8236 3.95127 20.0486C4.17631 20.2737 4.48154 20.4001 4.7998 20.4001C5.11806 20.4001 5.42328 20.2737 5.64832 20.0486C5.87337 19.8236 5.9998 19.5184 5.9998 19.2001V17.6785C6.36461 17.4678 6.66756 17.1649 6.87818 16.8C7.08881 16.4352 7.19969 16.0214 7.19969 15.6001C7.19969 15.1788 7.08881 14.765 6.87818 14.4001C6.66756 14.0353 6.36461 13.7323 5.9998 13.5217V4.8001ZM13.1998 4.8001C13.1998 4.48184 13.0734 4.17661 12.8483 3.95157C12.6233 3.72653 12.3181 3.6001 11.9998 3.6001C11.6815 3.6001 11.3763 3.72653 11.1513 3.95157C10.9262 4.17661 10.7998 4.48184 10.7998 4.8001V6.3217C10.435 6.53235 10.132 6.83532 9.92141 7.20015C9.71079 7.56498 9.5999 7.97883 9.5999 8.4001C9.5999 8.82136 9.71079 9.23521 9.92141 9.60004C10.132 9.96488 10.435 10.2678 10.7998 10.4785V19.2001C10.7998 19.5184 10.9262 19.8236 11.1513 20.0486C11.3763 20.2737 11.6815 20.4001 11.9998 20.4001C12.3181 20.4001 12.6233 20.2737 12.8483 20.0486C13.0734 19.8236 13.1998 19.5184 13.1998 19.2001V10.4785C13.5646 10.2678 13.8676 9.96488 14.0782 9.60004C14.2888 9.23521 14.3997 8.82136 14.3997 8.4001C14.3997 7.97883 14.2888 7.56498 14.0782 7.20015C13.8676 6.83532 13.5646 6.53235 13.1998 6.3217V4.8001ZM19.1998 3.6001C19.5181 3.6001 19.8233 3.72653 20.0483 3.95157C20.2734 4.17661 20.3998 4.48184 20.3998 4.8001V13.5217C20.7646 13.7323 21.0676 14.0353 21.2782 14.4001C21.4888 14.765 21.5997 15.1788 21.5997 15.6001C21.5997 16.0214 21.4888 16.4352 21.2782 16.8C21.0676 17.1649 20.7646 17.4678 20.3998 17.6785V19.2001C20.3998 19.5184 20.2734 19.8236 20.0483 20.0486C19.8233 20.2737 19.5181 20.4001 19.1998 20.4001C18.8815 20.4001 18.5763 20.2737 18.3513 20.0486C18.1262 19.8236 17.9998 19.5184 17.9998 19.2001V17.6785C17.635 17.4678 17.332 17.1649 17.1214 16.8C16.9108 16.4352 16.7999 16.0214 16.7999 15.6001C16.7999 15.1788 16.9108 14.765 17.1214 14.4001C17.332 14.0353 17.635 13.7323 17.9998 13.5217V4.8001C17.9998 4.48184 18.1262 4.17661 18.3513 3.95157C18.5763 3.72653 18.8815 3.6001 19.1998 3.6001V3.6001Z"
                                fill="#B91C1C" />
                        </svg>
                    </div>
                    <input type="text" value="" readonly id="search" autocomplete="off" placeholder="候補者を探す"
                        class=" py-3 w-full rounded border-none">
                    <button class="absolute right-0 p-4 focus:outline-none search-worker">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.71 16.29L14.31 12.9C15.407 11.5025 16.0022 9.77666 16 8C16 6.41775 15.5308 4.87103 14.6518 3.55544C13.7727 2.23985 12.5233 1.21447 11.0615 0.608967C9.59966 0.00346625 7.99113 -0.15496 6.43928 0.153721C4.88743 0.462403 3.46197 1.22433 2.34315 2.34315C1.22433 3.46197 0.462403 4.88743 0.153721 6.43928C-0.15496 7.99113 0.00346625 9.59966 0.608967 11.0615C1.21447 12.5233 2.23985 13.7727 3.55544 14.6518C4.87103 15.5308 6.41775 16 8 16C9.77666 16.0022 11.5025 15.407 12.9 14.31L16.29 17.71C16.383 17.8037 16.4936 17.8781 16.6154 17.9289C16.7373 17.9797 16.868 18.0058 17 18.0058C17.132 18.0058 17.2627 17.9797 17.3846 17.9289C17.5064 17.8781 17.617 17.8037 17.71 17.71C17.8037 17.617 17.8781 17.5064 17.9289 17.3846C17.9797 17.2627 18.0058 17.132 18.0058 17C18.0058 16.868 17.9797 16.7373 17.9289 16.6154C17.8781 16.4936 17.8037 16.383 17.71 16.29ZM2 8C2 6.81332 2.3519 5.65328 3.01119 4.66658C3.67047 3.67989 4.60755 2.91085 5.7039 2.45673C6.80026 2.0026 8.00666 1.88378 9.17055 2.11529C10.3344 2.3468 11.4035 2.91825 12.2426 3.75736C13.0818 4.59648 13.6532 5.66558 13.8847 6.82946C14.1162 7.99335 13.9974 9.19975 13.5433 10.2961C13.0892 11.3925 12.3201 12.3295 11.3334 12.9888C10.3467 13.6481 9.18669 14 8 14C6.4087 14 4.88258 13.3679 3.75736 12.2426C2.63214 11.1174 2 9.5913 2 8Z"
                                fill="#828282" />
                        </svg>
                    </button>

                </div>

                <div class="content_page w-full grid lg:grid-cols-4 md:grid-cols-3 gap-4 mb-4">
                    <!-- Filter -->
                    <input type="hidden" name="keyword" id="search-key">
                    <input type="hidden" name="page" id="page">
                    <div id="filter_left" class="hidden md:block">
                        <div class="w-full grid grid-cols-1 gap-5 bg-white rounded-md p-4">
                            <div class="flex -ml-4 items-center">
                                <h2
                                    class="font-semibold text-lg w-full md:text-left pl-3 text-red-700 border-l-4 border-red-700">
                                    フィルター </h2>

                                <a href="https://abchr.com.vn/jp/nguoi-lao-dong">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.51606 14.224C3.25406 11.792 3.29406 7.97999 5.64406 5.61299C6.56506 4.68129 7.76262 4.07233 9.05806 3.87699L8.98906 1.79999C7.17048 2.01957 5.47975 2.84819 4.19206 4.15099C1.04306 7.32099 1.00506 12.44 4.06906 15.682L2.32806 17.434L7.83806 17.735L7.82306 11.901L5.51606 14.224ZM12.1631 2.26499L12.1781 8.09899L14.4851 5.77699C16.7471 8.21099 16.7071 12.023 14.3571 14.388C13.4362 15.3199 12.2386 15.9289 10.9431 16.124L11.0121 18.2C12.8306 17.9801 14.5215 17.152 15.8101 15.85C18.9581 12.678 18.9961 7.55899 15.9321 4.31899L17.6731 2.56499L12.1631 2.26499Z"
                                            fill="#828282" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full flex-col gap-2">
                                <div class="text-gray-700 font-semibold">在留資格タイプ</div>
                                <div class="custom-control custom-checkbox">
                                    <div class="flex items-center">
                                        <input name="type[]" value="THUC_TAP_SINH" type="checkbox"
                                            class="h-4 w-4 checkbox-filter rounded text-red-700 focus:ring-red-700" />
                                        <label class="ml-2 block text-sm cursor-pointer">
                                            技能実習生
                                        </label>
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <div class="flex items-center">
                                        <input name="type[]" value="KNDD" type="checkbox"
                                            class="h-4 w-4 checkbox-filter rounded text-red-700 focus:ring-red-700" />
                                        <label class="ml-2 block text-sm cursor-pointer">
                                            特定技能労働者
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex w-full flex-col gap-2">
                                <label class="text-gray-700 font-semibold">
                                    職種 </label>
                                <div id="job" class="w-full"></div>
                            </div>
                            <div class="flex w-full flex-col gap-2">
                                <div class="text-gray-700 font-semibold">性別</div>
                                <div class="custom-control custom-checkbox">
                                    <div class="flex items-center">
                                        <input id="gender2" name="gender[]" value="MALE" type="checkbox"
                                            class="h-4 w-4 checkbox-filter rounded text-red-700 focus:ring-red-700" />
                                        <label htmlFor="gender2" class="ml-2 block text-sm cursor-pointer">
                                            男
                                        </label>
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <div class="flex items-center">
                                        <input id="gender3" name="gender[]" value="FEMALE" type="checkbox"
                                            class="h-4 w-4 checkbox-filter rounded text-red-700 focus:ring-red-700" />
                                        <label htmlFor="gender3" class="ml-2 block text-sm cursor-pointer">
                                            女
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex w-full flex-col gap-2">
                                <div class="text-gray-700 font-semibold">年齢</div>
                                <div class="custom-control custom-checkbox">
                                    <div class="flex items-center">
                                        <input id="ages1" name="age[]" value="18-25" type="checkbox"
                                            class="h-4 w-4 checkbox-filter rounded text-red-700 focus:ring-red-700" />
                                        <label htmlFor="ages1" class="ml-2 block text-sm cursor-pointer">
                                            18 - 25
                                        </label>
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <div class="flex items-center">
                                        <input id="ages2" name="age[]" value="26-35" type="checkbox"
                                            class="h-4 w-4 checkbox-filter rounded text-red-700 focus:ring-red-700" />
                                        <label htmlFor="ages2" class="ml-2 block text-sm cursor-pointer">
                                            26 - 35
                                        </label>
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <div class="flex items-center">
                                        <input id="ages3" name="age[]" value="18-35" type="checkbox"
                                            class="h-4 w-4 checkbox-filter rounded text-red-700 focus:ring-red-700" />
                                        <label htmlFor="ages3" class="ml-2 block text-sm cursor-pointer">
                                            18 - 35
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex w-full flex-col gap-2">
                                <div class="text-gray-700 font-semibold">背の高さ</div>
                                <div class="grid grid-cols-1 gap-4">
                                    <div class="relative w-full flex gap-8 items-center justify-center text-center">
                                        <input id="height_begin" min="0" max="400" name="height_begin"
                                            placeholder="から (cm)" type="number"
                                            class="w-full py-1 px-2 border border-gray-200 text-sm focus:border-red-700 rounded text-black focus:ring-red-700"
                                            value="" />
                                        <input id="height_end" min="0" max="400" name="height_end"
                                            placeholder="まで (cm)" type="number"
                                            class="w-full py-1 px-2 border border-gray-200 text-sm focus:border-red-700 rounded text-black focus:ring-red-700"
                                            value="" />
                                        <div class="absolute w-2 bg-gray-400" style="height: 1px"></div>
                                    </div>
                                    <button
                                        class="border border-gray-300 text-red-700 hover:border-red-700 uppercase text-base py-2 px-4 w-full rounded">Apply</button>
                                </div>
                            </div>
                            <div class="flex w-full flex-col gap-2">
                                <div class="text-gray-700 font-semibold">体重</div>
                                <div class="grid grid-cols-1 gap-4">
                                    <div class="relative w-full flex gap-8 items-center justify-center text-center">
                                        <input id="weight_begin" min="0" max="200" name="weight_begin"
                                            placeholder="から (kg)" type="number"
                                            class="w-full py-1 px-2 border border-gray-200 text-sm focus:border-red-700 rounded text-black focus:ring-red-700"
                                            value="" />
                                        <input id="weight_end" min="0" max="200" name="weight_end"
                                            placeholder="まで (kg)" type="number"
                                            class="w-full py-1 px-2 border border-gray-200 text-sm focus:border-red-700 rounded text-black focus:ring-red-700"
                                            value="" />
                                        <div class="absolute w-2 bg-gray-400" style="height: 1px"></div>
                                    </div>
                                    <button
                                        class="border border-gray-300 text-red-700 hover:border-red-700 uppercase text-base py-2 px-4 w-full rounded">Apply</button>
                                </div>
                            </div>

                            <div class="flex w-full flex-col gap-2">
                                <label class="text-gray-700 font-semibold">
                                    最終学歴 </label>
                                <div id="education" class="w-full"></div>
                            </div>
                            <div class="flex w-full flex-col gap-2">
                                <label class="text-gray-700 font-semibold">
                                    出身地 </label>
                                <div id="province" class="w-full"></div>
                            </div>
                            <div class="w-full flex-col gap-4 text-left">
                                <a href="https://abchr.com.vn/jp/nguoi-lao-dong"
                                    class="flex justify-center text-center w-full bg-gray-200 text-gray-700 py-2 px-4 rounded-md">
                                    <div class="mr-2 flex items-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.51606 14.224C3.25406 11.792 3.29406 7.97999 5.64406 5.61299C6.56506 4.68129 7.76262 4.07233 9.05806 3.87699L8.98906 1.79999C7.17048 2.01957 5.47975 2.84819 4.19206 4.15099C1.04306 7.32099 1.00506 12.44 4.06906 15.682L2.32806 17.434L7.83806 17.735L7.82306 11.901L5.51606 14.224ZM12.1631 2.26499L12.1781 8.09899L14.4851 5.77699C16.7471 8.21099 16.7071 12.023 14.3571 14.388C13.4362 15.3199 12.2386 15.9289 10.9431 16.124L11.0121 18.2C12.8306 17.9801 14.5215 17.152 15.8101 15.85C18.9581 12.678 18.9961 7.55899 15.9321 4.31899L17.6731 2.56499L12.1631 2.26499Z"
                                                fill="#828282"></path>
                                        </svg>
                                    </div>
                                    リセット
                                </a>
                            </div>
                        </div>
                    </div>


                    <!-- End Filter -->
                    <div class="mb-4 lg:col-span-3 md:col-span-2">
                        <div class="flex items-center justify-between flex-col gap-4 sm:flex-row">
                            <div
                                class="text-lg flex items-center gap-2 font-semibold text-gray-500 text-left w-full md:w-auto">
                                {{ $canditates->count() }}
                                Suitable Candidates
                            </div>
                        </div>


                        <div class="flex gap-4 flex-col">

                            {{-- Show Model  --}}
                            <div class="md:block hidden">
                                <div id="quick_view"
                                    class="fixed rounded-xl hidden shadow-2xl border-none quick-info z-20 bg-white px-4 pt-5 pb-4 w-96 max-w-full sm:p-6 sm:pb-4">
                                    <div class="flex flex-col">
                                        <div class="font-bold text-2xl pb-4 info_name"></div>
                                        <div class="flex flex-col gap-4">
                                            <div class="font-bold text-red-600">
                                                General introduction
                                            </div>
                                            <div class="flex flex-col gap-3">
                                                <div class="flex items-start gap-4">
                                                    <div>
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0)">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M7.45122 7.66209C9.03159 8.68362 11.1635 8.50216 12.5479 7.11773C14.1411 5.52447 14.1411 2.94128 12.5479 1.34802C10.9546 -0.245239 8.37144 -0.245239 6.77818 1.34802C5.3941 2.7321 5.21239 4.86324 6.23303 6.44348L3.99119 8.68532L2.68231 7.37643L1.4639 8.59483L2.77279 9.90372L1.11487 11.5616L2.33327 12.78L3.99119 11.1221L5.30008 12.431L6.51848 11.2126L5.2096 9.90372L7.45122 7.66209ZM11.3295 5.89933C10.4091 6.81968 8.91694 6.81968 7.99659 5.89933C7.07623 4.97897 7.07623 3.48678 7.99659 2.56642C8.91694 1.64607 10.4091 1.64607 11.3295 2.56642C12.2498 3.48678 12.2498 4.97897 11.3295 5.89933Z"
                                                                    fill="#828282" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M13.9408 13.7303C14.9623 15.3107 14.7808 17.4425 13.3964 18.8269C11.8031 20.4202 9.21996 20.4202 7.6267 18.8269C6.03344 17.2337 6.03344 14.6505 7.6267 13.0572C9.01079 11.6731 11.142 11.4914 12.7222 12.5121L15.5162 9.71809L14.1485 9.84243L13.9925 8.12642L18.7597 7.69305L18.3263 12.4602L16.6103 12.3042L16.7346 10.9365L13.9408 13.7303ZM12.178 14.2756C13.0984 15.196 13.0984 16.6882 12.178 17.6085C11.2576 18.5289 9.76546 18.5289 8.8451 17.6085C7.92475 16.6882 7.92475 15.196 8.8451 14.2756C9.76546 13.3553 11.2576 13.3553 12.178 14.2756Z"
                                                                    fill="#828282" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0">
                                                                    <rect width="20" height="20" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <div class="grid sm:grid-cols-2 grid-cols-1 w-full">
                                                        <div class="text-gray-400 text-sm">Gender</div>
                                                        <div class="text-#828282 text-sm font-semibold info_gender"></div>
                                                    </div>
                                                </div>
                                                <div class="flex items-start gap-4">
                                                    <div>
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M4.664 8.4L10 11.6L18 6.8L10 2L2 6.8H10V8.4H4.664ZM2 8.4V14.8L3.6 13.024V9.36L2 8.4ZM10 18L6 15.6L4.4 14.64V9.84L10 13.2L15.6 9.84V14.64L10 18Z"
                                                                fill="#828282" />
                                                        </svg>
                                                    </div>
                                                    <div class="grid sm:grid-cols-2 grid-cols-1 w-full">
                                                        <div class="text-gray-400 text-sm">
                                                            Education / Licenses, Certificates
                                                        </div>
                                                        <div class="text-#828282 text-sm font-semibold info_education">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-start gap-4">
                                                    <div>
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.5 3.4375C6.5 3.32147 6.45391 3.21019 6.37186 3.12814C6.28981 3.04609 6.17853 3 6.0625 3C5.94647 3 5.83519 3.04609 5.75314 3.12814C5.67109 3.21019 5.625 3.32147 5.625 3.4375V3.875H4.75C4.28587 3.875 3.84075 4.05937 3.51256 4.38756C3.18437 4.71575 3 5.16087 3 5.625L3 6.5H17V5.625C17 5.16087 16.8156 4.71575 16.4874 4.38756C16.1592 4.05937 15.7141 3.875 15.25 3.875H14.375V3.4375C14.375 3.32147 14.3289 3.21019 14.2469 3.12814C14.1648 3.04609 14.0535 3 13.9375 3C13.8215 3 13.7102 3.04609 13.6281 3.12814C13.5461 3.21019 13.5 3.32147 13.5 3.4375V3.875H6.5V3.4375ZM17 15.25V7.375H3V15.25C3 15.7141 3.18437 16.1592 3.51256 16.4874C3.84075 16.8156 4.28587 17 4.75 17H15.25C15.7141 17 16.1592 16.8156 16.4874 16.4874C16.8156 16.1592 17 15.7141 17 15.25ZM13.9375 9.125H14.8125C14.9285 9.125 15.0398 9.17109 15.1219 9.25314C15.2039 9.33519 15.25 9.44647 15.25 9.5625V10.4375C15.25 10.5535 15.2039 10.6648 15.1219 10.7469C15.0398 10.8289 14.9285 10.875 14.8125 10.875H13.9375C13.8215 10.875 13.7102 10.8289 13.6281 10.7469C13.5461 10.6648 13.5 10.5535 13.5 10.4375V9.5625C13.5 9.44647 13.5461 9.33519 13.6281 9.25314C13.7102 9.17109 13.8215 9.125 13.9375 9.125Z"
                                                                fill="#828282" />
                                                        </svg>
                                                    </div>
                                                    <div class="grid sm:grid-cols-2 grid-cols-1 w-full">
                                                        <div class="text-gray-400 text-sm">
                                                            Birthday
                                                        </div>
                                                        <div class="text-#828282 text-sm font-semibold info_birthday">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-start gap-4">
                                                    <div>
                                                        <svg width="20" height="17" viewBox="0 0 20 17"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.2 2H11.6C11.0077 2.00172 10.4373 2.19197 10 2.53369C9.56271 2.19197 8.99233 2.00172 8.4 2H2.8C2.58783 2 2.38434 2.07209 2.23431 2.2004C2.08429 2.32872 2 2.50275 2 2.68422V12.9475C2 13.129 2.08429 13.303 2.23431 13.4313C2.38434 13.5596 2.58783 13.6317 2.8 13.6317H7.4064C7.83054 13.6326 8.23712 13.7767 8.5376 14.0327L9.4344 14.7997C9.4416 14.8059 9.4512 14.8079 9.4584 14.8141C9.5272 14.8688 9.604 14.9167 9.6936 14.9482H9.6952C9.89037 15.0173 10.1096 15.0173 10.3048 14.9482H10.3064C10.396 14.9167 10.4728 14.8681 10.5416 14.8141C10.5488 14.8079 10.5584 14.8059 10.5656 14.7997L11.4624 14.0327C11.7629 13.7767 12.1695 13.6326 12.5936 13.6317H17.2C17.4122 13.6317 17.6157 13.5596 17.7657 13.4313C17.9157 13.303 18 13.129 18 12.9475V2.68422C18 2.50275 17.9157 2.32872 17.7657 2.2004C17.6157 2.07209 17.4122 2 17.2 2ZM16.4 12.2633H12.5936C11.9543 12.2649 11.33 12.429 10.8 12.7347V4.05266C10.8 3.67565 11.1584 3.36844 11.6 3.36844H16.4V12.2633Z"
                                                                fill="#828282" />
                                                        </svg>
                                                    </div>
                                                    <div class="grid sm:grid-cols-2 grid-cols-1 w-full">
                                                        <div class="text-gray-400 text-sm">
                                                            Japanese level
                                                        </div>
                                                        <div class="text-#828282 text-sm font-semibold info_japan_level">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-start gap-4">
                                                    <div>
                                                        <svg width="20" height="19" viewBox="0 0 20 19"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.59375 9.5H11.4062V10.4375H8.59375V9.5Z"
                                                                fill="#828282" />
                                                            <path
                                                                d="M14.9806 10.4375H12.3438V10.9062C12.3438 11.1653 12.134 11.375 11.875 11.375H8.125C7.86597 11.375 7.65625 11.1653 7.65625 10.9062V10.4375H5.01941C4.41333 10.4375 3.87732 10.0511 3.68542 9.4762L2 4.41907V14.6562C2 15.4316 2.63086 16.0625 3.40625 16.0625H16.5938C17.3691 16.0625 18 15.4316 18 14.6562V4.41943L16.3145 9.4762C16.1227 10.0511 15.5867 10.4375 14.9806 10.4375Z"
                                                                fill="#828282" />
                                                            <path
                                                                d="M11.8751 2H8.12512C7.34973 2 6.71887 2.63086 6.71887 3.40625V3.875H2.80664L4.57458 9.17957C4.63867 9.37134 4.81763 9.5 5.01953 9.5H7.65637V9.03125C7.65637 8.77222 7.86609 8.5625 8.12512 8.5625H11.8751C12.1342 8.5625 12.3439 8.77222 12.3439 9.03125V9.5H14.9807C15.1826 9.5 15.3616 9.37134 15.4257 9.17957L17.1937 3.875H13.2814V3.40625C13.2814 2.63086 12.6505 2 11.8751 2ZM7.65637 3.875V3.40625C7.65637 3.14758 7.86645 2.9375 8.12512 2.9375H11.8751C12.1338 2.9375 12.3439 3.14758 12.3439 3.40625V3.875H7.65637Z"
                                                                fill="#828282" />
                                                        </svg>

                                                    </div>
                                                    <div class="grid sm:grid-cols-2 grid-cols-1 w-full">
                                                        <div class="text-gray-400 text-sm">
                                                            Desired occupation
                                                        </div>
                                                        <div class="text-#828282 text-sm font-semibold info_job_want">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-start gap-4">
                                                    <div>
                                                        <svg width="19" height="21" viewBox="0 0 19 21"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M4.91667 2C6.4 2 7.14167 3.8 6.1 4.85C5.05 5.89167 3.25 5.15 3.25 3.66667C3.25 3.22464 3.42559 2.80072 3.73816 2.48816C4.05072 2.17559 4.47464 2 4.91667 2V2ZM3.66667 6.16667H6.16667C6.60869 6.16667 7.03262 6.34226 7.34518 6.65482C7.65774 6.96738 7.83333 7.39131 7.83333 7.83333V12.4167H6.58333V18.6667H3.25V12.4167H2V7.83333C2 7.39131 2.17559 6.96738 2.48816 6.65482C2.80072 6.34226 3.22464 6.16667 3.66667 6.16667V6.16667ZM16.5833 7H11.5833V8.66667H16.5833V7ZM16.5833 9.5H14.0833V11.1667H16.5833V9.5ZM16.5833 2H11.5833V3.66667H16.5833V2ZM16.5833 4.5H14.0833V6.16667H16.5833V4.5ZM16.5833 12H11.5833V13.6667H16.5833V12ZM16.5833 17H11.5833V18.6667H16.5833V17ZM16.5833 14.5H14.0833V16.1667H16.5833"
                                                                fill="#828282" />
                                                        </svg>
                                                    </div>
                                                    <div class="grid sm:grid-cols-2 grid-cols-1 w-full">
                                                        <div class="text-gray-400 text-sm">
                                                            Height
                                                        </div>
                                                        <div class="text-#828282 text-sm font-semibold info_height">cm
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-start gap-4">
                                                    <div>
                                                        <svg width="20" height="19" viewBox="0 0 20 19"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 2C10.8487 2 11.6626 2.35119 12.2627 2.97631C12.8629 3.60143 13.2 4.44928 13.2 5.33333C13.2 5.94167 13.048 6.50833 12.768 7H14.8C15.56 7 16.2 7.55833 16.36 8.3C17.968 14.975 18 15.15 18 15.3333C18 15.7754 17.8314 16.1993 17.5314 16.5118C17.2313 16.8244 16.8243 17 16.4 17H3.6C3.17565 17 2.76869 16.8244 2.46863 16.5118C2.16857 16.1993 2 15.7754 2 15.3333C2 15.15 2.032 14.975 3.64 8.3C3.8 7.55833 4.44 7 5.2 7H7.232C6.94602 6.49533 6.79673 5.91935 6.8 5.33333C6.8 4.44928 7.13714 3.60143 7.73726 2.97631C8.33737 2.35119 9.15131 2 10 2V2ZM10 3.66667C9.57565 3.66667 9.16869 3.84226 8.86863 4.15482C8.56857 4.46738 8.4 4.89131 8.4 5.33333C8.4 5.77536 8.56857 6.19928 8.86863 6.51184C9.16869 6.8244 9.57565 7 10 7C10.4243 7 10.8313 6.8244 11.1314 6.51184C11.4314 6.19928 11.6 5.77536 11.6 5.33333C11.6 4.89131 11.4314 4.46738 11.1314 4.15482C10.8313 3.84226 10.4243 3.66667 10 3.66667V3.66667Z"
                                                                fill="#828282" />
                                                        </svg>
                                                    </div>
                                                    <div class="grid sm:grid-cols-2 grid-cols-1 w-full">
                                                        <div class="text-gray-400 text-sm">
                                                            Weight
                                                        </div>
                                                        <div class="text-#828282 text-sm font-semibold info_weight">kg
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-start gap-4">
                                                    <div>
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.40363 16.0173C5.22926 15.8943 3.49796 14.0865 3.49796 11.8817C3.49796 9.5975 5.35614 7.73916 7.64013 7.73916C8.66163 7.73916 9.64251 8.11398 10.4021 8.79456C11.2793 9.57921 11.7826 10.7045 11.7826 11.8817C11.7826 12.8688 11.4285 13.8194 10.7967 14.5636C11.2448 14.8539 11.7592 15.0273 12.2954 15.0669C12.9407 14.1276 13.2806 13.0315 13.2806 11.8817C13.2806 10.6497 12.8906 9.47956 12.1528 8.49774C11.5665 7.7173 10.7862 7.09946 9.89626 6.71093C9.403 6.49518 8.88724 6.35326 8.356 6.28632C9.42979 5.49586 9.84041 4.83335 9.84041 4.25551C9.84041 3.56211 9.2783 3 8.58489 3C8.20812 3 7.87038 3.16618 7.64026 3.42897C7.41014 3.16618 7.07237 3 6.69563 3C6.00222 3 5.44011 3.56211 5.44011 4.25551C5.44011 4.83344 5.85086 5.49605 6.92502 6.28667C4.15146 6.63918 2 9.01391 2 11.8817C2 14.9916 4.53014 17.5218 7.64013 17.5218C8.07012 17.5218 8.49223 17.4741 8.90316 17.3801C8.33856 17.0067 7.83149 16.5472 7.40363 16.0173V16.0173Z"
                                                                fill="#828282" />
                                                            <path
                                                                d="M12.5317 6.2417C12.1017 6.2417 11.6796 6.28941 11.2686 6.38343C11.8332 6.75679 12.3403 7.21635 12.7682 7.7462C14.9426 7.86922 16.6739 9.67701 16.6739 11.8818C16.6739 14.166 14.8157 16.0243 12.5317 16.0243C11.5102 16.0243 10.5293 15.6495 9.76972 14.9689C8.89247 14.1842 8.38919 13.0589 8.38919 11.8818C8.38919 10.8946 8.74332 9.94397 9.37515 9.19989C8.92703 8.90955 8.41257 8.7361 7.8764 8.69655C7.23111 9.63588 6.89124 10.7319 6.89124 11.8818C6.89124 13.1137 7.28122 14.2839 8.01908 15.2657C8.60532 16.0462 9.38558 16.664 10.2756 17.0525C10.9878 17.364 11.7468 17.5219 12.5317 17.5219C15.6417 17.5219 18.1718 14.9918 18.1718 11.8818C18.1718 8.77184 15.6416 6.2417 12.5317 6.2417V6.2417Z"
                                                                fill="#828282" />
                                                        </svg>

                                                    </div>
                                                    <div class="grid sm:grid-cols-2 grid-cols-1 w-full">
                                                        <div class="text-gray-400 text-sm">
                                                            Marital Status
                                                        </div>
                                                        <div class="text-#828282 text-sm font-semibold info_marital"></div>
                                                    </div>
                                                </div>
                                                <div class="flex items-start gap-4">
                                                    <div>
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M3 10.5C3.6615 7.36225 6.5441 5 10 5C13.4559 5 16.3385 7.36225 17 10.5C16.3385 13.6378 13.4559 16 10 16C6.5441 16 3.6615 13.6378 3 10.5ZM10 13.9375C10.9283 13.9375 11.8185 13.5753 12.4749 12.9307C13.1313 12.286 13.5 11.4117 13.5 10.5C13.5 9.58832 13.1313 8.71398 12.4749 8.06932C11.8185 7.42466 10.9283 7.0625 10 7.0625C9.07174 7.0625 8.1815 7.42466 7.52513 8.06932C6.86875 8.71398 6.5 9.58832 6.5 10.5C6.5 11.4117 6.86875 12.286 7.52513 12.9307C8.1815 13.5753 9.07174 13.9375 10 13.9375ZM10 12.5625C10.557 12.5625 11.0911 12.3452 11.4849 11.9584C11.8788 11.5716 12.1 11.047 12.1 10.5C12.1 9.95299 11.8788 9.42839 11.4849 9.04159C11.0911 8.6548 10.557 8.4375 10 8.4375C9.44305 8.4375 8.9089 8.6548 8.51508 9.04159C8.12125 9.42839 7.9 9.95299 7.9 10.5C7.9 11.047 8.12125 11.5716 8.51508 11.9584C8.9089 12.3452 9.44305 12.5625 10 12.5625V12.5625Z"
                                                                fill="#828282" />
                                                        </svg>
                                                    </div>
                                                    <div class="grid sm:grid-cols-2 grid-cols-1 w-full">
                                                        <div class="text-gray-400 text-sm">
                                                            Vision
                                                        </div>
                                                        <div class="text-#828282 text-sm font-semibold info_sight">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-start gap-4">
                                                    <div>
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.7143 11H15.2673C15.2394 11.0312 15.2115 11.0586 15.1836 11.082C15.1557 11.1055 15.1306 11.125 15.1083 11.1406L15.0831 11.1719L9.8683 15.8594C9.76786 15.9531 9.64509 16 9.5 16C9.35491 16 9.23214 15.9531 9.1317 15.8594L3.90848 11.1562C3.88058 11.1458 3.82199 11.0937 3.7327 11H6.82143C6.9442 11 7.05441 10.9648 7.15206 10.8945C7.24972 10.8242 7.3125 10.7344 7.3404 10.625L7.92634 8.42969L9.51674 13.6406C9.55022 13.7448 9.6144 13.8307 9.70926 13.8984C9.80413 13.9661 9.91295 14 10.0357 14C10.1529 14 10.2589 13.9661 10.3538 13.8984C10.4487 13.8307 10.5128 13.7448 10.5463 13.6406L11.7684 9.85156L12.2372 10.7266C12.3376 10.9089 12.4967 11 12.7143 11ZM17 7.65625C17 8.41146 16.7126 9.19271 16.1378 10H13.0491L12.12 8.27344C12.0753 8.1849 12.0042 8.11458 11.9065 8.0625C11.8089 8.01042 11.707 7.98958 11.601 8C11.3499 8.02604 11.1936 8.14583 11.1323 8.35938L10.0525 11.7187L8.41183 6.35937C8.37835 6.25521 8.31278 6.16927 8.21512 6.10156C8.11747 6.03385 8.00725 6 7.88449 6C7.76172 6 7.6529 6.03516 7.55804 6.10547C7.46317 6.17578 7.40179 6.26563 7.37388 6.375L6.4029 10H2.86217C2.28739 9.19271 2 8.41146 2 7.65625C2 6.51042 2.35435 5.61458 3.06306 4.96875C3.77176 4.32292 4.75112 4 6.00112 4C6.3471 4 6.70006 4.05599 7.05999 4.16797C7.41992 4.27995 7.75474 4.43099 8.06445 4.62109C8.37416 4.8112 8.64063 4.98958 8.86384 5.15625C9.08705 5.32292 9.29911 5.5 9.5 5.6875C9.70089 5.5 9.91295 5.32292 10.1362 5.15625C10.3594 4.98958 10.6258 4.8112 10.9355 4.62109C11.2453 4.43099 11.5801 4.27995 11.94 4.16797C12.2999 4.05599 12.6529 4 12.9989 4C14.2489 4 15.2282 4.32292 15.9369 4.96875C16.6456 5.61458 17 6.51042 17 7.65625Z"
                                                                fill="#828282" />
                                                        </svg>

                                                    </div>
                                                    <div class="grid sm:grid-cols-2 grid-cols-1 w-full">
                                                        <div class="text-gray-400 text-sm">
                                                            Healthy Status
                                                        </div>
                                                        <div
                                                            class="text-#828282 text-sm font-semibold info_health_condition">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-start gap-4">
                                                    <div>
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1.50643 10.3123C1.22676 10.3123 1 10.539 1 10.8187V13.5197C1 13.7994 1.22676 14.0261 1.50643 14.0261H14.6737V10.3123H1.50643Z"
                                                                fill="#828282" />
                                                            <path
                                                                d="M18.0499 10.3123H15.6865V14.0261H18.0499C18.3296 14.0261 18.5563 13.7994 18.5563 13.5197V10.8187C18.5563 10.539 18.3295 10.3123 18.0499 10.3123Z"
                                                                fill="#828282" />
                                                            <path
                                                                d="M17.1046 6.09207C17.1046 5.93207 17.148 5.87793 17.2638 5.73316C17.4156 5.54343 17.6448 5.25681 17.6448 4.74153C17.6448 4.46183 17.4181 4.23511 17.1384 4.23511C16.8588 4.23511 16.632 4.46187 16.632 4.74153C16.632 4.90153 16.5887 4.95567 16.4729 5.10044C16.3211 5.29013 16.0918 5.5768 16.0918 6.09207C16.0918 6.60734 16.3211 6.894 16.4729 7.08369C16.5887 7.22847 16.632 7.28261 16.632 7.44261C16.632 7.60253 16.5887 7.65668 16.4729 7.80141C16.3211 7.9911 16.0918 8.27773 16.0918 8.79297C16.0918 9.07267 16.3186 9.2994 16.5982 9.2994C16.8779 9.2994 17.1046 9.07264 17.1046 8.79297C17.1046 8.63304 17.148 8.5789 17.2637 8.43416C17.4155 8.24447 17.6448 7.95784 17.6448 7.44261C17.6448 6.92733 17.4155 6.64064 17.2638 6.45098C17.148 6.30621 17.1046 6.25207 17.1046 6.09207Z"
                                                                fill="#828282" />
                                                            <path
                                                                d="M15.0788 6.09207C15.0788 5.93207 15.1221 5.87793 15.2379 5.73316C15.3897 5.54343 15.619 5.25681 15.619 4.74153C15.619 4.46183 15.3922 4.23511 15.1126 4.23511C14.8329 4.23511 14.6061 4.4618 14.6061 4.7415C14.6061 4.90149 14.5628 4.95564 14.447 5.10041C14.2952 5.2901 14.0659 5.57676 14.0659 6.09204C14.0659 6.60731 14.2952 6.89397 14.447 7.08366C14.5628 7.22843 14.6061 7.28258 14.6061 7.44257C14.6061 7.6025 14.5628 7.65664 14.447 7.80138C14.2952 7.99107 14.0659 8.2777 14.0659 8.79294C14.0659 9.07264 14.2927 9.29936 14.5723 9.29936C14.852 9.29936 15.0788 9.0726 15.0788 8.79294C15.0788 8.63301 15.1221 8.57887 15.2379 8.43413C15.3896 8.24444 15.619 7.95781 15.619 7.44257C15.619 6.9273 15.3896 6.6406 15.2379 6.45095C15.1221 6.30621 15.0788 6.25207 15.0788 6.09207Z"
                                                                fill="#828282" />
                                                        </svg>

                                                    </div>
                                                    <div class="grid sm:grid-cols-2 grid-cols-1 w-full">
                                                        <div class="text-gray-400 text-sm">Smoke</div>
                                                        <div class="text-#828282 text-sm font-semibold info_smoking">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-start gap-4">
                                                    <div>
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0)">
                                                                <path
                                                                    d="M12.0122 5.80398L12.0122 5.80391C11.688 5.47975 11.1625 5.47975 10.8384 5.80391L5.67308 10.9692C5.34892 11.2933 5.34892 11.8189 5.67308 12.143L5.67315 12.1431C5.99731 12.4672 6.52285 12.4672 6.84698 12.1431L12.0122 6.97781C12.3364 6.65365 12.3364 6.12811 12.0122 5.80398V5.80398Z"
                                                                    fill="#828282" />
                                                                <path
                                                                    d="M9.66435 4.39522C9.34019 4.07106 8.81465 4.07106 8.49052 4.39522L4.26439 8.62135C3.94022 8.94551 3.94022 9.47105 4.26439 9.79518C4.58855 10.1193 5.11409 10.1193 5.43822 9.79518L9.66435 5.56908C9.98851 5.24492 9.98851 4.71938 9.66435 4.39522V4.39522Z"
                                                                    fill="#828282" />
                                                                <path
                                                                    d="M8.02082 13.5518L8.02096 13.5519C8.34512 13.8761 8.87066 13.8761 9.19479 13.5519L13.4209 9.32578C13.7451 9.00161 13.7451 8.47607 13.4209 8.15195L13.4208 8.15181C13.0966 7.82765 12.5711 7.82765 12.247 8.15181L8.02086 12.3779C7.69666 12.7021 7.69666 13.2276 8.02082 13.5518V13.5518Z"
                                                                    fill="#828282" />
                                                                <path
                                                                    d="M4.19805 1.27674C4.00354 1.08223 3.68821 1.08223 3.49371 1.27674L1.14588 3.62456C0.951373 3.81907 0.951372 4.1344 1.14588 4.3289L4.14705 7.33007L7.19922 4.2779L4.19805 1.27674Z"
                                                                    fill="#828282" />
                                                                <path
                                                                    d="M16.915 17.9849L17.8541 17.0458C18.0294 16.8705 18.0491 16.593 17.9004 16.3947L16.7461 14.8557L14.725 16.8769L16.264 18.0311C16.4623 18.1799 16.7398 18.1601 16.915 17.9849V17.9849Z"
                                                                    fill="#828282" />
                                                                <path
                                                                    d="M11.1574 14.3402C11.3519 14.5347 11.6672 14.5347 11.8617 14.3402L12.3313 13.8707C12.396 13.806 12.5014 13.806 12.5661 13.8707L13.2704 14.575C13.3351 14.6397 13.3351 14.7451 13.2704 14.8098L12.8008 15.2794C12.6063 15.4739 12.6063 15.7892 12.8008 15.9837L13.153 16.3359C13.3475 16.5304 13.6629 16.5304 13.8574 16.3359L16.2052 13.9881C16.3997 13.7936 16.3997 13.4782 16.2052 13.2837L13.5384 10.6169L10.4863 13.6691L11.1574 14.3402Z"
                                                                    fill="#828282" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0">
                                                                    <rect width="17" height="17" fill="white"
                                                                        transform="translate(18 1.13086) rotate(90)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>

                                                    </div>
                                                    <div class="grid sm:grid-cols-2 grid-cols-1 w-full">
                                                        <div class="text-gray-400 text-sm">Tattoo</div>
                                                        <div class="text-#828282 text-sm font-semibold info_tattoo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Loop  --}}
                            @foreach ($canditates as $canditate)
                                <a href="{{ route('canditate_show', $canditate->id) }}"
                                    class="worker-item relative bg-white rounded-md p-3 flex md:flex-row flex-col items-center gap-4 transform shadow-sm hover:shadow-lg duration-300">
                                    <div class="flex items-start justify-center w-36 h-36">
                                        <div data-id-for-quick="{{ $canditate->id }}"
                                            class="avatar w-full max-w-full h-full object-cover bg-cover bg-center rounded-md bg-gray-50"
                                            style="background-image: url('{{ $canditate->avatar_path }}')" alt="">
                                        </div>
                                    </div>
                                    <div class="item_content flex flex-col justify-between w-full">
                                        <div class="content-user flex md:justify-between md:flex-row flex-col gap-4">
                                            <div class="name-user text-left">
                                                <h3 data-id-for-quick="{{ $canditate->id }}"
                                                    class="worker-name-info text-2xl font-semibold text-black line-clamp-1 text-center md:text-left">
                                                    {{ $canditate->name ?? '' }}
                                                </h3>
                                                <p
                                                    class="w-full text-base font-semibold text-gray-500 text-center md:text-left">
                                                </p>
                                            </div>
                                            <div class="flex justify-center items-center md:items-start z-50">
                                                <div class="text-sm">
                                                    {{ $canditate->created_at ?? '' }}
                                                </div>
                                                <div>
                                                    <svg class="toggle-favorite-icon" data-worker-id="251" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path class="toggle-favorite-icon" data-worker-id="251"
                                                            d="M5 4.99927C5 4.46883 5.21071 3.96013 5.58579 3.58505C5.96086 3.20998 6.46957 2.99927 7 2.99927H17C17.5304 2.99927 18.0391 3.20998 18.4142 3.58505C18.7893 3.96013 19 4.46883 19 4.99927V20.9993L12 17.4993L5 20.9993V4.99927Z"
                                                            stroke="#A1A1AA" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-5 grid-cols-3 w-full  gap-4 justify-between">
                                            <div
                                                class="lg:col-span-4 md:col-span-2 col-span-3 w-full item-detail-primary grid grid-cols-2 lg:grid-cols-3 gap-2 mt-4">
                                                <div class="item-detail flex items-center">
                                                    <div>
                                                        <svg width="20" height="21" viewBox="0 0 20 21"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M6.6386 8.41202C8.21896 9.43354 10.3508 9.25208 11.7353 7.86765C13.3285 6.27439 13.3285 3.69121 11.7353 2.09795C10.142 0.504685 7.55882 0.504685 5.96556 2.09795C4.58148 3.48203 4.39976 5.61316 5.42041 7.1934L3.17857 9.43524L1.86968 8.12636L0.651283 9.34476L1.96017 10.6536L0.302246 12.3116L1.52065 13.53L3.17857 11.872L4.48746 13.1809L5.70586 11.9625L4.39697 10.6536L6.6386 8.41202ZM10.5169 6.64925C9.59651 7.5696 8.10432 7.5696 7.18396 6.64925C6.26361 5.72889 6.26361 4.2367 7.18396 3.31635C8.10432 2.39599 9.59651 2.39599 10.5169 3.31635C11.4372 4.2367 11.4372 5.72889 10.5169 6.64925Z"
                                                                fill="#828282" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M13.1282 14.4802C14.1497 16.0606 13.9682 18.1924 12.5838 19.5768C10.9905 21.1701 8.40734 21.1701 6.81408 19.5768C5.22082 17.9836 5.22082 15.4004 6.81408 13.8071C8.19817 12.423 10.3293 12.2413 11.9096 13.262L14.7036 10.468L13.3359 10.5924L13.1799 8.87635L17.947 8.44297L17.5137 13.2101L15.7977 13.0541L15.922 11.6864L13.1282 14.4802ZM11.3654 15.0255C12.2857 15.9459 12.2857 17.4381 11.3654 18.3584C10.445 19.2788 8.95284 19.2788 8.03248 18.3584C7.11212 17.4381 7.11212 15.9459 8.03248 15.0255C8.95284 14.1052 10.445 14.1052 11.3654 15.0255Z"
                                                                fill="#828282" />
                                                        </svg>
                                                    </div>

                                                    <span class="font-normal text-gray-400 pl-4 ">
                                                        {{ $canditate->gender ?? '' }}
                                                    </span>
                                                </div>
                                                <div class="item-detail flex items-center">
                                                    <div>
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M3.33 8L10 12L20 6L10 0L0 6H10V8H3.33ZM0 8V16L2 13.78V9.2L0 8ZM10 20L5 17L3 15.8V9.8L10 14L17 9.8V15.8L10 20Z"
                                                                fill="#828282" />
                                                        </svg>
                                                    </div>
                                                    <span class="font-normal text-gray-400 pl-4 ">
                                                        {{ $canditate->education ?? '' }}
                                                    </span>
                                                </div>
                                                <div class="item-detail flex items-center">
                                                    <div>
                                                        <svg width="20" height="17" viewBox="0 0 15 17"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M2.91667 0C4.4 0 5.14167 1.8 4.1 2.85C3.05 3.89167 1.25 3.15 1.25 1.66667C1.25 1.22464 1.42559 0.800716 1.73816 0.488155C2.05072 0.175595 2.47464 0 2.91667 0ZM1.66667 4.16667H4.16667C4.60869 4.16667 5.03262 4.34226 5.34518 4.65482C5.65774 4.96738 5.83333 5.39131 5.83333 5.83333V10.4167H4.58333V16.6667H1.25V10.4167H0V5.83333C0 5.39131 0.175595 4.96738 0.488155 4.65482C0.800716 4.34226 1.22464 4.16667 1.66667 4.16667ZM14.5833 5H9.58333V6.66667H14.5833V5ZM14.5833 7.5H12.0833V9.16667H14.5833V7.5ZM14.5833 0H9.58333V1.66667H14.5833V0ZM14.5833 2.5H12.0833V4.16667H14.5833V2.5ZM14.5833 10H9.58333V11.6667H14.5833V10ZM14.5833 15H9.58333V16.6667H14.5833V15ZM14.5833 12.5H12.0833V14.1667H14.5833"
                                                                fill="#828282" />
                                                        </svg>
                                                    </div>
                                                    <span class="font-normal text-gray-400 pl-4 ">
                                                        {{ $canditate->height ?? '' }}cm
                                                    </span>
                                                </div>
                                                <div class="item-detail flex items-center">
                                                    <div>
                                                        <svg width="20" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M4 0.5C4 0.367392 3.94732 0.240215 3.85355 0.146447C3.75979 0.0526784 3.63261 0 3.5 0C3.36739 0 3.24021 0.0526784 3.14645 0.146447C3.05268 0.240215 3 0.367392 3 0.5V1H2C1.46957 1 0.960859 1.21071 0.585786 1.58579C0.210714 1.96086 0 2.46957 0 3L0 4H16V3C16 2.46957 15.7893 1.96086 15.4142 1.58579C15.0391 1.21071 14.5304 1 14 1H13V0.5C13 0.367392 12.9473 0.240215 12.8536 0.146447C12.7598 0.0526784 12.6326 0 12.5 0C12.3674 0 12.2402 0.0526784 12.1464 0.146447C12.0527 0.240215 12 0.367392 12 0.5V1H4V0.5ZM16 14V5H0V14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14ZM12.5 7H13.5C13.6326 7 13.7598 7.05268 13.8536 7.14645C13.9473 7.24021 14 7.36739 14 7.5V8.5C14 8.63261 13.9473 8.75979 13.8536 8.85355C13.7598 8.94732 13.6326 9 13.5 9H12.5C12.3674 9 12.2402 8.94732 12.1464 8.85355C12.0527 8.75979 12 8.63261 12 8.5V7.5C12 7.36739 12.0527 7.24021 12.1464 7.14645C12.2402 7.05268 12.3674 7 12.5 7Z"
                                                                fill="#828282" />
                                                        </svg>
                                                    </div>
                                                    <span class="font-normal text-gray-400 pl-4 ">
                                                        {{ $canditate->birthday ?? '' }}
                                                    </span>
                                                </div>
                                                <div class="item-detail flex items-center">
                                                    <div>
                                                        <svg width="20" height="14" viewBox="0 0 16 14"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.2 0.5H9.6C9.00767 0.501716 8.43729 0.691968 8 1.03369C7.56271 0.691968 6.99233 0.501716 6.4 0.5H0.8C0.587827 0.5 0.384344 0.572087 0.234315 0.700403C0.0842854 0.828719 0 1.00275 0 1.18422V11.4475C0 11.629 0.0842854 11.803 0.234315 11.9313C0.384344 12.0596 0.587827 12.1317 0.8 12.1317H5.4064C5.83054 12.1326 6.23712 12.2767 6.5376 12.5327L7.4344 13.2997C7.4416 13.3059 7.4512 13.3079 7.4584 13.3141C7.5272 13.3688 7.604 13.4167 7.6936 13.4482H7.6952C7.89037 13.5173 8.10963 13.5173 8.3048 13.4482H8.3064C8.396 13.4167 8.4728 13.3681 8.5416 13.3141C8.5488 13.3079 8.5584 13.3059 8.5656 13.2997L9.4624 12.5327C9.76288 12.2767 10.1695 12.1326 10.5936 12.1317H15.2C15.4122 12.1317 15.6157 12.0596 15.7657 11.9313C15.9157 11.803 16 11.629 16 11.4475V1.18422C16 1.00275 15.9157 0.828719 15.7657 0.700403C15.6157 0.572087 15.4122 0.5 15.2 0.5ZM14.4 10.7633H10.5936C9.95431 10.7649 9.32999 10.929 8.8 11.2347V2.55266C8.8 2.17565 9.1584 1.86844 9.6 1.86844H14.4V10.7633Z"
                                                                fill="#828282" />
                                                        </svg>
                                                    </div>
                                                    <span class="font-normal text-gray-400 pl-4 ">
                                                        {{ $canditate->japanese_level ?? '' }}
                                                    </span>
                                                </div>
                                                <div class="item-detail flex items-center">
                                                    <div>
                                                        <svg width="20" height="18" viewBox="0 0 18 18"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9 0.5C9.95478 0.5 10.8705 0.898015 11.5456 1.60649C12.2207 2.31496 12.6 3.27585 12.6 4.27778C12.6 4.96722 12.429 5.60944 12.114 6.16667H14.4C15.255 6.16667 15.975 6.79944 16.155 7.64C17.964 15.205 18 15.4033 18 15.6111C18 16.1121 17.8104 16.5925 17.4728 16.9468C17.1352 17.301 16.6774 17.5 16.2 17.5H1.8C1.32261 17.5 0.864773 17.301 0.527208 16.9468C0.189642 16.5925 0 16.1121 0 15.6111C0 15.4033 0.0360002 15.205 1.845 7.64C2.025 6.79944 2.745 6.16667 3.6 6.16667H5.886C5.56428 5.59471 5.39632 4.94193 5.4 4.27778C5.4 3.27585 5.77928 2.31496 6.45442 1.60649C7.12955 0.898015 8.04522 0.5 9 0.5ZM9 2.38889C8.52261 2.38889 8.06477 2.5879 7.72721 2.94213C7.38964 3.29637 7.2 3.77681 7.2 4.27778C7.2 4.77874 7.38964 5.25919 7.72721 5.61342C8.06477 5.96766 8.52261 6.16667 9 6.16667C9.47739 6.16667 9.93523 5.96766 10.2728 5.61342C10.6104 5.25919 10.8 4.77874 10.8 4.27778C10.8 3.77681 10.6104 3.29637 10.2728 2.94213C9.93523 2.5879 9.47739 2.38889 9 2.38889Z"
                                                                fill="#828282" />
                                                        </svg>
                                                    </div>
                                                    <span class="font-normal text-gray-400 pl-4 ">
                                                        {{ $canditate->weight ?? '' }}kg
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex flex-col md:col-span-1 col-span-3 gap-2 justify-end">
                                                <button
                                                    class="toggle-select-worker bg-gray-500 text-white flex items-center justify-center p-1 rounded-md">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function() {
                // clicked into paginate link
                $(document).on('click',
                    'a[aria-label="pagination.previous"], a[aria-label="pagination.next"], a[aria-label^="Go to page"]',
                    function(e) {
                        e.preventDefault();
                        const stringUrl = $(this).attr('href');
                        const targetPage = stringUrl.split("?")[1].split('=')[1];
                        $('#page').val(targetPage);
                        $('#filter-form').submit();
                    })
                // remove description of paginate
                $('p.text-sm.text-gray-700.leading-5').remove();
                let mouseX;
                let mouseY;
                $(document).mousemove(function(e) {
                    mouseX = e.pageX;
                    mouseY = e.pageY;
                });

                $('#cancel-select').click(function() {
                    $('#select-worker-modal').toggleClass('hidden');
                });

                $('.avatar, .worker-name-info').mousemove(function() {
                    let workerId = $(this).data('id-for-quick');

                    $.ajax({
                        url: `/canditate_ajax/${workerId}`,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('.quick-info').removeClass('hidden');
                            let top = mouseY - window.scrollY;
                            let left = mouseX + 20;
                            let height_box = document.getElementById('quick_view').clientHeight;
                            if ((window.innerHeight - top) < height_box) {
                                top = window.innerHeight - height_box;
                            }
                            $('.quick-info').css({
                                'top': top,
                                'left': left
                            });

                            $('.info_name').text(data.name);
                            $('.info_gender').text(data.gender);
                            $('.info_education').text(data.education);
                            $('.info_birthday').text(data.birthday);
                            $('.info_japan_level').text(data.japanese_level);
                            $('.info_job_want').text(data.apply_position);
                            $('.info_height').text(data.height);
                            $('.info_weight').text(data.weight);
                            $('.info_marital').text(data.marital_status);
                            $('.info_sight').text(data.sight);
                            $('.info_health_condition').text(data.health_condition);
                            $('.info_smoking').text(data.smoking);
                            $('.info_tattoo').text(data.tattoo);
                        },
                    });

                    // let worker = workers.find(worker => worker.id == workerId);
                    // setModalInfoData(worker).then(() => {
                    //     $('.quick-info').removeClass('hidden');
                    //     let top = mouseY - window.scrollY;
                    //     let left = mouseX + 20;
                    //     let height_box = document.getElementById('quick_view').clientHeight;
                    //     if ((window.innerHeight - top) < height_box) {
                    //         top = window.innerHeight - height_box;
                    //     }
                    //     $('.quick-info').css({
                    //         'top': top,
                    //         'left': left
                    //     });
                    // });
                });

                $('.avatar, .worker-name-info').mouseout(function() {
                    $('.quick-info');
                    $('.quick-info').addClass('hidden');
                });
            })
        </script>
    </body>

    </html>
@endsection
@section('script')
@endsection
