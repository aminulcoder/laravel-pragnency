@extends('admin.layouts.app')

@section('breadcrumb')
    <div class="flex justify-between items-center">
        <x-breadcrumb pageone="Doctor" />
        <x-button.button-plus route="{{ route('doctor.create') }}" title="Create Doctor" />
    </div>
@endsection

@section('content')
    @if (Session::has('create'))
        <x-toast.success />
    @endif
    @if (Session::has('warning'))
        <x-toast.warning />
    @endif

    <div class="bg-white dark:bg-transparent">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        S.N</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Photo</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Username</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Designation</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($doctors as $doc)
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $doctors->firstItem() + $loop->index }}</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            <img src="{{ asset('storage/' . $doc->photo) }}" class="h-6 w-auto"
                                                alt="{{ $doc->username }}'s photo">
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $doc->username }}
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $doc->designation }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex items-center space-x-1">
                                                <div>
                                                    <a href="{{ route('doctorprofile', $doc->id) }}"
                                                        class="px-4 py-2 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">
                                                        Profile
                                                    </a>
                                                </div>
                                                {{-- <div>
                                                    <form action="{{ route('doctor.destroy', $doc->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="px-4 py-2 bg-red-500 text-white text-sm rounded hover:bg-red-600">
                                                            Cancel
                                                        </button>
                                                    </form>
                                                </div> --}}
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-sm text-gray-500">
                                            No doctor found
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="py-4">
                        {{ $doctors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
