<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <link rel="icon" type="image/svg+xml" href="../assets/icons/logo_only.svg">
</head>

<body class="bg-white flex items-center justify-center min-h-screen">
    <div class="flex bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="w-1/2 p-8">
            <div class="flex items-center mb-8">
                <img alt="BeliBekas.id logo" class="mr-2" height="40"
                    src="../assets/images/logo.svg"
                    width="200" />
            </div>
            <h1 class="text-3xl font-semibold mb-6 text-center">
                SIGN UP
            </h1>

            <form action="../controllers/register_proses.php" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="username">Username</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        id="username" name="username" type="text" placeholder="Enter your username" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="email">Email</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        id="email" name="email" type="email" placeholder="Enter your email" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="ktm">KTM</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        id="ktm" name="ktm" type="text" placeholder="Enter your KTM number" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="notelp">No. Telepon</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        id="notelp" name="notelp" type="text" placeholder="Enter your phone number" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="password">Password</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        id="password" name="password" type="password" placeholder="Enter your password" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="role">Role</label>
                    <select
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        id="role" name="role" required>
                        <option value="mahasiswa">Mahasiswa</option>
                    </select>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                    Register
                </button>
            </form>

            <p class="mt-4 text-center text-gray-700">
                Already have an account?
                <a class="text-blue-500 hover:underline" href="login.php">Login</a>
            </p>
        </div>
        <div class="w-1/2 relative">
            <img alt="Wardrobe with clothes" class="object-cover h-full w-full" height="600"
                src="https://storage.googleapis.com/a1aa/image/Ob0S69MkwVKRDx5bprgnUVr5HGQNaPGVeqcekFSWvfDfxqUPB.jpg"
                width="500" />
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-transparent to-white"></div>
        </div>
    </div>
</body>

</html>