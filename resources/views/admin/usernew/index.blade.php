@extends('admin.layouts.app')
@section('breadcrumb')
    <div class="flex justify-between items-center">
        <x-breadcrumb pageone="User" />
        <x-button.button-plus route="{{ route('user.create') }}" title="Create User" />
    </div>
@endsection
@section('content')
    <div class="bg-white dark:bg-transparent">

        <form action="{{ route('user.search') }}" method="GET" class="hidden lg:block p-2">
            <label for="topbar-search" class="sr-only">Search</label>
            <div class="relative mt-1 lg:w-96">
                <!-- Icon -->
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd">
                        </path>
                    </svg>
                </div>

                <div class="flex space-x-2">
                    <!-- Search Input -->
                    <input type="text" name="keyword" id="topbar-search"   value="@if (isset($_GET['keyword'])) {{ trim($_GET['keyword']) }} @endif"
                        class="bg-gray-50 my-2 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search">

                        <x-form.submit-button title="Search"  class="my-2"/>
                </div>
            </div>
        </form>


        <div class="flex flex-col pt-2 px-2">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs text-gray-500 uppercase dark:text-gray-400">
                                        S.N</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs text-gray-500 uppercase dark:text-gray-400">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs text-gray-500 uppercase dark:text-gray-400">
                                        Email</th>

                                    {{-- <th scope="col"
                                        class="px-6 py-3 text-start text-xs text-gray-500 uppercase dark:text-gray-400">
                                        Role</th> --}}

                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs text-gray-500 uppercase dark:text-gray-400">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">

                                @forelse ($users as $user)
                                    <tr>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $users->firstItem() + $loop->index }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $user->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $user->email }}
                                        </td>

                                        {{-- <td
                                        class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                        @foreach ($user->roles as $role)
                                        <x-badge title="{{$role->name}}" />
                                    @endforeach
                                    </td> --}}

                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm">

                                            <x-table.crudactionbutton route="user" :id="$user->id" />
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-gray-800 dark:text-gray-200 text-center py-4">No
                                            user found</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="py-4">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
