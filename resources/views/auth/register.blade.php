<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce -Register</title>

    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <style>@import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css')</style>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')


</head>
<body>
<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg">
        <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">Sign Up </h1>

        <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sunt dolores deleniti
            inventore quaerat mollitia?
        </p>

        <form action="{{route('register')}}" method="POST" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
            {{--            <p class="text-center text-lg font-medium">Sign in to your account</p>--}}
            @csrf
            <div>
                <div class="flex flex-col justify-center">
                    <label for="email" class="text-black-500 ">Full Name</label>
                    @error('name')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>

                <div class="relative">
                    <input
                        type="fullName"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        placeholder="Enter full name"
                        name="name"
                    />


                </div>
            </div>
            <div>
                <div class="flex flex-col justify-center">
                    <label for="email" class="text-black-500 ">Email</label>
                    @error('email')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="relative">
                    <input
                        type="email"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        placeholder="Enter email"
                        name="email"
                    />


                </div>
            </div>

            <div>
                <div class="flex flex-col justify-center">
                    <label for="email" class="text-black-500 ">Password</label>
                    @error('password')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="relative">
                    <input
                        type="password"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        placeholder="Enter password"
                        name="password"
                    />


                </div>
            </div>
            <div>
                <div class="flex flex-col justify-center">
                    <label for="email" class="text-black-500 ">Password</label>

                </div>
                <div class="relative">
                    <input
                        type="password"
                        name="password_confirmation"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        placeholder="Confirm password"
                    />


                </div>
            </div>

            <button
                type="submit"
                class="block w-full rounded-lg bg-blue-800 px-5 py-3 text-sm font-medium text-white"
            >
                Sign in
            </button>

            <p class="text-center text-sm text-gray-500">
                No account?
                <a class="underline" href="{{route('register')}}">Sign up</a>
            </p>
        </form>
    </div>
</div>
</body>
