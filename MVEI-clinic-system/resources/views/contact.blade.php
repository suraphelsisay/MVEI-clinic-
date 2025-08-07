@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold text-gray-800 mb-6">Contact Us</h1>
<div class="bg-white p-6 rounded-lg shadow-md">
    <p class="text-gray-700 mb-4">We'd love to hear from you! Please feel free to reach out to us with any questions, feedback, or to schedule an appointment.</p>
    <div class="mb-4">
        <h2 class="text-xl font-semibold text-gray-800">Our Location:</h2>
        <p class="text-gray-700">123 Clinic Street, Health City, Country</p>
    </div>
    <div class="mb-4">
        <h2 class="text-xl font-semibold text-gray-800">Phone:</h2>
        <p class="text-gray-700">+1 (123) 456-7890</p>
    </div>
    <div class="mb-4">
        <h2 class="text-xl font-semibold text-gray-800">Email:</h2>
        <p class="text-gray-700"><a href="mailto:info@mveiclinic.com" class="text-blue-600 hover:underline">info@mveiclinic.com</a></p>
    </div>
    <div class="mb-4">
        <h2 class="text-xl font-semibold text-gray-800">Business Hours:</h2>
        <p class="text-gray-700">Monday - Friday: 9:00 AM - 5:00 PM</p>
        <p class="text-gray-700">Saturday: 10:00 AM - 2:00 PM</p>
        <p class="text-gray-700">Sunday: Closed</p>
    </div>
    <p class="text-gray-700">You can also fill out the form below, and we will get back to you as soon as possible.</p>
    <!-- Contact Form Placeholder -->
    <form class="mt-6">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-6">
            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
            <textarea id="message" name="message" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Send Message</button>
    </form>
</div>
@endsection