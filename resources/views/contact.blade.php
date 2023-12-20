@extends('layouts.main')


<div class="grid grid-cols-2 mx-auto max-w-4xl">
    <div class="md:col-start-1 ml-4 mt-24">
        <a href="#" class="mb-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.344 12.168-1.4-1.4a1.98 1.98 0 0 0-2.8 0l-.7.7a1.98 1.98 0 0 1-2.8 0l-2.1-2.1a1.98 1.98 0 0 1 0-2.8l.7-.7a1.981 1.981 0 0 0 0-2.8l-1.4-1.4a1.828 1.828 0 0 0-2.8 0C-.638 5.323 1.1 9.542 4.78 13.22c3.68 3.678 7.9 5.418 11.564 1.752a1.828 1.828 0 0 0 0-2.804Z"/>
              </svg>Call To Us</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">We are available 24/7, 7 days a week.</p>
            <p class="font-normal text-gray-700 dark:text-gray-400">phone : +6285123456789</p>
        </a>
        <a href="#" class=" block max-w-sm p-6  bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 2-8.4 7.05a1 1 0 0 1-1.2 0L1 2m18 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1m18 0v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2"/>
              </svg>Write To Us</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Fill out our form and we will contact you within 24 hours.</p>
            <p class="font-normal text-gray-700 dark:text-gray-400">Emails : customer@secondwatch.com</p>

        </a>
    </div>

    
    {{-- form message --}}
    <div class="mt-24 md:col-start-2 w-full max-w-xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h2 class="heading mb-2 dark:text-white">Contact <span>Me!</span></h2>
        <form action="#">
        <div class="input-box ">
            <input type="text" placeholder="Your Name" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
            <input type="email" placeholder="Your Email" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
            <input type="number" placeholder="Your Phone" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">

        </div>
        <textarea name="" id="" cols="30" rows="1" placeholder="Your Message" class="mb-2 bg-gray-50 border resize-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"></textarea>
        <button class="bg-orange-600 hover:bg-orange-700 text-white  p-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Send Message</button>
    </form>
    </div>
</div>