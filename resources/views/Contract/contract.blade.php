<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head title="Contact Us"/>
<body>
    <div class="w-full mx-auto bg-gray-100 min-h-screen">
        <!-- @include('components.navbar', ['page'=> 'Contract']) -->
        <x-navbar :page="'Contract'" />
        <x-title :sub="'wanna join?'" title="Contract Us"/>
        <div class="flex items-center justify-center my-20 ">
            <div class="shadow-lg rounded-lg overflow-hidden w-11/12 md:w-3/4 lg:w-2/3 flex flex-col gap-20 md:flex-row">
                <!-- Left Section: Contact Info -->
                <div class="bg-gray-300 text-black p-8 md:w-1/2 flex flex-col justify-between">
                    <div>
                        <h2 class="text-3xl font-bold mb-4">Get In Touch</h2>
                        <p class="text-lg">We would love to hear from you! Reach out to us through any of the options below.</p>
                    </div>
                    <img class="rounded-xl" src="{{ asset('build/assets/contact.jpg') }}" alt="">
                    <div class="mt-2">
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9.293 14.707a1 1 0 001.414 0l5-5a1 1 0 00-1.414-1.414L10 12.586 6.707 9.293a1 1 0 00-1.414 1.414l5 5z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-3">Jashore, Bangladesh</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.5l7.997-3.616A2 2 0 0016 4H4a2 2 0 00-1.997 1.884zM18 8.118l-8 3.637-8-3.637V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <span class="ml-3">shojib@gmail.com</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.3 2.38c-.882 2.197.244 4.79 2.622 7.169l2.3 2.3a5 5 0 007.071-7.071l-2.3-2.3C10.8 2.623 8.208 1.497 6.01 2.38zM10 7.999a2 2 0 110-4 2 2 0 010 4zm7.09 7.615l-2.3-2.3a5 5 0 01-7.071 7.071l-2.3-2.3c-2.377-2.378-4.96-3.504-7.071-2.622C1.497 8.208 2.623 10.8 4.88 12.3z" />
                            </svg>
                            <span class="ml-3">+880-1790407979</span>
                        </div>
                    </div>
                </div>

                <!-- Right Section: Contact Form -->
                <div class="bg-gray-300 p-8 md:w-1/2">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800">Contact Us</h2>
                    <form action="#" method="POST" class="space-y-4">
                        <!-- Name Input -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Your Full Name" />
                        </div>
                        <!-- Email Input -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                            <input type="email" id="email" name="email"
                                class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Your Email Address" />
                        </div>
                        <!-- Message Input -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-600">Message</label>
                            <textarea id="message" name="message" rows="4"
                                class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Write your message here..."></textarea>
                        </div>
                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <x-footer />
    </div>

</body>

</html>