Aplikasi Data Mahasiswa
Aplikasi Data Mahasiswa adalah aplikasi web untuk mengelola data mahasiswa. Pada aplikasi ini terdapat fitur CRUD (Create, Read, Update, Delete) untuk mengelola data mahasiswa dari aplikasi web ke sistem basis data.

Basis Data
Basis data yang digunakan adalah MySQL.

databaseHost = 'localhost'
databaseName = 'crud_db'
databaseUsername = 'root'
databasePassword = ''
TableName = 'users'

Struktur Basis Data
Nama Type

nim int(8)
nama varchar(40)
jurusan varchar(30)
Software yang Dibutuhkan
XAMPP Control Panel
Visual Studio Code
Web Browser (Google Chrome)

Penjelasan Aplikasi
Pada halaman uatama terdapat judul aplikasi "Aplikasi Data Mahasiswa", table data berisi "NIM, NAMA, JURUSAN, OPSI", button tambah data.

Jika ingin menambahkan data, klik button tambah data. Kemudian ketikkan NIM, Nama, Jurusan. Klik Simpan.
Pada proses tambah data, data yang dimasukkan tidak boleh kosong, dan pada bagian field NIM hanya boleh dimasukkan nilai angka dan dibatasi hanya 8 inputan. Jika tidak sesuai maka tidak bisa disimpan.

Jika ingin merubah data, klik button edit pada baris data yang akan dirubah. Pada halaman edit pengguna hanya dapat merubah data nama dan jurusan saja. Oleh karena itu, field NIM tidak dapat diketik. Field nama dan jurusan tidak boleh kosong. Jika kosong maka tidak akan bisa disimpan.

Jika ingin menghapus data, klik button hapus pada baris data yang akan dihapus.

Jika tidak ada data yang disimpan, maka table data mahasiswa akan muncul pesan data nihil.

Dibuat oleh
Nama : Rifai Abdul Gani
NIM : 16090160
Kelas : 4C
DIV Teknik Informatika