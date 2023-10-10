<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-md w-2/3">
    <h4 class="text-lg font-semibold mb-4">Tambah Buku</h4>
    <form method="post" action="{{ route('buku.store') }}">
        @csrf
        <div class="mb-4">
            <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
            <input type="text" name="judul" id="judul" class="w-full px-3 py-2 border rounded-md">
        </div>
        <div class="mb-4">
            <label for="penulis" class="block text-sm font-medium text-gray-700">Penulis</label>
            <input type="text" name="penulis" id="penulis" class="w-full px-3 py-2 border rounded-md">
        </div>
        <div class="mb-4">
            <label for="tglterbit" class="block text-sm font-medium text-gray-700">Tgl.Terbit</label>
            <input type="text" name="tglterbit" id="tglterbit" class="w-full px-3 py-2 border rounded-md">
        </div>
        <div class="mb-4">
            <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
            <input type="text" name="harga" id="harga" class="w-full px-3 py-2 border rounded-md">
        </div>
        <div class="flex items-center space-x-4">
            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">Simpan</button>
            <a href="/buku" class="text-blue-500 hover:underline">Batal</a>
        </div>
    </form>
</div>
