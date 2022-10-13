<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="container mx-auto">

    <div class="lg:flex">
        <div class="w-full">
            <div class="py-12 bg-indigo-100 lg:bg-white flex justify-center lg:justify-start lg:px-12">
                <div class="cursor-pointer flex items-center">
                    <div>
                        <svg class="w-10 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px"
                            viewBox="0 0 225 225" style="enable-background:new 0 0 225 225;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: none;
                                    stroke: currentColor;
                                    stroke-width: 20;
                                    stroke-linecap: round;
                                    stroke-miterlimit: 3;
                                }
                            </style>
                            <g transform="matrix( 1, 0, 0, 1, 0,0) ">
                                <g>
                                    <path id="Layer0_0_1_STROKES" class="st0"
                                        d="M173.8,151.5l13.6-13.6 M35.4,89.9l29.1-29 M89.4,34.9v1 M137.4,187.9l-0.6-0.4     M36.6,138.7l0.2-0.2 M56.1,169.1l27.7-27.6 M63.8,111.5l74.3-74.4 M87.1,188.1L187.6,87.6 M110.8,114.5l57.8-57.8" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="text-2xl text-indigo-800 tracking-wide ml-2 font-semibold">Intrapanel</div>
                </div>
            </div>
            <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
                <h2 class="text-center text-4xl text-indigo-900 font-display font-semibold lg:text-left xl:text-5xl
                xl:text-bold">Register</h2>
                <div class="mt-12">
                    <form action="/intrapanel/php/register.php" method="post">
                        <div>
                            <div class="text-sm font-bold text-gray-700 tracking-wide">Full name</div>
                            <input
                                class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                type="text" name="name" placeholder="Enter your full name">
                        </div>
                        <div>
                            <div class="text-sm font-bold text-gray-700 tracking-wide mt-5">Email Address</div>
                            <input
                                class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                type="email" name="email" placeholder="arun@gmail.com">
                        </div>
                        <div class="mt-8">
                            <div class="flex justify-between items-center">
                                <div class="text-sm font-bold text-gray-700 tracking-wide">
                                    Password
                                </div>
                            </div>
                            <input
                                class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                type="password" name="password" placeholder="Enter your password">
                        </div>
                        <div class="mt-10">
                            <button class="bg-indigo-500 text-gray-100 p-4 w-full rounded-full tracking-wide
                            font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600
                            shadow-lg">
                                Regsiter
                            </button>
                        </div>
                    </form>
                    <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                        Already have an account ? <a href="/intrapanel/views/login.html"
                            class="cursor-pointer text-indigo-600 hover:text-indigo-800">Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>