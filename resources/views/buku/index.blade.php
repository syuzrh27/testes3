<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <table class="w-full border-collapse border border-gray-300 bg-white shadow-md">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2 border border-gray-300">No.</th>
                    <th class="p-2 border border-gray-300">ID</th>
                    <th class="p-2 border border-gray-300">Judul Buku</th>
                    <th class="p-2 border border-gray-300">Penulis</th>
                    <th class="p-2 border border-gray-300">Tgl. Terbit</th>
                    <th class="p-2 border border-gray-300">Harga</th>
                    <th class="p-2 border border-gray-300">Hapus Data</th>
                    <th class="p-2 border border-gray-300">Edit Data</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 0;
                @endphp
                @foreach ($databuku as $buku)
                <tr>
                    <td class="p-2 border border-gray-300">{{ ++$no }}</td>
                    <td class="p-2 border border-gray-300">{{ $buku->id }}</td>
                    <td class="p-2 border border-gray-300">{{ $buku->judul }}</td>
                    <td class="p-2 border border-gray-300">{{ $buku->penulis }}</td>
                    <td class="p-2 border border-gray-300">{{ $buku->tglterbit }}</td>
                    <td class="p-2 border border-gray-300">Rp {{ number_format($buku->harga, 2) }}</td>
                    <td class="p-2 border border-gray-300">
                        <form action="{{route('buku.destroy',$buku->id)}}" method="post">
                            @csrf
                            <button onClick="return confirm('yakin mau dihapus?')">Hapus</button>
                        </form>
                    </td>
                    <td class="p-2 border border-gray-300"><p class="text-lg"><a href="{{ route('buku.edit', $buku->id) }}">Edit</p></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4 p-4 border-t border-gray-300 mx-auto max-w-2xl">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="text-left">Deskripsi</th>
                        <th class="text-right">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Banyak buku yang tersedia:</td>
                        <td class="text-right">{{ $jumlahbuku }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Harga keseluruhan dari seluruh buku:</td>
                        <td class="text-right">Rp {{ number_format($totalharga, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <a href="{{ route('buku.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">
                                Tambah Buku
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>