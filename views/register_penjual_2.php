<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Toko - Data Diri</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .upload-box {
            border: 2px dashed #ddd;
            padding: 20px;
            text-align: center;
        }
    </style>
    <link rel="icon" type="image/svg+xml" href="../assets/icons/logo_only.svg">
</head>

<body class="bg-white flex items-center justify-center min-h-screen p-4">
    <div class="max-w-3xl w-full mx-4">
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
                    <div class="h-1 w-24 bg-blue-500"></div>
                    <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white mx-2">
                        2
                    </div>
                    <span>Data Diri</span>
                </div>
            </div>

            <h2 class="text-xl font-semibold text-center mb-2">Konfirmasi Identitas Anda!</h2>
            <p class="text-gray-600 text-center mb-8">Informasi ini dibutuhkan sesuai peraturan OJK terkait pemodalan</p>

            <form action="../controllers/register_penjual_data_proses.php" method="POST" enctype="multipart/form-data">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 mb-2" for="nik">NIK<span class="text-red-500">*</span></label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="nik" name="nik" type="text" placeholder="Input NIK" required />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="nama_lengkap">Nama Lengkap<span class="text-red-500">*</span></label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="nama_lengkap" name="nama_lengkap" type="text" placeholder="Input nama lengkap" required />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="pekerjaan">Pekerjaan<span class="text-red-500">*</span></label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="pekerjaan" name="pekerjaan" type="text" placeholder="Input nama pekerjaan" required />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="domisili">Domisili Asal<span class="text-red-500">*</span></label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="domisili" name="domisili" type="text" placeholder="Input Domisili" required />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="alamat">Alamat Rumah/Kos<span class="text-red-500">*</span></label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="alamat" name="alamat" type="text" placeholder="Input alamat" required />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="jurusan">Jurusan<span class="text-red-500">*</span></label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="jurusan" name="jurusan" type="text" placeholder="Input jurusan" required />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="program_studi">Program Studi<span class="text-red-500">*</span></label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="program_studi" name="program_studi" type="text" placeholder="Input program studi" required />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="nim">NIM<span class="text-red-500">*</span></label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="nim" name="nim" type="text" placeholder="Input NIM" required />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                    <div>
                        <label class="block text-gray-700 mb-2">Foto KTP<span class="text-red-500">*</span></label>
                        <div class="upload-box rounded-lg">
                            <input type="file" name="foto_ktp" id="foto_ktp" class="hidden" accept="image/*" required />
                            <label for="foto_ktp" class="cursor-pointer">
                                <i class="fas fa-image text-4xl text-gray-400 mb-2"></i>
                                <p class="text-sm text-gray-500">Klik untuk upload</p>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Foto NIM<span class="text-red-500">*</span></label>
                        <div class="upload-box rounded-lg">
                            <input type="file" name="foto_nim" id="foto_nim" class="hidden" accept="image/*" required />
                            <label for="foto_nim" class="cursor-pointer">
                                <i class="fas fa-image text-4xl text-gray-400 mb-2"></i>
                                <p class="text-sm text-gray-500">Klik untuk upload</p>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Pas Foto<span class="text-red-500">*</span></label>
                        <div class="upload-box rounded-lg">
                            <input type="file" name="pas_foto" id="pas_foto" class="hidden" accept="image/*" required />
                            <label for="pas_foto" class="cursor-pointer">
                                <i class="fas fa-image text-4xl text-gray-400 mb-2"></i>
                                <p class="text-sm text-gray-500">Klik untuk upload</p>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex justify-center">
                    <button type="submit" class="bg-blue-500 text-white px-12 py-2 rounded-lg hover:bg-blue-600" onclick="window.location.href='login.php'" style="cursor: pointer;">
                        Submit
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