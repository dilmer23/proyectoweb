<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto Web</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
            <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
        </style>


        <style>
            #title {
                z-index:2;
                }

                #title h1 {
                transform: translateZ(.25px) scale(.75);
                transform-origin: 50% 100%;

                }

            .container {
            position: absolute;
            width: 600px;
            height: 500px;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            }
            /* background */
            .window {
            position: absolute;
            height: 350px;
            width: 500px;
            border: 20px solid whitesmoke;
            border-radius: 3px;
            z-index: -10;
            box-shadow: 5px 5px 5px grey;
            background: rgb(167, 225, 247);
            overflow: hidden;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            }

            .sun {
            position: absolute;
            height: 80px;
            width: 80px;
            border-radius: 50%;
            background-image: radial-gradient(gold, #f8e88d);
            box-shadow: 0px 20px 80px #fcdf05;
            z-index: 30;
            top: 18px;
            left: 25px;
            }

            .cloud {
            position: absolute;
            margin-top: 70px;
            width: 150px;
            height: 50px;
            background-color: white;
            border-radius: 100px;
            left: -180px;
            animation: cloud 60s linear;
            }
            .cloud::after,
            .cloud::before {
            content: "";
            position: relative;
            display: inline-block;
            background: inherit;
            border-radius: inherit;
            }
            .cloud::after {
            width: 80px;
            height: 80px;
            top: -140px;
            left: 20px;
            }
            .cloud::before {
            width: 100px;
            height: 100px;
            top: -40px;
            left: 40px;
            }
            .grass {
            position: absolute;
            height: 100px;
            width: 650px;
            background-color: #80a071;
            bottom: 0px;
            }
            .catscontainer {
            display: flex;
            position: absolute;
            right: 40px;
            bottom: 190px;
            grid-gap: 20px;
            }
            .table {
            position: absolute;
            height: 30px;
            width: 620px;
            right: -58px;
            bottom: -160px;
            border-radius: 40px;
            background-image: linear-gradient(180deg, #956842 10%, #61421c);
            box-shadow: 0px 10px 60px rgb(52, 47, 47);
            }

            /* bubble */
            .bubble {
            position: absolute;
            background: #fcd999;
            color: #050505;
            font-family: Parisienne;
            font-size: 30px;
            line-height: 60px;
            box-shadow: 3px 2px 8px 0px #363636b5;
            text-align: center;
            width: 130px;
            height: 59px;
            border-radius: 10px;
            padding: 0px;
            top: -120px;
            }
            .bubble:after {
            content: "";
            position: absolute;
            display: block;
            width: 0;
            z-index: 1;
            border-style: solid;
            border-width: 33px 43px 0 0;
            border-color: #fcd999 transparent transparent transparent;
            bottom: -33px;
            left: 24%;
            margin-left: -21.5px;
            }

            /* All cats */
            .face {
            height: 80px;
            width: 110px;
            position: relative;
            border-radius: 60px;
            }
            .ears {
            width: 0;
            height: 0;
            position: relative;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            z-index: -1;
            }

            .inner1 {
            width: 0;
            height: 0;
            border-bottom: 50px solid #424242;
            border-left: 20px solid transparent;
            right: 20px;
            position: relative;
            }

            .inner2 {
            width: 0;
            height: 0;
            border-bottom: 50px solid #424242;
            border-right: 20px solid transparent;

            position: relative;
            }

            .eyes {
            position: absolute;
            width: 25px;
            height: 20px;
            border-radius: 50%;
            border: 1px solid black;
            background-color: white;
            }

            .eye1 {
            left: 18px;
            top: 20px;
            }
            .eye2 {
            left: 60px;
            top: 20px;
            }

            .eyeballs {
            position: absolute;
            height: 15px;
            width: 5px;
            border-radius: 50%;
            background-color: black;
            left: 9px;
            top: 4px;
            animation: rolleyes 10s linear 6s;
            }

            .nose {
            position: absolute;
            width: 0;
            height: 0;
            border-top: 13px solid #1f1a1e;
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            z-index: 5;
            top: 45px;
            left: 46px;
            }
            .whiskers {
            width: 60px;
            height: 1px;
            background: black;
            position: absolute;
            }
            .whisker1 {
            transform: rotate(-20deg);
            top: -14px;
            }
            .whisker2 {
            transform: rotate(-10deg);
            top: -10px;
            }
            .whisker3 {
            transform: rotate(0deg);
            top: -4px;
            }

            .whisker4 {
            transform: rotate(20deg);
            top: -14px;
            left: -60px;
            }
            .whisker5 {
            transform: rotate(10deg);
            top: -10px;
            left: -60px;
            }
            .whisker6 {
            transform: rotate(0deg);
            top: -4px;
            left: -60px;
            }
            .mouth {
            position: absolute;
            left: -5px;
            top: 1px;
            height: 10px;
            width: 10px;
            border-radius: 50%;
            background-color: black;
            opacity: 0;
            }
            .catbody {
            position: relative;
            bottom: 28px;
            left: 10px;
            width: 86px;
            height: 140px;
            /* -webkit-border-radius: 63px 63px 63px 63px/ 108px 108px 72px 72px; */
            border-radius: 50% 50% 50% 50%/60% 60% 40% 40%;
            z-index: -1;
            box-shadow: 6px 3px 20px rgb(97, 94, 94);
            }

            .tail {
            height: 80px;
            width: 130px;
            position: absolute;
            border-radius: 50%;
            z-index: -5;
            bottom: -100px;
            left: -50px;
            transform: rotate(60deg);
            }

            /* All of cat1 */
            .cat1face {
            background-image: radial-gradient(#fef389, #cfc038);
            }
            .cat1body {
            background-image: radial-gradient(#fef389, #cfc038);
            }

            .cat1ear1 {
            bottom: 30px;
            transform: rotate(-30deg);
            border-bottom: 50px solid #fef389;
            }

            .cat1ear2 {
            bottom: 80px;
            left: 100px;
            transform: rotate(38deg);
            border-bottom: 50px solid #fef389;
            }
            .cat1tail {
            box-shadow: inset 8px -12px 0 0 #fef389;
            }

            /* All of cat2 */
            .cat2face {
            background-image: radial-gradient(#eebad5, #c06e98);
            }
            .cat2body {
            background-image: radial-gradient(#eebad5, #c06e98);
            }
            .cat2ear1 {
            bottom: 30px;
            transform: rotate(-30deg);
            border-bottom: 50px solid #eebad5;
            }

            .cat2ear2 {
            bottom: 80px;
            left: 100px;
            transform: rotate(38deg);
            border-bottom: 50px solid #eebad5;
            }
            .cat2tail {
            box-shadow: inset 8px -12px 0 0 #eebad5;
            }

            /* All of cat3 */
            .cat3face {
            background-image: radial-gradient(#a7e0c6, #6cc49c);
            }

            .cat3body {
            background-image: radial-gradient(#a7e0c6, #6cc49c);
            }
            .cat3ear1 {
            bottom: 30px;
            transform: rotate(-30deg);
            border-bottom: 50px solid #a7e0c6;
            }

            .cat3ear2 {
            bottom: 80px;
            left: 100px;
            transform: rotate(38deg);
            border-bottom: 50px solid #a7e0c6;
            }

            .cat3tail {
            box-shadow: inset 8px -12px 0 0 #a7e0c6;
            }
            /* All of cat4 */
            .cat4face {
            background-image: radial-gradient(#6ab5f3, #5a8fbb);
            }

            .cat4eyeball {
            position: absolute;
            height: 15px;
            width: 5px;
            border-radius: 50%;
            background-color: black;
            left: 10px;
            top: 4px;
            animation: cat4rolleyes 10s linear;
            }
            .cat4body {
            background-image: radial-gradient(#6ab5f3, #5a8fbb);
            }
            .cat4ear1 {
            bottom: 30px;
            transform: rotate(-30deg);
            border-bottom: 50px solid #6ab5f3;
            }

            .cat4ear2 {
            bottom: 80px;
            left: 100px;
            transform: rotate(38deg);
            border-bottom: 50px solid #6ab5f3;
            }
            .cat4tail {
            box-shadow: inset 8px -12px 0 0 #6ab5f3;
            }

            /* animations bubble*/
            .cat1bubble {
            opacity: 0;
            animation: cat1meow 3s linear;
            }
            .cat2bubble {
            opacity: 0;
            animation: cat2meow 3s linear;
            }
            .cat3bubble {
            opacity: 0;
            animation: cat3meow 3s linear;
            }
            .cat4bubble {
            opacity: 0;
            animation: cat4meow 3s linear 10s;
            }
            @keyframes cat1meow {
            2% {
                opacity: 1;
            }
            33% {
                opacity: 0;
            }
            66% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
            }

            @keyframes cat2meow {
            0% {
                opacity: 0;
            }
            35% {
                opacity: 1;
            }
            66% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
            }

            @keyframes cat3meow {
            0% {
                opacity: 0;
            }
            33% {
                opacity: 0;
            }
            68% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
            }

            @keyframes cat4meow {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
            }

            /* animations eyes */
            @keyframes rolleyes {
            0% {
                left: 18px;
                top: 4px;
            }

            100% {
                left: 18px;
                top: 4px;
            }
            }

            @keyframes cat4rolleyes {
            0% {
                left: 6px;
                top: 4px;
            }

            100% {
            }
            }

            /* animation meow */
            .cat1mouth {
            animation: cat1mouth 2s linear;
            }
            .cat2mouth {
            animation: cat2mouth 2s linear;
            }
            .cat3mouth {
            animation: cat3mouth 2s linear;
            }
            .cat4mouth {
            animation: cat4mouth 2s linear 9s;
            }

            @keyframes cat1mouth {
            0% {
                opacity: 1;
            }
            33% {
                opacity: 0;
            }
            66% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
            }
            @keyframes cat2mouth {
            0% {
                opacity: 0;
            }
            33% {
                opacity: 1;
            }
            66% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
            }
            @keyframes cat3mouth {
            0% {
                opacity: 0;
            }
            33% {
                opacity: 0;
            }
            66% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
            }
            @keyframes cat4mouth {
            0% {
                opacity: 0;
            }
            33% {
                opacity: 0;
            }
            66% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
            }

            /* animation cloud */
            @keyframes cloud {
            0% {
                left: -130px;
            }

            100% {
                left: 600px;
            }
            }
             
        </style>
    </head>
    <body class="">
        <div id="title" class="text-primary">
            <h1>Proyecto WEB</h1>
          </div>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class=" button nav-link active text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class=" button nav-link active text-sm text-gray-700 underline">iniciar sesion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class=" active ml-4 text-sm text-gray-700 underline">Registrarse</a>
                        @endif
                    @endauth
                </div>
                <body>
                    <div class="container">
                      <div class="box"></div>
                       <h1>Proyecto WEB</h1>
                    </div>
                  </body>
            @endif
        </head>
    </body>
</html>
