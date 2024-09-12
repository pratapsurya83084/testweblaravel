<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <div class="m-20">
        <!-- Heading -->
        <h2 class="text-2xl font-semibold mb-4">Category Management</h2>

        <!-- Category List Header -->
        <div class="flex justify-between bg-slate-100 p-3 rounded-xl shadow-md">
            <h3 class="text-lg font-medium">Category List</h3>
            <button
                onclick="window.location.href= url('/create')"
                class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Add Category</button>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto mt-6">
        <form action="{{route('category.store')}}" method="post" class="space-y-4">
       @csrf
        <!-- Name -->
        <div>
            <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
            <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-indigo-300">
        @error('name') <span class="text-red-500">{{$message}}</span> @enderror
        </div>

        <!-- Description -->
        <div>
            <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
            <textarea id="description" name="description" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-indigo-300"></textarea>
            @error('description') <span class="text-red-500">{{$message}}</span> @enderror
        </div>

        <!-- Status -->
        <div class="flex items-center">
            <input type="checkbox" id="status" name="status" class="w-5 h-5 text-indigo-600 focus:ring focus:border-indigo-300" checked>
            <label for="status" class="ml-2 text-gray-700 font-medium">Visible (Checked: Visible, Unchecked: Hidden)</label>
            @error('status') <span class="text-red-500">{{$message}}</span> @enderror
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring focus:border-indigo-300">Save</button>
        </div>
    </form>
        </div>
    </div>

</body>

</html>