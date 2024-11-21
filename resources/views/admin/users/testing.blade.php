@extends('dashboard.adminDashboard')

@section('content')
    <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
        <div class="mb-4 col-span-full xl:mb-2">
            <nav class="flex mb-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                            <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <a href="#"
                                class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Users</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Settings</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">User settings</h1>
        </div>
        <!-- Right Content -->
        <div class="col-span-full xl:col-auto">
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                    <img class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0" src="/images/users/bonnie-green-2x.png"
                        alt="Jese picture">
                    <div>
                        <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Profile picture</h3>
                        <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                            JPG, GIF or PNG. Max size of 800K
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <h3 class="mb-4 text-xl font-semibold dark:text-white">Language & Time</h3>
                <div class="mb-4">
                    <label for="settings-language"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select language</label>
                    <select id="settings-language" name="countries"
                        class="bg-gray-50 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option>English (US)</option>
                        <option>Italiano</option>
                        <option>Français (France)</option>
                        <option>正體字</option>
                        <option>Español (España)</option>
                        <option>Deutsch</option>
                        <option>Português (Brasil)</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="settings-timezone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time
                        Zone</label>
                    <select id="settings-timezone" name="countries"
                        class="bg-gray-50 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option>GMT+0 Greenwich Mean Time (GMT)</option>
                        <option>GMT+1 Central European Time (CET)</option>
                        <option>GMT+2 Eastern European Time (EET)</option>
                        <option>GMT+3 Moscow Time (MSK)</option>
                        <option>GMT+5 Pakistan Standard Time (PKT)</option>
                        <option>GMT+8 China Standard Time (CST)</option>
                        <option>GMT+10 Eastern Australia Standard Time (AEST)</option>
                    </select>
                </div>
            </div>


        </div>
        <div class="col-span-2">
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <h3 class="mb-4 text-xl font-semibold dark:text-white">General information</h3>
                <form action="#">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <x-show-user-field for="dicoding" label="testing">
                                Testingg
                            </x-show-user-field>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                Name</label>
                            <input type="text" name="last-name" id="last-name"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Green" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="country"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                            <input type="text" name="country" id="country"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="United States" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="city"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                            <input type="text" name="city" id="city"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="e.g. San Francisco" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                            <input type="text" name="address" id="address"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="e.g. California" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="example@company.com" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="phone-number"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                            <input type="number" name="phone-number" id="phone-number"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="e.g. +(12)3456 789" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="birthday"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthday</label>
                            <input type="number" name="birthday" id="birthday"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="15/08/1990" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="organization"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Organization</label>
                            <input type="text" name="organization" id="organization"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Company Name" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="role"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                            <input type="text" name="role" id="role"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="React Developer" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="department"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                            <input type="text" name="department" id="department"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Development" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="zip-code"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Zip/postal
                                code</label>
                            <input type="number" name="zip-code" id="zip-code"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="123456" required>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
