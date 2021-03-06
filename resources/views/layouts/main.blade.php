<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=970px, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>В контакте</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <style>
        [x-cloak] {
            display: none !important;
        }

        .container {
            max-width: 970px
        }
    </style>
</head>
<body class="min-h-screen bg-gray-100 text-sm">
<header class="bg-white border-b sticky top-0 z-10">
    <div class="container mx-auto">
        <div class="flex justify-between items-center">
            <div class="flex items-center h-12">
                {{-- Logo --}}
                <a href="#" class="block w-40 mr-2 flex-shrink-0">
                    <svg class="h-6" viewBox="0 0 276 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M83.4343 29.7801C83.4343 33.4241 80.0416 36.0629 75.2667 36.0629H64.0835V13.4451H74.8897C79.539 13.4451 82.806 15.9582 82.806 19.4765C82.806 21.8639 81.5495 23.3718 79.6646 24.2514C81.6751 25.0053 83.4343 27.0157 83.4343 29.7801ZM68.984 17.5917V22.4922H74.7641C76.5233 22.4922 77.6542 21.487 77.6542 20.1048C77.6542 18.7226 76.3976 17.5917 74.7641 17.5917H68.984ZM75.2667 31.9163C77.1516 31.9163 78.5338 30.7854 78.5338 29.1519C78.5338 27.5184 77.2772 26.3875 75.2667 26.3875H68.984V31.9163H75.2667Z"
                            fill="black"/>
                        <path
                            d="M101.905 35.9372L94.1148 27.0158H92.8582V35.9372H87.832V13.4451H92.8582V22.1152H94.1148L101.654 13.4451H107.56L98.1357 24.2514L108.439 35.9372H101.905Z"
                            fill="black"/>
                        <path
                            d="M108.439 24.754C108.439 17.9686 113.466 13.0681 120.502 13.0681C127.539 13.0681 132.565 17.9686 132.565 24.754C132.565 31.5393 127.539 36.4398 120.502 36.4398C113.466 36.4398 108.439 31.5393 108.439 24.754ZM127.288 24.754C127.288 20.4817 124.523 17.5917 120.502 17.5917C116.481 17.5917 113.717 20.4817 113.717 24.754C113.717 29.0262 116.481 31.9163 120.502 31.9163C124.523 31.9163 127.288 29.0262 127.288 24.754Z"
                            fill="black"/>
                        <path
                            d="M151.79 13.4451H156.817V35.9372H151.79V26.8901H141.738V35.9372H136.712V13.4451H141.738V22.3665H151.79V13.4451Z"
                            fill="black"/>
                        <path d="M167.623 35.9372V17.9686H159.832V13.4451H180.314V17.9686H172.523V35.9372H167.623Z"
                              fill="black"/>
                        <path
                            d="M201.926 23.3718V35.9372H198.282L197.277 32.4189C196.146 34.3037 193.759 36.4398 190.115 36.4398C185.591 36.4398 182.324 33.4241 182.324 29.2775C182.324 25.1309 185.591 22.2409 192.251 22.2409H197.151C196.9 19.3508 195.392 17.3404 192.628 17.3404C190.366 17.3404 188.858 18.5969 188.104 19.9791L183.581 19.2252C184.712 15.3299 188.607 13.0681 192.879 13.0681C198.408 13.0681 201.926 16.8377 201.926 23.3718ZM197.026 26.1362H192.377C188.607 26.1362 187.35 27.3927 187.35 29.0262C187.35 30.911 188.858 32.1676 191.371 32.1676C194.638 32.1676 197.026 29.7802 197.026 26.1362Z"
                            fill="black"/>
                        <path
                            d="M221.277 35.9372L213.487 27.0158H212.23V35.9372H207.204V13.4451H212.23V22.1152H213.487L221.026 13.4451H226.932L217.508 24.2514L227.811 35.9372H221.277Z"
                            fill="black"/>
                        <path d="M236.858 35.9372V17.9686H229.068V13.4451H249.55V17.9686H241.759V35.9372H236.858Z"
                              fill="black"/>
                        <path
                            d="M274.68 26.1362H256.586C257.089 29.6545 259.602 31.9163 263.371 31.9163C266.01 31.9163 268.021 30.7854 269.152 29.1519L273.801 29.9058C272.167 34.1781 267.769 36.4398 262.994 36.4398C256.209 36.4398 251.309 31.5393 251.309 24.754C251.309 17.9686 256.209 13.0681 262.994 13.0681C269.78 13.0681 274.68 17.9686 274.68 24.5027C274.806 25.1309 274.68 25.6336 274.68 26.1362ZM256.963 22.2409H269.403C268.523 19.4765 266.261 17.466 263.12 17.466C260.104 17.3404 257.717 19.3508 256.963 22.2409Z"
                            fill="black"/>
                        <path
                            d="M0 23.04C0 12.1788 0 6.74826 3.37413 3.37413C6.74826 0 12.1788 0 23.04 0H24.96C35.8212 0 41.2517 0 44.6259 3.37413C48 6.74826 48 12.1788 48 23.04V24.96C48 35.8212 48 41.2517 44.6259 44.6259C41.2517 48 35.8212 48 24.96 48H23.04C12.1788 48 6.74826 48 3.37413 44.6259C0 41.2517 0 35.8212 0 24.96V23.04Z"
                            fill="#0077FF"/>
                        <path
                            d="M25.54 34.5801C14.6 34.5801 8.3601 27.0801 8.1001 14.6001H13.5801C13.7601 23.7601 17.8 27.6401 21 28.4401V14.6001H26.1602V22.5001C29.3202 22.1601 32.6398 18.5601 33.7598 14.6001H38.9199C38.0599 19.4801 34.4599 23.0801 31.8999 24.5601C34.4599 25.7601 38.5601 28.9001 40.1201 34.5801H34.4399C33.2199 30.7801 30.1802 27.8401 26.1602 27.4401V34.5801H25.54Z"
                            fill="white"/>
                    </svg>
                </a>
                {{-- Search --}}
                <div class="w-56 mr-4 flex-shrink-0">
                    <div class="relative">
                        <input type="text"
                               class="w-full pr-4 pl-8 h-8 rounded-lg bg-gray-100 focus:outline-none placeholder-gray-500"
                               placeholder="Поиск">
                        <div class="absolute top-0 left-0 h-full w-8 flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
                {{-- Notifications --}}
                <div class="relative hover:bg-gray-100 px-3 cursor-pointer h-full flex items-center group">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-6 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    <div
                        class="bg-red-500 absolute top-0 right-0 w-4 h-4 rounded-full flex justify-center items-center text-white text-xs mt-2 mr-2">
                        1
                    </div>
                </div>
                {{-- Player --}}
                <div class="">
                    <div class="hover:bg-gray-100 px-2 cursor-pointer h-full flex items-center">
                        <div class="flex items-center mr-4">
                            <div class="group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="group-hover:text-gray-500 w-6 text-gray-400" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="group mx-4">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="group-hover:text-gray-500 w-6 text-gray-400" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="group ">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="group-hover:text-gray-500 w-6 text-gray-400" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <div class="text-gray-500 truncate" style="max-width: 12rem">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, maxime.
                        </div>
                    </div>
                </div>
                {{-- User --}}
            </div>
            <div class="h-12">
                <div x-data="{open: false}" class="relative h-full">
                    <div x-on:click="open = true"
                         class="flex items-center h-full px-3 hover:bg-gray-100 cursor-pointer">
                        <div class="font-medium truncate select-none" style="max-width: 5rem">
                            Евген
                        </div>
                        <div class="mx-2 flex-shrink-0 select-none">
                            <img class="w-8 h-8 rounded-full"
                                 src="https://sun5-4.userapi.com/s/v1/if1/T6_-SgFnozZbOS8FaTwYffnqBU5jdQAffhgAw9Xj1B8UyMppxpre2wkDoT4DEezbyB-Ew9sS.jpg?size=50x50&quality=96&crop=0,353,1538,1538&ava=1"
                                 alt="img">
                        </div>
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-400" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <div x-cloak x-show="open" x-on:click.away="open = false" class="absolute top-full right-0">
                        <div class="bg-white border w-52 py-1 rounded-b shadow-sm">
                            <a href="#" class="flex items-center px-4 py-1 hover:bg-gray-100">
                                <div class="mr-2">
                                    <img class="w-8 h-8 rounded-full"
                                         src="https://sun5-4.userapi.com/s/v1/if1/T6_-SgFnozZbOS8FaTwYffnqBU5jdQAffhgAw9Xj1B8UyMppxpre2wkDoT4DEezbyB-Ew9sS.jpg?size=50x50&quality=96&crop=0,353,1538,1538&ava=1"
                                         alt="img">
                                </div>
                                <div class="">
                                    <div class="text-blue-900">
                                        Евген
                                    </div>
                                    <div class="text-gray-500 text-xs">Перейти в ВК коннект</div>
                                </div>
                            </a>
                            <div class="bg-gray-200 h-px mx-4 my-1"></div>
                            <a href="#"
                               class="text-blue-900 text-xs py-2 flex items-center px-4 py-1 hover:bg-gray-100">
                                Настройки
                            </a>
                            <a href="#"
                               class="text-blue-900 text-xs py-2 flex items-center px-4 py-1 hover:bg-gray-100">
                                Помощь
                            </a>
                            <div class="bg-gray-200 h-px mx-4 my-1"></div>
                            <a href="#"
                               class="text-blue-900 text-xs py-2 flex items-center px-4 py-1 hover:bg-gray-100">
                                Выйти
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container mx-auto">
        <div class="flex items-start pt-4">
            {{-- Left --}}
            <div class="w-40 mr-2 flex-shrink-0">
                <ul class="-ml-1">
                    <li>
                        <a href="#" class="relative flex px-2 py-1.5 rounded hover:bg-gray-200 items-center group">
                            <div
                                class="absolute left-0 top-0 -ml-4 mt-2 opacity-0 group-hover:opacity-100 transition duration-300 delay-1000">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-4 text-gray-400 opacity-50 hover:opacity-100" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 text-blue-500" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                Моя страница
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex px-2 py-1.5 rounded hover:bg-gray-200 items-center group">
                            <div
                                class="absolute left-0 top-0 -ml-4 mt-2 opacity-0 group-hover:opacity-100 transition duration-300 delay-1000">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-4 text-gray-400 opacity-50 hover:opacity-100" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 text-blue-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                                </svg>
                            </div>
                            <div>
                                Новости
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex px-2 py-1.5 rounded hover:bg-gray-200 items-center justify-between">
                            <div class="flex">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 text-blue-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                </div>
                                <div>
                                    Мессенджер
                                </div>
                            </div>
                            <div>
                                <div
                                    class="bg-gray-400 rounded-full w-5 h-5 flex justify-center text-white text-xs items-center">
                                    3
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex px-2 py-1.5 rounded hover:bg-gray-200 items-center group">
                            <div
                                class="absolute left-0 top-0 -ml-4 mt-2 opacity-0 group-hover:opacity-100 transition duration-300 delay-1000">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-4 text-gray-400 opacity-50 hover:opacity-100" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 text-blue-500" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <div>
                                Друзья
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex px-2 py-1.5 rounded hover:bg-gray-200 items-center group">
                            <div
                                class="absolute left-0 top-0 -ml-4 mt-2 opacity-0 group-hover:opacity-100 transition duration-300 delay-1000">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-4 text-gray-400 opacity-50 hover:opacity-100" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 text-blue-500" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <div>
                                Сообщества
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex px-2 py-1.5 rounded hover:bg-gray-200 items-center group">
                            <div
                                class="absolute left-0 top-0 -ml-4 mt-2 opacity-0 group-hover:opacity-100 transition duration-300 delay-1000">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-4 text-gray-400 opacity-50 hover:opacity-100" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 text-blue-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                                </svg>
                            </div>
                            <div>
                                Музыка
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex px-2 py-1.5 rounded hover:bg-gray-200 items-center group">
                            <div
                                class="absolute left-0 top-0 -ml-4 mt-2 opacity-0 group-hover:opacity-100 transition duration-300 delay-1000">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-4 text-gray-400 opacity-50 hover:opacity-100" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 text-blue-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                Видео
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex px-2 py-1.5 rounded hover:bg-gray-200 items-center group">
                            <div
                                class="absolute left-0 top-0 -ml-4 mt-2 opacity-0 group-hover:opacity-100 transition duration-300 delay-1000">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-4 text-gray-400 opacity-50 hover:opacity-100" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 text-blue-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"/>
                                </svg>
                            </div>
                            <div>
                                Клипы
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex px-2 py-1.5 rounded hover:bg-gray-200 items-center group">
                            <div
                                class="absolute left-0 top-0 -ml-4 mt-2 opacity-0 group-hover:opacity-100 transition duration-300 delay-1000">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-4 text-gray-400 opacity-50 hover:opacity-100" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 text-blue-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/>
                                </svg>
                            </div>
                            <div>
                                Клипы
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="bg-gray-200 h-px my-2 ml-8"></div>

                <ul class="flex flex-wrap">
                    <li class="px-2 mb-1">
                        <a href="#" class="block text-gray-500 text-xs hover:underline">
                            Блог
                        </a>
                    </li>
                    <li class="px-2 mb-1">
                        <a href="#" class="block text-gray-500 text-xs hover:underline">
                            Разработчикам
                        </a>
                    </li>
                    <li class="px-2 mb-1">
                        <a href="#" class="block text-gray-500 text-xs hover:underline">
                            Реклама
                        </a>
                    </li>
                    <li class="px-2 mb-1">
                        <div x-data="{open:false}" x-on:mouseenter="open = true" x-on:mouseleave="open = false"
                             class="relative">
                            <button
                                class="flex items-center text-gray-500 text-xs hover:underline focus:outline-none group">
                                <div class="">
                                    Еще
                                </div>
                                <div class="ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class=" w-2.5 text-gray-400 group-hover:text-gray-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </div>
                            </button>
                            <div x-cloak x-show="open" class="absolute top-full left-0">
                                <div
                                    class="mt-1 bg-white border border-gray-300 py-1 rounded shadow-sm whitespace-nowrap">
                                    <a href="#" class="flex items-center px-4 py-2 text-blue-500">О ВКонтакте</a>
                                    <a href="#" class="flex items-center px-4 py-2 text-blue-500">Вакансии</a>
                                    <a href="#" class="flex items-center px-4 py-2 text-blue-500">Правовая
                                        информация</a>
                                    <a href="#" class="flex items-center px-4 py-2 text-blue-500">Защита данных</a>
                                    <a href="#" class="flex items-center px-4 py-2 text-blue-500">Центр информации</a>
                                    <a href="#" class="flex items-center px-4 py-2 text-blue-500">Язык: русский</a>
                                </div>
                                <div class="absolute left-0 top-0 w-3.5 h-3.5 ml-7 -mt-2 overflow-hidden">
                                    <div
                                        class="absolute right-0 left-0 -bottom-2 h-full bg-white border border-gray-300 transform rotate-45 origin-center"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>


            </div>
            {{-- Center --}}
            <div class="w-56 mr-4 flex-shrink-0">
                <div class="bg-white rounded border p-3 pb-1.5 mb-4">
                    <div class="relative group overflow-hidden cursor-pointer">
                        <img class="rounded-sm"
                             src="https://sun5-4.userapi.com/s/v1/if1/182Oy9OkunvSGx6azpk-9Cm63vhp2SCwTyjmLDHx6sDQVGtzVwokMLbibaHCjrGev7sPwIC4.jpg?size=200x200&quality=96&crop=0,353,1538,1538&ava=1"
                             alt="img">
                        <div class="absolute top-0 right-0 opacity-0 group-hover:opacity-100">
                            <button type="button"
                                    class="flex justify-center items-center w-4 h-4 bg-black text-opacity-50 focus:outline-none hover:text-opacity-100 bg-opacity-50 text-white rounded-tr-sm rounded-bl-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                        <div class="absolute bottom-0 right-0 left-0 group-hover:opacity-100">
                            <ul class="bg-black opacity-0 bg-opacity-50 w-full rounded-b-sm transform translate-y-12 group-hover:translate-y-0 group-hover:opacity-100 transition">
                                <li>
                                    <a class="px-3 py-0.1 flex items-center text-white text-opacity-75 hover:text-opacity-100"
                                       href="#">
                                        <div class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                                            </svg>
                                        </div>
                                        <span class="">
                                            Обновить фотографию
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="px-3 py-0.1 flex items-center text-white text-opacity-75 hover:text-opacity-100"
                                       href="#">
                                        <div class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <span class="">
                                            Изменить миниатюру
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="px-3 py-0.1 flex items-center text-white text-opacity-75 hover:text-opacity-100"
                                       href="#">
                                        <div class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <span class="">
                                            Обновить фотографию
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pt-3">
                        <button class="rounded bg-gray-200 py-1 w-full text-gray-500 hover:text-opacity-75"
                                type="button">Редактировать
                        </button>
                    </div>

                    <ul class="mt-3 -mx-3">
                        <li>
                            <a href="#" class="flex items-center px-3 py-1 text-gray-500 hover:bg-gray-100 group">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-6 py-1.5 mr-2 text-gray-400 group-hover:text-gray-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                </div>
                                <span class="">Статистика страницы</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center px-3 py-1 text-gray-500 hover:bg-gray-100 group">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-6 py-1.5 mr-2 text-gray-400 group-hover:text-gray-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <span class="">Воспоминания</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center px-3 py-1 text-gray-500 hover:bg-gray-100 group">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-6 py-1.5 mr-2 text-gray-400 group-hover:text-gray-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                                    </svg>
                                </div>
                                <span class="">Архив историй</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center px-3 py-1 text-gray-500 hover:bg-gray-100 group">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-6 py-1.5 mr-2 text-gray-400 group-hover:text-gray-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                    </svg>
                                </div>
                                <span class="">Денежные переводы</span>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="bg-white rounded border mb-4">
                    <div class="flex justify-between">
                        <a class="pl-3 pt-2 flex-1" href="#">Друзья <span class="text-gray-500">52</span></a>
                        <a class="pr-3 pt-2 text-gray-500 hover:underline" href="#">Обновления</a>
                    </div>
                    <div class=" grid grid-cols-3 gap-3 p-3">
                        <div class="">
                            <a href="#" class="block px-1 mb-1">
                                <img class="rounded-full"
                                     src="https://sun5-3.userapi.com/s/v1/ig2/bUQ33IS7j3tr7Ncdg2ZsafDeaiOsCqSkEevrQIaphv9tzwQKw-Rs6GM-748qSnKCNykvpfqTg1ogFhmyQipJPXBh.jpg?size=50x50&quality=96&crop=135,1171,981,981&ava=1"
                                     alt="img">
                            </a>
                            <div class="text-center truncate">
                                <a class="text-blue-900 hover:underline" href="#">Евгений</a>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="block px-1 mb-1">
                                <img class="rounded-full"
                                     src="https://sun5-4.userapi.com/s/v1/if1/VTn3dMjTWQGNDpz85GJEDBJfWcFTLkwiUNhBOR2iGsblrf2V1K5ZQujKy_8tvof-y7qLsmfm.jpg?size=50x50&quality=96&crop=1,50,667,667&ava=1"
                                     alt="img">
                            </a>
                            <div class="text-center truncate">
                                <a class="text-blue-900 hover:underline" href="#">Елена</a>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="block px-1 mb-1">
                                <img class="rounded-full"
                                     src="https://sun5-4.userapi.com/s/v1/ig2/m_2sh-jU9D7PihIN7olTPmpqB_PTosSMOXeKkZr3a91aFrJmvxdkaejZcVIhasvfTMgomz1qrooFUInzXEdR1EKg.jpg?size=50x50&quality=95&crop=740,884,958,958&ava=1"
                                     alt="img">
                            </a>
                            <div class="text-center truncate">
                                <a class="text-blue-900 hover:underline" href="#">Елена</a>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="block px-1 mb-1">
                                <img class="rounded-full"
                                     src="https://sun5-3.userapi.com/s/v1/if1/8y9YYTVFvyWsXNj9ojUZg4QQvxLLY6F0vE_T8RESbjYoyKOjVeUd_1Yraw9UwrcKio0tnM6U.jpg?size=50x50&quality=96&crop=895,490,994,994&ava=1"
                                     alt="img">
                            </a>
                            <div class="text-center truncate">
                                <a class="text-blue-900 hover:underline" href="#">Павел</a>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="block px-1 mb-1">
                                <img class="rounded-full"
                                     src="https://sun5-4.userapi.com/s/v1/if1/l0JCSgGbiclCfxqvwUwC_bOLxSDaHT9_l_0Y1apGdZH7JLwX213ALIrfVda40fsyEDHtILtL.jpg?size=50x50&quality=96&crop=0,0,719,719&ava=1"
                                     alt="img">
                            </a>
                            <div class="text-center truncate">
                                <a class="text-blue-900 hover:underline" href="#">Юлия</a>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="block px-1 mb-1">
                                <img class="rounded-full"
                                     src="https://sun5-3.userapi.com/s/v1/ig1/_KtL-fooGUUl5pS70CvKRmrWEcSsKw8LKKaLpd5WZuYhUVcm4izAMlEyjfy4zGeIP93kn3J0.jpg?size=50x50&quality=96&crop=1,361,1438,1438&ava=1"
                                     alt="img">
                            </a>
                            <div class="text-center truncate">
                                <a class="text-blue-900 hover:underline" href="#">Мария</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-200 h-px"></div>
                    <a href class="p-3 flex flex-1">Друзья онлайн
                        <div class="ml-1 text-gray-500">68</div>
                    </a>
                    <div class="grid grid-cols-3 gap-3 p-3">
                        <div class="">
                            <a href="#" class="block px-1 mb-1">
                                <img class="rounded-full"
                                     src="https://sun5-3.userapi.com/s/v1/ig2/bUQ33IS7j3tr7Ncdg2ZsafDeaiOsCqSkEevrQIaphv9tzwQKw-Rs6GM-748qSnKCNykvpfqTg1ogFhmyQipJPXBh.jpg?size=50x50&quality=96&crop=135,1171,981,981&ava=1"
                                     alt="img">
                            </a>
                            <div class="text-center truncate">
                                <a class="text-blue-900 hover:underline" href="#">Евгений</a>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="block px-1 mb-1">
                                <img class="rounded-full"
                                     src="https://sun5-4.userapi.com/s/v1/if1/VTn3dMjTWQGNDpz85GJEDBJfWcFTLkwiUNhBOR2iGsblrf2V1K5ZQujKy_8tvof-y7qLsmfm.jpg?size=50x50&quality=96&crop=1,50,667,667&ava=1"
                                     alt="img">
                            </a>
                            <div class="text-center truncate">
                                <a class="text-blue-900 hover:underline" href="#">Елена</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded border mb-4">
                    <a href="#" class=" p-3 flex flex-1">
                        Подписки
                        <div class="pl-2 text-gray-500">26</div>
                    </a>
                    <ul class="px-3 pt-1 pb-3 space-y-3">
                        <li class="flex">
                            <a href="#" class="block px-1 flex-shrink-0">
                                <img class="w-10 rounded-full"
                                     src="https://sun5-3.userapi.com/s/v1/if1/2VU26FcSyoZbXTWEH7HPAnxja8Hqcx0UC5Ah61S2DCqfI93K8I3_p-no82Zo1Uuf2oUg8CBi.jpg?size=50x50&quality=96&crop=56,82,889,889&ava=1"
                                     alt="img">
                            </a>
                            <div class="pl-2 flex-1 mb-0.5">
                                <a href="#" class="block text-blue-900 hover:underline ">
                                    Улётный Юмор
                                </a>
                                <div class="text-[.85rem] text-gray-500 leading-5">
                                    Лучшее из сети
                                </div>
                            </div>
                        </li>
                        <li class="flex">
                            <a href="#" class="block px-1 flex-shrink-0">
                                <img class="w-10 rounded-full"
                                     src="https://sun5-3.userapi.com/s/v1/if1/SxOmL9DzKAxyfJMMB6EvIkWlrJ2EhsfMnLauvHVS-GQCqM65dYIkiAicgc26vzUaMexZ_ch_.jpg?size=50x50&quality=96&crop=21,0,510,510&ava=1"
                                     alt="img">
                            </a>
                            <div class="pl-2 flex-1 mb-0.5">
                                <a href="#" class="block text-blue-900 hover:underline ">
                                    Men's Classical
                                </a>
                                <div class="text-[.85rem] text-gray-500 leading-5">
                                    Мужская эстетика, стиль и саморазвитие.
                                </div>
                            </div>
                        </li>
                        <li class="flex">
                            <a href="#" class="block px-1 flex-shrink-0">
                                <img class="w-10 rounded-full"
                                     src="https://sun5-3.userapi.com/s/v1/if1/HDrb0Sk2dGrlWVnGv-Oc4T5xLd3a4J_Ke-Evi2cGxOfZJ1qqj8YvfoHvu3G0CzywDCEI9jJx.jpg?size=50x50&quality=96&crop=0,44,279,279&ava=1"
                                     alt="img">
                            </a>
                            <div class="pl-2 flex-1 mb-0.5">
                                <a href="#" class="block text-blue-900 hover:underline ">
                                    Фитнес для мозга | Facts
                                </a>
                                <div class="text-[.85rem] text-gray-500 leading-5">
                                    Самое интересное, что происходит в мире!
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="bg-gray-200 h-px"></div>
                    <a href="#" class=" p-3 flex flex-1">
                        Статьи
                        <div class="pl-2 text-gray-500">3</div>
                    </a>
                    <ul class="pt-2 pb-3 px-3 space-y-3">
                        <li>
                            <a href="#" class=" block">
                                <div class="relative overflow-hidden rounded ">
                                    <img class="object-cover max-h-28 w-full"
                                         src="https://sun5-3.userapi.com/s/v1/if2/ywMbMPLbsbjHuo4TcOfEh6ObchdghC4gbABoRNwp2u1rRVOTbc6_WFZ-9cfu9kLBzVmJxFR5Ho2QXVpKih69v95L.jpg?size=487x604&quality=96&type=album"
                                         alt="img">

                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center">
                                        <button
                                            class="hover:opacity-75 flex items-center focus:outline-none rounded bg-white shadow focus:outline-none px-3 py-2">
                                            <div class="mr-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-black"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            Читать
                                        </button>
                                    </div>
                                </div>
                                <div class=" pt-1 hover:underline text-blue-900">
                                    нужно ли много работать
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class=" block">
                                <div class="relative overflow-hidden rounded ">
                                    <img class="object-cover max-h-28 w-full"
                                         src="https://sun5-4.userapi.com/s/v1/if1/bmcMEyeNE4o7oZLS5Nc6sFFi7iWX5PUze_Y0p8fY68Z7UQflfKK3Qs_3kNGJizPLRNBcdAdz.jpg?size=972x855&quality=96&type=album"
                                         alt="img">

                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center">
                                        <button
                                            class="hover:opacity-75 flex items-center focus:outline-none rounded bg-white shadow focus:outline-none px-3 py-2">
                                            <div class="mr-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-black"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            Читать
                                        </button>
                                    </div>
                                </div>
                                <div class=" pt-1 hover:underline text-blue-900">
                                    Дома с прекасным стилем
                                </div>
                            </a>
                        </li>
                    </ul>

                    <div class="bg-gray-200 h-px"></div>
                    <a href="#" class=" p-3 flex flex-1">
                        Видеозаписи
                        <div class="pl-2 text-gray-500">35</div>
                    </a>
                    <ul class="pt-2 pb-3 px-3 space-y-3">
                        <li>
                            <a href="#" class=" block">
                                <div class="relative overflow-hidden rounded ">
                                    <img class="object-cover max-h-28 w-full"
                                         src="https://sun5-3.userapi.com/s/v1/if2/ywMbMPLbsbjHuo4TcOfEh6ObchdghC4gbABoRNwp2u1rRVOTbc6_WFZ-9cfu9kLBzVmJxFR5Ho2QXVpKih69v95L.jpg?size=487x604&quality=96&type=album"
                                         alt="img">

                                    <div class="absolute inset-0 flex justify-center items-center">
                                        <button
                                            class="flex rounded-full w-14 h-14 justify-center items-center bg-black bg-opacity-60 hover:bg-opacity-75 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                                 class="w-5 text-white" fill="currentColor">
                                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <div
                                        class="absolute bottom-2 right-2 bg-black bg-opacity-50 px-2 py-1 text-white rounded">
                                        0:31
                                    </div>
                                </div>
                                <div class="pt-2 text-blue-900 hover:underline">
                                    Супер видео
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class=" block">
                                <div class="relative overflow-hidden rounded ">
                                    <img class="object-cover max-h-28 w-full"
                                         src="https://sun9-81.userapi.com/impf/c858416/v858416219/1facd9/iePBSuKEOcQ.jpg?size=320x240&quality=96&keep_aspect_ratio=1&background=000000&sign=d007d23ed035e2bf964b15bc38faa191&type=video_thumb"
                                         alt="img">
                                    <div class="absolute inset-0 flex justify-center items-center">
                                        <button
                                            class="flex rounded-full w-14 h-14 justify-center items-center bg-black bg-opacity-60 hover:bg-opacity-75 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                                 class="w-5 text-white" fill="currentColor">
                                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <div
                                        class="absolute bottom-2 right-2 bg-black bg-opacity-50 px-2 py-1 text-white rounded">
                                        0:31
                                    </div>
                                </div>
                                <div class="pt-2 text-blue-900 hover:underline">
                                    У меня с алкоголем разговор короткий)
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="bg-gray-200 h-px"></div>
                    <a href="#" class=" p-3 flex flex-1">
                        Аудиозаписи
                        <div class="pl-2 text-gray-500">123</div>
                    </a>
                    <ul class="pt-2 pb-3 px-3 space-y-3">
                        <li>
                            <a href="#" class="flex p-1 hover:bg-gray-200 rounded group">
                                <div
                                    class="relative bg-blue-50 rounded transition duration-75 w-10 h-10 flex-shrink-0 group-hover:bg-gray-500">
                                    <div
                                        class="absolute inset-0 opacity-100 group-hover:opacity-0 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-5 text-blue-500 text-opacity-50 "
                                             fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute inset-0 opacity-0 group-hover:opacity-100 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-7  text-white"
                                             viewBox="0 0 20 20"
                                             fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="pl-2 flex-1 overflow-hidden">
                                    <div class=" font-medium truncate leading-4">
                                        Пробил час
                                    </div>
                                    <div class="inline-block text-gray-500 hover:underline truncate">
                                        Ария
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex p-1 hover:bg-gray-200 rounded group">
                                <div
                                    class="relative bg-blue-50 rounded transition duration-75 w-10 h-10 flex-shrink-0 group-hover:bg-gray-500">
                                    <div
                                        class="absolute inset-0 opacity-100 group-hover:opacity-0 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-5 text-blue-500 text-opacity-50 "
                                             fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute inset-0 opacity-0 group-hover:opacity-100 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-7  text-white"
                                             viewBox="0 0 20 20"
                                             fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="pl-2 flex-1 overflow-hidden">
                                    <div class=" font-medium truncate leading-4">
                                        Выше
                                    </div>
                                    <div class="inline-block text-gray-500 hover:underline truncate">
                                        Выше
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex p-1 hover:bg-gray-200 rounded group">
                                <div
                                    class="relative bg-blue-50 rounded transition duration-75 w-10 h-10 flex-shrink-0 group-hover:bg-gray-500">
                                    <div
                                        class="absolute inset-0 opacity-100 group-hover:opacity-0 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-5 text-blue-500 text-opacity-50 "
                                             fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute inset-0 opacity-0 group-hover:opacity-100 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-7  text-white"
                                             viewBox="0 0 20 20"
                                             fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="pl-2 flex-1 overflow-hidden">
                                    <div class=" font-medium truncate leading-4">
                                        Планетарий
                                    </div>
                                    <div class="inline-block text-gray-500 hover:underline truncate">
                                        Pardon Madame feat. 1nt
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- Right --}}
            <div class="flex-1">
                {{--Profile--}}
                <div x-data="{open:false}" class="bg-white rounded border mb-4">
                    <div class="px-4 py-2">
                        <div class="flex items-center justify-between">
                            <div class="font-medium text-xl">
                                Евгений Чернов
                            </div>
                            <div class="text-gray-400">
                                online
                            </div>
                        </div>
                        <div class="">
                            Самый лучший день - сегодня!
                        </div>
                        <div class="">
                            <div class="bg-gray-200 h-px"></div>
                        </div>
                        <div class="pt-4 space-y-2">
                            <div class="grid grid-cols-3 gap-2">
                                <div class="text-gray-500">
                                    День рождения
                                </div>
                                <div class="col-span-2">
                                    <a href="#" class="text-blue-900 hover:underline">8 ноября</a>
                                    <a href="#" class="text-blue-900 hover:underline">1992 г.</a>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-2">
                                <div class="text-gray-500">
                                    Семейное положение:
                                </div>
                                <div class="col-span-2">
                                    Не женат
                                </div>
                            </div>
                            <button
                                x-on:click="open = !open"
                                class="focus:outline-none hover:bg-gray-100 w-full py-2 text-blue-900 rounded grid grid-cols-3 gap-2 text-left">
                                <div></div>
                                <div class="col-span-2" x-show="open">Скрыть подробную информацию</div>
                                <div class="col-span-2" x-show="!open">Показать подробную информацию</div>
                            </button>

                            <div x-show="open" x-cloak class="group">
                                <div class="relative flex items-center">
                                    <div class="pr-2">Контактная информация</div>
                                    <div class="flex-1">
                                        <div class="h-px bg-gray-200"></div>
                                    </div>
                                    <div
                                        class="absolute top-0 right-0 bg-white pl-2 opacity-0 group-hover:opacity-100 transition duration-75">
                                        <a href="#" class="text-gray-400 hover:underline">Редактировать</a>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="text-gray-500">Инстаграм</div>
                                    <div class="col-span-2 text-blue-900">
                                        <a href="#" class="hover:underline">H2O </a>
                                    </div>
                                </div>
                            </div>
                            <div x-show="open" x-cloak class="group pt-2">
                                <div class="relative flex items-center">
                                    <div class="pr-2">Образование</div>
                                    <div class="flex-1">
                                        <div class="h-px bg-gray-200"></div>
                                    </div>
                                    <div
                                        class="absolute top-0 right-0 bg-white pl-2 opacity-0 group-hover:opacity-100 transition duration-75">
                                        <a href="#" class="text-gray-400 hover:underline">Редактировать</a>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="text-gray-500"></div>
                                    <div class="col-span-2 text-gray-500">
                                        Информация отсутствует
                                    </div>
                                </div>
                            </div>
                            <div x-show="open" x-cloak class="group pt-2">
                                <div class="relative flex items-center">
                                    <div class="pr-2">Личная информация</div>
                                    <div class="flex-1">
                                        <div class="h-px bg-gray-200"></div>
                                    </div>
                                    <div
                                        class="absolute top-0 right-0 bg-white pl-2 opacity-0 group-hover:opacity-100 transition duration-75">
                                        <a href="#" class="text-gray-400 hover:underline">Редактировать</a>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="text-gray-500">Интересы</div>
                                    <div class="col-span-2 text-gray-500">
                                        <ul>
                                            <li>
                                                <a href="#" class="text-blue-500 hover:underline">Книги,</a>
                                                <a href="#" class="text-blue-500 hover:underline">Спорт,</a>
                                                <a href="#" class="text-blue-500 hover:underline">Музыка,</a>
                                                <a href="#" class="text-blue-500 hover:underline">Путешествия,</a>
                                                <a href="#" class="text-blue-500 hover:underline">Природа,</a>
                                                <a href="#" class="text-blue-500 hover:underline">Технологии.</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="text-gray-500">Любимые цитаты</div>
                                    <div class="col-span-2 text-[.85rem]">
                                        Обучение программированию не может научить быть экспертом, также как и изучение
                                        кистей и красок не может превратить кого-либо в художника.
                                    </div>
                                </div>
                            </div>
                            <div class="border-t flex justify-center items-center text-center">
                                <a href="" class="block p-3 group">
                                    <div class="text-blue-900 text-xl leading-4">53</div>
                                    <div class="text-gray-500 text-opacity-75 group-hover:text-blue-900">друга</div>
                                </a>
                                <a href="" class="block p-3 group">
                                    <div class="text-blue-900 text-xl leading-4">104</div>
                                    <div class="text-gray-500 text-opacity-75 group-hover:text-blue-900">подписчика
                                    </div>
                                </a>
                                <a href="" class="block p-3 group">
                                    <div class="text-blue-900 text-xl leading-4">1170</div>
                                    <div class="text-gray-500 text-opacity-75 group-hover:text-blue-900">фотографий
                                    </div>
                                </a>
                                <a href="" class="block p-3 group">
                                    <div class="text-blue-900 text-xl leading-4">4</div>
                                    <div class="text-gray-500 text-opacity-75 group-hover:text-blue-900">отметки</div>
                                </a>
                                <a href="" class="block p-3 group">
                                    <div class="text-blue-900 text-xl leading-4">3</div>
                                    <div class="text-gray-500 text-opacity-75 group-hover:text-blue-900">статьи</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{--Photo--}}
                <div class="bg-white rounded border mb-4">
                    <div class="flex justify-between items-center">
                        <a href="" class="flex-1 pl-4 pt-2 pb-1">
                            Мои фотографии <span class=" text-gray-500">1170</span>
                        </a>
                        <a href="" class="pr-4 pt-2 text-gray-500 hover:underline">показать на карте</a>
                    </div>
                    <div class="px-4 pt-2 pb-4">
                        <div class="grid grid-cols-4 gap-2">
                            <div class="relative group pt-[100%] cursor-pointer">
                                <div class="absolute inset-0">
                                    <img class="object-cover h-full w-full"
                                         src="https://sun5-3.userapi.com/s/v1/if2/RJGPPoEbu7wElsuHR0triRFiVXTYzGV7LysU_tYZDCh8DUMLMa25HuksEe_rGIcad2znuiMpGGvZbilKYP-4ky9e.jpg?size=604x402&quality=96&type=album"
                                         alt="">
                                </div>
                                <div class="absolute top-0 right-0 opacity-0 group-hover:opacity-100">
                                    <button type="button"
                                            class="flex justify-center items-center w-4 h-4 bg-black text-opacity-50 focus:outline-none hover:text-opacity-100 bg-opacity-50 text-white rounded-tr-sm rounded-bl-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none"
                                             viewBox="0 0 24 24"
                                             stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="relative group pt-[100%] cursor-pointer">
                                <div class="absolute inset-0">
                                    <img class="object-cover h-full w-full"
                                         src="https://sun5-4.userapi.com/s/v1/if1/LumoGrb4dgLXyqZ2A2g4K16xCBtlfcWErmPBhqMg60jPTVI3t9EnGOJ80Nhw5fTOLh7NyrWR.jpg?size=604x531&quality=96&type=album"
                                         alt="">
                                </div>
                                <div class="absolute top-0 right-0 opacity-0 group-hover:opacity-100">
                                    <button type="button"
                                            class="flex justify-center items-center w-4 h-4 bg-black text-opacity-50 focus:outline-none hover:text-opacity-100 bg-opacity-50 text-white rounded-tr-sm rounded-bl-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none"
                                             viewBox="0 0 24 24"
                                             stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="relative group pt-[100%] cursor-pointer">
                                <div class="absolute inset-0">
                                    <img class="object-cover h-full w-full"
                                         src="https://sun5-3.userapi.com/s/v1/if1/iNP74aX29wnYjfW4bHKtmu4WeNOIRZduvrLi6_D2pGM7Eyu0a_NnufoGfME1He3-y9ZtxBl2.jpg?size=130x114&quality=96&type=album"
                                         alt="">
                                </div>
                                <div class="absolute top-0 right-0 opacity-0 group-hover:opacity-100">
                                    <button type="button"
                                            class="flex justify-center items-center w-4 h-4 bg-black text-opacity-50 focus:outline-none hover:text-opacity-100 bg-opacity-50 text-white rounded-tr-sm rounded-bl-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none"
                                             viewBox="0 0 24 24"
                                             stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="relative group pt-[100%] cursor-pointer">
                                <div class="absolute inset-0">
                                    <img class="object-cover h-full w-full"
                                         src="https://sun5-4.userapi.com/s/v1/if2/sT-FiZH1hoGZwH4axEMufkcLroSlneWb5lumNhYzIeQoxcwThIhlFdz34NJdEHPGG2gW3KCPzIkQ93j8b5Vj4gxZ.jpg?size=500x500&quality=96&type=album"
                                         alt="">
                                </div>
                                <div class="absolute top-0 right-0 opacity-0 group-hover:opacity-100">
                                    <button type="button"
                                            class="flex justify-center items-center w-4 h-4 bg-black text-opacity-50 focus:outline-none hover:text-opacity-100 bg-opacity-50 text-white rounded-tr-sm rounded-bl-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none"
                                             viewBox="0 0 24 24"
                                             stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                {{--Form--}}
                <div x-data="{open:false}" class="bg-white mb-4 transition">
                    <div class="px-4">
                        <div class="flex">
                            <div class="flex-shrink-0 pt-3">
                                <img class=" w-6 rounded-full"
                                     src="https://sun5-4.userapi.com/s/v1/if1/T6_-SgFnozZbOS8FaTwYffnqBU5jdQAffhgAw9Xj1B8UyMppxpre2wkDoT4DEezbyB-Ew9sS.jpg?size=50x50&quality=96&crop=0,353,1538,1538&ava=1"
                                     alt="">
                            </div>
                            <div class="flex-1">
                                <div class="relative">
                                    <div x-bind:class="{'text-gray-400':open, 'text-gray-500': ! open}"
                                         class="absolute top-0 mt-3 left-3 text-gray-400 ">
                                        Что у вас нового?
                                    </div>
                                    <div x-on:focus="open = true" x-on:blur="open = false"
                                         x-bind:class="{'text-gray-400 min-h-[5rem]':open}"
                                         class="relative p-3 resize-none w-full focus:outline-none"
                                         contenteditable></div>
                                </div>
                            </div>

                            <div x-show="!open" class="flex items-center space-x-2">
                                <button class="focus:outline-none group" aria-label="Фотография" data-balloon-pos="up">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-6 text-gray-400 group-hover:text-gray-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </button>
                                <button class="focus:outline-none group" aria-label="Видеозапись" data-balloon-pos="up">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-6 text-gray-400 group-hover:text-gray-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </button>
                                <button class="focus:outline-none group" aria-label="Музыка" data-balloon-pos="up">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-6 text-gray-400 group-hover:text-gray-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                                    </svg>
                                </button>
                            </div>
                            <div x-show="open" x-cloak class="flex items-start space-x-2">
                                <button class="focus:outline-none group" aria-label="Фотография" data-balloon-pos="up">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mt-3 h-6 w-6 text-gray-400"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="" x-show="open" x-cloak>
                            <div class="bg-gray-200 h-px"></div>
                            <div class="py-3 flex items-center space-x-3">
                                <div class="relative">
                                    <button class="flex items-center focus:outline-none text-gray-400">
                                        Видно всем
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-4 text-gray-500"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                                <div class="relative">
                                    <button class="flex items-center focus:outline-none text-gray-400">
                                        Сейчас
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-4 text-gray-500"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                                <div class="relative">
                                    <button class="flex items-center focus:outline-none text-gray-400">
                                        Тематика
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-4 text-gray-500"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-show="open" x-cloak class="px-4 py-2 bg-gray-50 rounded-b border-t">
                        <div class="flex items-center justify-between">
                            <div class="">
                                <div class="">
                                    <div class="flex items-center space-x-2">
                                        <button class="focus:outline-none group" aria-label="Фотография"
                                                data-balloon-pos="up">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 class="w-4 text-gray-400 group-hover:text-gray-500" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            </svg>
                                        </button>
                                        <button class="focus:outline-none group" aria-label="Видеозапись"
                                                data-balloon-pos="up">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 class="w-4 text-gray-400 group-hover:text-gray-500" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </button>
                                        <button class="focus:outline-none group" aria-label="Музыка"
                                                data-balloon-pos="up">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 class="w-4 text-gray-400 group-hover:text-gray-500" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <button class="focus:outline-none flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-4 text-gray-400 group-hover:text-gray-500 mr-1" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </button>
                                <button
                                    class="px-3.5 py-1 bg-blue-700 bg-opacity-90 text-white hover:text-opacity-80 focus:outline-none rounded">
                                    Опубликовать
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                {{--Posts 1--}}
                <div class="bg-white rounded border mb-4">
                    <div class="p-4">
                        <div class="flex justify-between">
                            <div class="flex items-center">
                                <a href="#" class="block flex-shrink-0">
                                    <img class=" w-12 rounded-full"
                                         src="https://sun5-4.userapi.com/s/v1/if1/T6_-SgFnozZbOS8FaTwYffnqBU5jdQAffhgAw9Xj1B8UyMppxpre2wkDoT4DEezbyB-Ew9sS.jpg?size=50x50&quality=96&crop=0,353,1538,1538&ava=1"
                                         alt="">
                                </a>
                                <div class="pl-2">
                                    <a href="#" class="block font-medium text-blue-900 hover:underline">
                                        Евген
                                    </a>
                                    <a href="#" class="block text-gray-400 hover:underline">
                                        10 июля в 16:15
                                    </a>
                                </div>
                            </div>
                            <div class="">
                                <div x-data="{open:false}" x-on:mouseenter="open=true" x-on:mouseleave="open=false"
                                     class="relative">
                                    <button class="focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pt-2 w-4 text-gray-400"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                        </svg>
                                    </button>
                                    <div x-cloak x-show="open" class="absolute top-full -right-4">
                                        <div
                                            class="mt-1 bg-white border border-gray-300 py-1 rounded shadow-sm whitespace-nowrap">
                                            <a href="#" class="flex items-center px-4 py-1.5 text-blue-500">Удалить
                                                запись</a>
                                            <a href="#" class="flex items-center px-4 py-1.5 text-blue-500">Архивировать
                                                запись</a>
                                            <a href="#" class="flex items-center px-4 py-1.5 text-blue-500">Сохранить в
                                                закладках</a>
                                            <a href="#"
                                               class="flex items-center px-4 py-1.5 text-blue-500">Закрепить</a>
                                            <a href="#" class="flex items-center px-4 py-1.5 text-blue-500">Выключить
                                                комментарии</a>
                                        </div>
                                        <div class="absolute right-0 top-0 w-3.5 h-3.5 mr-4 -mt-2 overflow-hidden">
                                            <div
                                                class="absolute right-0 left-0 -bottom-2 h-full bg-white border border-gray-300 transform rotate-45 origin-center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3">
                            <div class="">
                                Отличный дизайн
                                <a href="" class="text-blue-900 hover:underline">Модерн</a>
                                <div class="grid grid-cols-3">
                                    <div class="pt-3 col-span-2">
                                        <img
                                            src="https://sun5-4.userapi.com/s/v1/if2/844A0PIPBpicXOjI1CyNGcVfqwRH2t0rWYCrzfmWJJ8JBSmEd7Z55Ybg12odfE8KvzXlX0lkgR0iosyFI5pD2XLx.jpg?size=483x604&quality=96&type=album"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3 ">
                            <div class="bg-gray-200 h-px"></div>
                            <div class="flex justify-between pt-2">
                                <div class="flex items-center space-x-4">
                                    <div x-data="{liked: false}" x-on:click="liked= !liked" class="">
                                        <div x-show="liked" x-cloak class="">
                                            <button class="flex items-center focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-red-400"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                <div class="pl-1.5 text-gray-500">19</div>
                                            </button>
                                        </div>
                                        <div x-show="! liked" class="">
                                            <button class="flex items-center focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-gray-400"
                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                     stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                                </svg>
                                                <div class="pl-1.5 text-gray-500">18</div>
                                            </button>
                                        </div>
                                    </div>
                                    <button class="focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-gray-400" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                        </svg>
                                    </button>
                                    <button class="focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-gray-400" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex items-center pt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-400" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>

                                    <div class="text-gray-500 ml-1">
                                        655
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--Posts 2--}}
                <div class="bg-white rounded border mb-4">
                    <div class="p-4">
                        <div class="flex justify-between">
                            <div class="flex items-center">
                                <a href="#" class="block flex-shrink-0">
                                    <img class=" w-12 rounded-full"
                                         src="https://sun5-4.userapi.com/s/v1/if1/T6_-SgFnozZbOS8FaTwYffnqBU5jdQAffhgAw9Xj1B8UyMppxpre2wkDoT4DEezbyB-Ew9sS.jpg?size=50x50&quality=96&crop=0,353,1538,1538&ava=1"
                                         alt="">
                                </a>
                                <div class="pl-2">
                                    <a href="#" class="block font-medium text-blue-900 hover:underline">
                                        Евген
                                    </a>
                                    <a href="#" class="block text-gray-400 hover:underline">
                                        10 июля в 16:15
                                    </a>
                                </div>
                            </div>
                            <div class="">
                                <div x-data="{open:false}" x-on:mouseenter="open=true" x-on:mouseleave="open=false"
                                     class="relative">
                                    <button class="focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pt-2 w-4 text-gray-400"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                        </svg>
                                    </button>
                                    <div x-cloak x-show="open" class="absolute top-full -right-4">
                                        <div
                                            class="mt-1 bg-white border border-gray-300 py-1 rounded shadow-sm whitespace-nowrap">
                                            <a href="#" class="flex items-center px-4 py-1.5 text-blue-500">Удалить
                                                запись</a>
                                            <a href="#" class="flex items-center px-4 py-1.5 text-blue-500">Архивировать
                                                запись</a>
                                            <a href="#" class="flex items-center px-4 py-1.5 text-blue-500">Сохранить в
                                                закладках</a>
                                            <a href="#"
                                               class="flex items-center px-4 py-1.5 text-blue-500">Закрепить</a>
                                            <a href="#" class="flex items-center px-4 py-1.5 text-blue-500">Выключить
                                                комментарии</a>
                                        </div>
                                        <div class="absolute right-0 top-0 w-3.5 h-3.5 mr-4 -mt-2 overflow-hidden">
                                            <div
                                                class="absolute right-0 left-0 -bottom-2 h-full bg-white border border-gray-300 transform rotate-45 origin-center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3">
                            <div class="">
                                Отличный дизайн
                                <a href="" class="text-blue-900 hover:underline">Модерн</a>
                                <div class="grid grid-cols-3">
                                    <div class="pt-3 col-span-2">
                                        <img
                                            src="https://sun5-3.userapi.com/s/v1/if2/z5dAc8uQh1O7DqnMgqKislHLuGil9aLf0caxYgvaDF-mV6t5MOIJ7Cd7mHjbVFmsZgvMM643ohxkshgQW2s9kjoE.jpg?size=453x604&quality=96&type=album"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3 ">
                            <div class="bg-gray-200 h-px"></div>
                            <div class="flex justify-between pt-2">
                                <div class="flex items-center space-x-4">
                                    <div x-data="{liked: true}" x-on:click="liked= !liked" class="">
                                        <div x-show="liked" class="">
                                            <button class="flex items-center focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-red-400"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                <div class="pl-1.5 text-gray-500">19</div>
                                            </button>
                                        </div>
                                        <div x-show="! liked" class="">
                                            <button class="flex items-center focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-gray-400"
                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                     stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                                </svg>
                                                <div class="pl-1.5 text-gray-500">18</div>
                                            </button>
                                        </div>
                                    </div>
                                    <button class="focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-gray-400" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                        </svg>
                                    </button>
                                    <button class="focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-gray-400" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex items-center pt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-400" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>

                                    <div class="text-gray-500 ml-1">
                                        655
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@yield('content')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
