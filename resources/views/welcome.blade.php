<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js/app.js') }}" rel="stylesheet">
    <title>Storybook</title>
</head>

<body>

    <div class="flex flex-col h-screen relative">
        <div class="absolute bottom-4 right-5">
            <a href="#">
                <div
                    class="bg-white hover:bg-gray-50 h-12 w-12 rounded-full flex justify-center items-center shadow-2xl border-2">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                        <path fill-rule="evenodd"
                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </a>
        </div>
        <nav class="bg-white flex flex-row justify-between h-14 px-3 py2-1 shadow-lg sticky top-0">
            <div class="flex flex-1/4 justify-between items-center space-x-2 flex-none">
                <div
                    class="bg-blue-700 h-10 w-10 rounded-full text-white font-bold text-5xl flex justify-center items-center">
                    S</div>
                <input class="rounded-full h-10 w-auto outline-none placeholder-gray-500 p-4 bg-gray-100" type="text"
                    name="" id="" placeholder="Search">
            </div>
            <div class="flex flex-2/4 justify-between items-center space-x-2 flex-none">
                <div class="p-3 border-b-4 border-blue-700 w-32 flex justify-center">
                    <a href="#">
                        <svg class="h-7 w-7 text-blue-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                    </a>
                </div>

                <div class="border-b-8 border-transparent w-32 flex justify-center hover:bg-gray-200 rounded-full">
                    <a href="#">
                        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </a>
                </div>

                <div class="border-b-8 border-transparent w-32 flex justify-center hover:bg-gray-200 rounded-full">
                    <a href="#" class="relative">
                        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <div
                            class="bg-red-600 top-0 right-0 rounded-full h-4 w-5 text-xs text-center text-white absolute">
                            5+</div>
                    </a>
                </div>

                <div class="border-b-8 border-transparent w-32 flex justify-center hover:bg-gray-200 rounded-full">
                    <a href="#">
                        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                    </a>
                </div>
                <div class="border-b-8 border-transparent w-32 flex justify-center hover:bg-gray-200 rounded-full">
                    <a href="#">
                        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>
                </div>

            </div>

            <div class="flex flex-1/4 justify-between items-center space-x-2 flex-none">
                <a href="#" class="flex justify-between items-center space-x-2">
                    <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg><strong class="text-center">UserName</strong>
                </a>
                <a href="#">
                    <div class="bg-gray-100 h-11 w-11 rounded-full flex justify-center items-center">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </div>
                </a>
                <a href="">
                    <div class="bg-gray-100 h-11 w-11 rounded-full flex justify-center items-center">

                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </a>
                <a href="#"">
              <div class=" bg-gray-100 h-11 w-11 rounded-full flex justify-center items-center">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                    </svg>
            </div>
            </a>
            <a href="#">
                <div class="bg-gray-100 h-11 w-11 rounded-full flex justify-center items-center">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </a>

    </div>

    </nav>
    <main class="bg-gray-100 overflow-y-auto">
        <div class="flex flex-row">
            <div class="w-1/4 p-4 flex flex-col overflow-y-auto">
                <div class="border-b-2 border-gray-200">
                    @for ($i = 0; $i < 6; $i++)
                        <ul>
                            <li class="hover:bg-gray-200 rounded-lg pl-1">
                                <a href="#" class="flex items-center space-x-2 py-1">
                                    <div class="bg-gray-300 border-white border-2 h-8 w-8 rounded-full block">
                                    </div>
                                    <strong class="font-semibold flex flex-auto">Name</strong>
                                </a>
                            </li>
                        </ul>
                    @endfor
                </div>
                <strong class="text-gray-500">Your shortcuts</strong>
                @for ($i = 0; $i < 25; $i++)
                    <ul>
                        <li class="hover:bg-gray-200 rounded-lg pl-1">
                            <a href="#" class="flex items-center space-x-2 py-1">
                                <div class="bg-gray-300 border-white border-2 h-8 w-8 rounded-full block">
                                </div>
                                <strong class="font-semibold flex flex-auto">Name</strong>
                            </a>
                        </li>
                    </ul>
                @endfor
            </div>
            <div class="w-2/4  py-6 px-10">
                <ul class="flex flex-row space-x-2 relative">
                    <li class="transform transition hover:translate-y-1">
                        <a href="#">
                            <img class="h-52 w-32 rounded-lg shadow-md transform transition object-cover object-center hover:opacity-70"
                                src="https://placekitten.com/200/309" alt="Cat">
                            <div class="absolute top-4 m-5">
                                <img class="rounded-full w-11 h-11 border-4 border-blue-700"
                                    src="https://placekitten.com/202/300">
                            </div>

                        </a>
                    </li>
                    @for ($i = 0; $i < 3; $i++)
                        <li class="transform transition hover:translate-y-1 ">
                            <a href="#">
                                <img class="h-52 w-32 rounded-lg object-cover object-center shadow-md hover:opacity-70"
                                    src="https://placekitten.com/200/30<?php echo $i; ?>"
                                    alt="Cat">
                                <div class="absolute top-4 m-5">
                                    <img class="rounded-full w-11 h-11 border-4 border-blue-700"
                                        src="https://placekitten.com/20<?php echo $i; ?>/300">
                                </div>
                            </a>
                        </li>
                    @endfor
                    <li class="transform transition hover:translate-y-1">
                        <a href="#">
                            <img class="h-52 w-32 object-cover object-center rounded-lg shadow-md hover:opacity-70"
                                src="https://placekitten.com/200/304" alt="Cat">
                            <div class="absolute top-4 m-5">
                                <img class="rounded-full w-11 h-11 border-4 border-blue-700"
                                    src="https://placekitten.com/209/300">
                            </div>
                            <div class="absolute top-5 m-20">
                                <div
                                    class="bg-white border-2 h-14 w-14 rounded-full flex justify-center items-center hover:bg-gray-100">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>

                <div class="px-10">
                    <div class="flex flex-col my-6 p-2 bg-white rounded-lg shadow-md">
                        <div class="border-b-2 border-gray-200">
                            <ul class="flex flex-row flex-none">
                                <li class="flex space-x-2 py-2 space-x-2 pb-3">
                                    <a href="#" class="flex flex-none">
                                        <img class="rounded-full w-10 h-10 border-2 object-center object-cover \"
                                            src="https://placekitten.com/300/300"></a>

                                    <button
                                        class="rounded-full h-10 text-gray-500 bg-gray-200 hover:bg-gray-300 px-4">What's
                                        on your mind ?</button>
                                </li>
                            </ul>
                        </div>
                        <ul class="flex flex-row flex-none justify-between items-center space-y-2 px-5">
                            <li class="flex items-center "><svg class="w-7 h-7 text-red-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                                </svg><strong class="text-gray-500 ">Live/Video</strong></li>
                            <li class="flex items-center">
                                <svg class="w-7 h-7 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg><strong class="text-gray-500 ">Photo/Video</strong>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-7 h-7 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg><strong class="text-gray-500 ">Feeling/Activity</strong>
                            </li>
                        </ul>
                    </div>

                    <div
                        class="flex flex-row my-6 p-2 bg-white rounded-lg shadow-md  items-center justify-start space-x-2 overflow-x-auto">

                        <button
                            class=" rounded-full outline-none bg-white px-4 py-1 border-2 hover:bg-gray-200 border-gray-300 flex flex-none items-center space-x-2"><svg
                                class="w-5 h-5 text-purple-600 flex flex-none" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                            </svg>
                            <strong class="text-blue-500 text-lg font-semibold">Create
                                Room</strong></button>
                        <div class="flex flex-row flex-none">
                            @for ($i = 0; $i < 5; $i++)
                                <ul>
                                    <li class="hover:opacity-80 transform transition rounded-lg">
                                        <a href="#" class="flex items-center space-x-2 py-1">
                                            <img class="rounded-full w-11 h-11 border-2 object-center object-cover"
                                                src="https://placekitten.com/202/50<?php echo $i; ?>">
                                        </a>
                                    </li>
                                </ul>
                            @endfor
                        </div>
                    </div>

                    @for ($i = 0; $i < 10; $i++)
                        <div class="my-6 p-4 bg-white rounded-lg shadow-md  space-x-2">
                            <div class="flex flex-row justify-between items-center">
                                <div class="flex flex-row items-center space-x-2">
                                    <a href="#" class="flex items-center space-x-2 py-1">
                                        <img class="rounded-full w-11 h-11 border-2 object-center object-cover"
                                            src="https://placekitten.com/202/50<?php echo $i; ?>">
                                    </a>
                                    <div class="flex flex-col items-center">
                                        <ul class="text-gray-600 text-sm">
                                            <li><a href="" class="font-bold">User name</a></li>
                                            <li class="flex flex-row items-center">3d · <svg class="h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                                        clip-rule="evenodd" />
                                                </svg></li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <a href="#"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg></a>
                                </div>
                            </div>
                            <div class="divide-y divide-gray-300">

                                <div class="whitespace-normal py-1">Lorem ipsum dolor, sit amet consectetur adipisicing
                                    elit.
                                    Illum eveniet quia porro
                                    asperiores quibusdam nobis architecto ratione reprehenderit qui velit nihil quis
                                    libero
                                    in sed deleniti, corporis perferendis, iste voluptas?</div>
                                <div class="py-2 text-gray-500">
                                    <ul class="flex flex-none items-center justify-between ">
                                        <li><a href="">likes</a></li>
                                        <li><a href="">Comments</a>/<a href="">Shares</a></li>
                                    </ul>
                                </div>
                                <div class="py-2 text-gray-500">
                                    <ul class="flex flex-row flex-none justify-between items-center">
                                        <li><a href="" class="flex items-center"><svg class="w-5 h-5"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                </svg>Like</a></li>
                                        <li><a href="" class="flex items-center"><svg class="w-5 h-5"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                                </svg> Comment</a></li>
                                        <li><a href="" class="flex items-center"> <svg class="w-5 h-5"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                                </svg> Share</a></li>
                                    </ul>
                                </div>
                                <div class=" text-gray-500">
                                    <ul class="flex flex-row flex-none">
                                        <li class="flex space-x-2 pt-2">
                                            <a href="#" class="flex flex-none">
                                                <img class="rounded-full w-10 h-10 border-2 object-center object-cover \"
                                                    src="https://placekitten.com/860/300"></a>

                                            <input
                                                class="rounded-full h-10 text-gray-500 bg-gray-200 hover:bg-gray-300 outline-none placeholder-gray-500 px-4"
                                                placeholder="What's on your mind ?">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="w-1/4 pl-12 pr-2 py-7">
                <div class="flex justify-between">
                    <div class="pb-2">
                        <strong class="text-gray-500 font-semibold">Contacts</strong>
                    </div>
                    <div class="flex flex-row space-x-6">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                        </svg>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                        </svg>
                    </div>
                </div>
                <div class="overflow-y-auto ">
                    @for ($i = 0; $i < 25; $i++)
                        <ul>
                            <li class="hover:bg-gray-200 rounded-lg">
                                <a href="#" class="flex items-center space-x-2 py-1">
                                    <img class="rounded-full w-8 h-8 border-2 object-center object-cover"
                                        src="https://placekitten.com/202/30<?php echo $i; ?>">
                                    <strong class="font-semibold flex flex-auto">A very beautiful name</strong>
                                </a>
                            </li>
                        </ul>
                    @endfor
                </div>
            </div>
        </div>
    </main>
    </div>
</body>

</html>
