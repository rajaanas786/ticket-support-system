@extends('layouts.app')

@section('title', 'Submit a Ticket')

@section('content')
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Submit a Support Ticket</h2>

        <form action="/ticket" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                <input type="text" name="name" id="name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Your Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                <input type="text" name="subject" id="subject" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                <textarea name="message" id="message" rows="4" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 resize-none"></textarea>
            </div>

            <div>
                <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                <select name="type" id="type" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option disabled selected value="">Select a category</option>
                    <option>Technical Issues</option>
                    <option>Account & Billing</option>
                    <option>Product & Service</option>
                    <option>General Inquiry</option>
                    <option>Feedback & Suggestions</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition duration-200">
                    Submit Ticket
                </button>
            </div>
        </form>
    </div>
    @if(session('success'))
        <div class="max-w-xl mx-auto mb-6 px-4 py-2 bg-green-100 text-green-800 rounded shadow">
            {{ session('success') }}
        </div>
    @endif
@endsection