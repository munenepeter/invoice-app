<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Invoices') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}"> 
 
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            } 
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-nile-600  dark:bg-gray-900 sm:items-center py-4 sm:pt-0" > 
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 ">
                <div class="flex justify-center items-center pt-8 sm:justify-start sm:pt-0 ml-28">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-300 sm:h-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
               <span class="text-4xl text-gray-200">Invoices</span>
                </div> 
             @if (Route::has('login'))
                <section class="text-gray-300 body-font">
                 @auth
                        <a href="{{ url('/dashboard') }}" class="text-indigo-500 text-lg text-center font-medium underline">Dashboard</a>
                    @else 
                    <div class="container px-5 py-6 mx-auto flex flex-wrap"> 
                      <div class="flex flex-wrap -m-4">
                    
                        <div class="p-4 lg:w-1/2 md:w-full">
                            <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                            <div class="flex"> 
                            <div class="w-10 h-10 sm:mr-4 sm:mb-0  inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0"> 
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>  
                             </div> 
                                <a href="{{ route('login') }}" class="text-indigo-500 text-lg  font-medium underline">Log in</a> 
                             </div>
                            </div>
                        </div>
                       <div class="p-4 lg:w-1/2 md:w-full">
                            <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                            <div class="flex"> 
                            <div class="w-10 h-10 sm:mr-4 sm:mb-0  inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0"> 
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z" />
                        </svg>
                             </div> 
                              @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-indigo-500 text-lg  font-medium underline">Register</a>
                        @endif
                    @endauth 
                             </div>
                            </div>
                        </div> 
                    </div>
                    </section>
          @endif

                 
            </div>
        </div>
    </body>
</html>
