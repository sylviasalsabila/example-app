
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1>Halo ini halaman about.</h1>

    <h2>Daftar User</h2>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $index => $user)
                <tr>
                    <td>{{ $users->firstItem() + $index }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->gender ?? '-') }}</td>
                    <td>
                        <button>Edit</button>
                        <button>Hapus</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">
                        Tidak ada data user.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="pagination">
        {{ $users->links() }}
    </div>
</body>
</html>
