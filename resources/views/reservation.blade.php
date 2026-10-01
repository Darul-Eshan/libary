@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto py-12 px-4" x-data="reservationForm()">
        <div class="bg-white p-8 rounded-lg shadow">

            <!-- Form Section -->
            <div x-show="!isSubmitted">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Book a Reservation</h2>

                <form @submit.prevent="validateForm" @reset="resetForm">

                    <!-- 1. Name (Text) -->
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-1">Full Name *</label>
                        <input type="text" x-model="formData.name" class="w-full border rounded px-3 py-2" :class="{'border-red-500': errors.name}">
                        <span x-show="errors.name" x-text="errors.name" class="text-red-500 text-sm mt-1"></span>
                    </div>

                    <!-- 2. Email (Email) -->
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-1">Email Address *</label>
                        <input type="email" x-model="formData.email" class="w-full border rounded px-3 py-2" :class="{'border-red-500': errors.email}">
                        <span x-show="errors.email" x-text="errors.email" class="text-red-500 text-sm mt-1"></span>
                    </div>

                    <!-- 3. Phone (Tel) -->
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-1">Phone Number (11 digits) *</label>
                        <input type="tel" x-model="formData.phone" class="w-full border rounded px-3 py-2" :class="{'border-red-500': errors.phone}">
                        <span x-show="errors.phone" x-text="errors.phone" class="text-red-500 text-sm mt-1"></span>
                    </div>

                    <!-- 4. Category (Select) -->
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-1">Book Category *</label>
                        <select x-model="formData.category" class="w-full border rounded px-3 py-2" :class="{'border-red-500': errors.category}">
                            <option value="">Select a category</option>
                            <option value="Fiction">Fiction</option>
                            <option value="Academic">Academic</option>
                            <option value="Journal">Journal</option>
                        </select>
                        <span x-show="errors.category" x-text="errors.category" class="text-red-500 text-sm mt-1"></span>
                    </div>

                    <!-- 5. User Type (Radio) -->
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-1">User Type *</label>
                        <div class="flex items-center space-x-4">
                            <label><input type="radio" value="Student" x-model="formData.user_type" class="mr-2">Student</label>
                            <label><input type="radio" value="Faculty" x-model="formData.user_type" class="mr-2">Faculty</label>
                        </div>
                        <span x-show="errors.user_type" x-text="errors.user_type" class="text-red-500 text-sm mt-1"></span>
                    </div>

                    <!-- 6. Start Date (Date) -->
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-1">Reservation Start Date *</label>
                        <input type="date" x-model="formData.start_date" class="w-full border rounded px-3 py-2" :class="{'border-red-500': errors.start_date}">
                        <span x-show="errors.start_date" x-text="errors.start_date" class="text-red-500 text-sm mt-1"></span>
                    </div>

                    <!-- 7. End Date (Date) -->
                    <div class="mb-6">
                        <label class="block text-gray-700 mb-1">Reservation End Date *</label>
                        <input type="date" x-model="formData.end_date" class="w-full border rounded px-3 py-2" :class="{'border-red-500': errors.end_date}">
                        <span x-show="errors.end_date" x-text="errors.end_date" class="text-red-500 text-sm mt-1"></span>
                    </div>

                    <!-- Buttons -->
                    <div class="flex space-x-4">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Submit</button>
                        <button type="reset" class="bg-gray-400 text-white px-6 py-2 rounded hover:bg-gray-500">Reset</button>
                    </div>
                </form>
            </div>

            <!-- Success Summary Section -->
            <div x-show="isSubmitted" x-cloak>
                <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
                    Reservation Request Successful! Here is your summary:
                </div>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li><strong>Name:</strong> <span x-text="formData.name"></span></li>
                    <li><strong>Email:</strong> <span x-text="formData.email"></span></li>
                    <li><strong>Phone:</strong> <span x-text="formData.phone"></span></li>
                    <li><strong>Category:</strong> <span x-text="formData.category"></span></li>
                    <li><strong>User Type:</strong> <span x-text="formData.user_type"></span></li>
                    <li><strong>Dates:</strong> <span x-text="formData.start_date"></span> to <span x-text="formData.end_date"></span></li>
                </ul>
                <button @click="resetForm()" class="mt-6 bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Make Another Reservation</button>
            </div>
        </div>
    </div>

    <script>
        function reservationForm() {
            return {
                isSubmitted: false,
                formData: {
                    name: '', email: '', phone: '', category: '', user_type: '', start_date: '', end_date: ''
                },
                errors: {},
                validateForm() {
                    this.errors = {};
                    let valid = true;

                    // Required check
                    if (!this.formData.name) { this.errors.name = "Name is required"; valid = false; }

                    // Email format rule
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!this.formData.email || !emailRegex.test(this.formData.email)) {
                        this.errors.email = "Valid email is required"; valid = false;
                    }

                    // Length/Pattern rule for Phone (11 digits)
                    const phoneRegex = /^[0-9]{11}$/;
                    if (!this.formData.phone || !phoneRegex.test(this.formData.phone)) {
                        this.errors.phone = "Phone must be exactly 11 digits"; valid = false;
                    }

                    if (!this.formData.category) { this.errors.category = "Category is required"; valid = false; }
                    if (!this.formData.user_type) { this.errors.user_type = "User type is required"; valid = false; }
                    if (!this.formData.start_date) { this.errors.start_date = "Start date is required"; valid = false; }

                    // Cross-field rule: End date after start date
                    if (!this.formData.end_date) {
                        this.errors.end_date = "End date is required"; valid = false;
                    } else if (this.formData.start_date && (new Date(this.formData.end_date) <= new Date(this.formData.start_date))) {
                        this.errors.end_date = "End date must be after start date"; valid = false;
                    }

                    if (valid) {
                        this.isSubmitted = true;
                    }
                },
                resetForm() {
                    this.isSubmitted = false;
                    this.errors = {};
                    this.formData = { name: '', email: '', phone: '', category: '', user_type: '', start_date: '', end_date: '' };
                }
            }
        }
    </script>
@endsection
