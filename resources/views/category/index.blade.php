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
        <table class="min-w-full text-left text-sm border border-gray-300">
            <thead class="bg-indigo-600 text-white">
                <tr>
                    <th class="px-6 py-3">ID</th>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Description</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4">1</td>
                    <td class="px-6 py-4">John Doe</td>
                    <td class="px-6 py-4">Lorem ipsum dolor sit amet.</td>
                    <td class="px-6 py-4">Active</td>
                    <td class="px-6 py-4">
                        <button class="text-white bg-green-500 px-4 py-1 rounded">Edit</button>
                        <button class="text-white bg-red-500 px-4 py-1 rounded ml-2">Delete</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4">2</td>
                    <td class="px-6 py-4">Jane Smith</td>
                    <td class="px-6 py-4">Consectetur adipiscing elit.</td>
                    <td class="px-6 py-4">Inactive</td>
                    <td class="px-6 py-4">
                        <button class="text-white bg-green-500 px-4 py-1 rounded">Edit</button>
                        <button class="text-white bg-red-500 px-4 py-1 rounded ml-2">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>