<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h3 class="text-lg font-semibold">Users information</h3>
                <br>
                <form action="{{ route('user.create') }}" method="get">
                    <button type="submit" class="btn btn-primary">Create User</button>
                </form>
                <br>
                <br>
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="border px-4 py-2">{{ $user->name }}</td>
                                <td class="border px-4 py-2">{{ $user->email }}</td>
                                <td class="border px-4 py-2">{{ $user->email_verified_at ? 'Verified' : 'Not Verified' }}</td>
                                <td class="border px-4 py-2">
                                    <!-- Edit Button -->
                                    <a href="{{ route('user.edit', $user->id) }}" class="text-blue-500 mr-2">Edit</a>
                                    <!-- Delete Form -->
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure? the selected user will be permanently deleted, and this action cannot be undone!')" type="submit" class="text-red-500">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
            </div>
        </div>
    </div>
</div>
