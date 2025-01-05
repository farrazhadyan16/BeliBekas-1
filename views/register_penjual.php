<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Toko</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <link rel="icon" type="image/svg+xml" href="../assets/icons/logo_only.svg">
</head>

<body class="bg-white flex items-center justify-center min-h-screen">
    <div class="max-w-2xl w-full mx-4">
        <div class="bg-blue-500 text-white p-8 rounded-t-lg">
            <h1 class="text-2xl font-semibold text-center">FORM REGISTRASI TOKO</h1>
            <p class="text-center mt-2">Kami akan melakukan verifikasi data, dalam hal ini segala bentuk dokumen tidak sah atau palsu dan sejenisnya tidak dibenarkan</p>
        </div>

        <div class="bg-white shadow-lg rounded-b-lg p-8">
            <div class="flex justify-center mb-8">
                <div class="flex items-center">
                    <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white mr-2">
                        1
                    </div>
                    <span class="mr-4">Akun</span>
                    <div class="h-1 w-24 bg-gray-300"></div>
                    <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center text-white mx-2">
                        2
                    </div>
                    <span>Data Diri</span>
                </div>
            </div>

            <h2 class="text-xl font-semibold text-center mb-2">Buat Akun Menuju Langkah Keuntungan Pertama Anda</h2>
            <p class="text-gray-600 text-center mb-8">Halaman ini khusus bagi anda yang baru pertama kali menjual barang, jika sebelumnya sudah pernah maka silakan klik Next</p>

            <form action="../controllers/register_penjual_proses.php" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 mb-2" for="username">Username<span class="text-red-500">*</span></label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="username" name="username" type="text" placeholder="Input username" required />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="password">Password<span class="text-red-500">*</span></label>
                        <div class="relative">
                            <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                id="password" name="password" type="password" placeholder="Input password" required />
                            <button type="button" class="absolute right-3 top-2.5 text-gray-500">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="email">Email<span class="text-red-500">*</span></label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="email" name="email" type="email" placeholder="Input Email" required />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="notelp">No. Telepon<span class="text-red-500">*</span></label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="notelp" name="notelp" type="text" placeholder="Input your phone number" required />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="ktm">KTM<span class="text-red-500">*</span></label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="ktm" name="ktm" type="text" placeholder="Input your KTM number" required />
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2" for="role">Role<span class="text-red-500">*</span></label>
                        <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="role" name="role" required>
                            <option value="penjual">Penjual</option>
                        </select>
                    </div>
                </div>

                <div class="mt-8 flex justify-center">
                    <button type="submit" class="bg-blue-500 text-white px-12 py-2 rounded-lg hover:bg-blue-600">
                        Next
                    </button>
                </div>
            </form>

            <p class="mt-4 text-center text-gray-700">
                Jika anda sudah memiliki toko
                <a href="login.php" class="text-blue-500 hover:underline">Next</a>
            </p>
        </div>
    </div>
</body>

</html>