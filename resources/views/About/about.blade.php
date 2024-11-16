<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head title="About Us"/>

<body>
    <div class="w-full mx-auto bg-gray-100 min-h-screen">
        <!-- @include('components.navbar', ['page'=> 'About']) -->
        <x-navbar :page="'About'" />
        <x-title :sub="'wanna know?'" title="About Us" />
        <div class="min-h-screen bg-gray-100 py-10">
            <div class="container mx-auto px-4">
                <!-- Heading -->
                <div class="text-center mb-12">
                    <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                        Discover who we are, our mission, and why we are passionate about sharing our stories with you.
                    </p>
                </div>

                <!-- Mission, Vision, Values -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Mission -->
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <div class="mb-4 text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm0 1a9 9 0 100-18 9 9 0 000 18z" clip-rule="evenodd" />
                                <path d="M7 9a1 1 0 012 0v1a1 1 0 11-2 0V9zM11 9a1 1 0 012 0v1a1 1 0 11-2 0V9zM8.293 13.293a1 1 0 011.414 0L10 13.586l.293-.293a1 1 0 111.414 1.414l-2 2a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Our Mission</h3>
                        <p class="mt-4 text-gray-600">
                            To inspire and inform readers with valuable content that adds meaning to their lives.
                        </p>
                    </div>
                    <!-- Vision -->
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <div class="mb-4 text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm0 1a9 9 0 100-18 9 9 0 000 18z" clip-rule="evenodd" />
                                <path d="M9 7a3 3 0 116 0 3 3 0 01-6 0zm-2 6a1 1 0 000 2h8a1 1 0 000-2H7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Our Vision</h3>
                        <p class="mt-4 text-gray-600">
                            To become the go-to source for thought-provoking and impactful blog content worldwide.
                        </p>
                    </div>
                    <!-- Values -->
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <div class="mb-4 text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm0 1a9 9 0 100-18 9 9 0 000 18z" clip-rule="evenodd" />
                                <path d="M10 7a3 3 0 11-6 0 3 3 0 016 0zm0 4a3 3 0 116 0 3 3 0 01-6 0zm-4 5a3 3 0 106 0 3 3 0 00-6 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Our Values</h3>
                        <p class="mt-4 text-gray-600">
                            Authenticity, creativity, and a commitment to delivering quality content for our readers.
                        </p>
                    </div>
                </div>

                <!-- Team Section -->
                <div class="mt-16">
                    <h2 class="text-2xl font-bold text-gray-800 text-center">Meet Our Team</h2>
                    <p class="text-gray-600 text-center mt-4 max-w-2xl mx-auto">
                        We’re a group of passionate writers, creators, and thinkers dedicated to sharing meaningful stories with the world.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-20 mt-8">
                        <!-- Team Member -->
                        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                                alt="Shoes"
                                class="rounded-full" />
                            <h3 class="text-lg font-semibold text-gray-800">John Doe</h3>
                            <p class="text-sm text-gray-600">Founder & Editor-in-Chief</p>
                        </div>
                        <!-- Team Member -->
                        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                                alt="Shoes"
                                class="rounded-full" />
                            <h3 class="text-lg font-semibold text-gray-800">Jane Smith</h3>
                            <p class="text-sm text-gray-600">Creative Writer</p>
                        </div>
                        <!-- Team Member -->
                        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                                alt="Shoes"
                                class="rounded-full" />
                            <h3 class="text-lg font-semibold text-gray-800">Alex Brown</h3>
                            <p class="text-sm text-gray-600">Content Strategist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-footer />
    </div>

</body>

</html>