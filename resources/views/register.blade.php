@extends('layouts.main')
<main class="bg-white mt-24 max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl">Welcome to Second Watch</h3>
        <p class="text-gray-600 pt-2">Create your account.</p>
    </section>

    <section class="mt-10">
        <form class="flex flex-col" method="POST" action="#">
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                <input type="text" id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-orange-600 transition duration-500 px-3 pb-3">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                <input type="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-orange-600 transition duration-500 px-3 pb-3">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-orange-600 transition duration-500 px-3 pb-3">
            </div>
            {{-- <div class="flex justify-end">
                <a href="/#" class="text-sm text-orange-600 hover:text-orange-700 hover:underline mb-6">Forgot your password?</a>
            </div> --}}
            <button class="bg-orange-600 hover:bg-orange-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Register</button>
             <div class="flex justify-center">or</div>
    <div class="mb-6 pt-3 rounded bg-gray-200">
    <a href="/#" class="block bg-gray-200 rounded w-full text-center text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-orange-600 transition duration-500 px-3 pb-3">
        <img
          src="img/googleicon.png"
          alt="google"
          class="inline mr-[6px]"
          width="18px"
        />Sign-in with Google</a>
    </div>
        </form>
    </section>
</main>

<div class="max-w-lg mx-auto text-center mt-12 mb-6">
    <p class="text-black">Already have an account?<a href="/login" class="font-bold hover:underline">Log in here</a>.</p>
</div>
{{-- <div class="w-full md:w-1/2 flex flex-col">

    <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-12">
        <a href="#" class="bg-black text-white font-bold text-xl p-4" alt="Logo">Logo</a>
    </div>

    <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
        <p class="text-center text-3xl">Join Us.</p>
        <form class="flex flex-col pt-3 md:pt-8" onsubmit="event.preventDefault();">
            <div class="flex flex-col pt-4">
                <label for="name" class="text-lg">Name</label>
                <input type="text" id="name" placeholder="John Smith" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
            </div>

            <div class="flex flex-col pt-4">
                <label for="email" class="text-lg">Email</label>
                <input type="email" id="email" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
            </div>

            <div class="flex flex-col pt-4">
                <label for="password" class="text-lg">Password</label>
                <input type="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
            </div>

            <div class="flex flex-col pt-4">
                <label for="confirm-password" class="text-lg">Confirm Password</label>
                <input type="password" id="confirm-password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
            </div>

            <input type="submit" value="Register" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8" />
        </form>
        <div class="text-center pt-12 pb-12">
            <p>Already have an account? <a href="login.html" class="underline font-semibold">Log in here.</a></p>
        </div>
    </div>

</div> --}}