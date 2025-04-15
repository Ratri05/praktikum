<h2>Hapus Karyawan</h2>

<p>Apakah kamu yakin ingin menghapus data karyawan berikut?</p>

<ul>
    <li><strong>Nama:</strong> {{ $karyawan['nama'] }}</li>
    <li><strong>Posisi:</strong> {{ $karyawan['posisi'] }}</li>
    <li><strong>Jadwal:</strong> {{ $karyawan['jadwal'] }}</li>
    <li><strong>Telepon:</strong> {{ $karyawan['telepon'] }}</li>
    <li><strong>Alamat:</strong> {{ $karyawan['alamat'] }}</li>
</ul>

<form action="/karyawan/{{ $karyawan['id'] }}/delete" method="POST">
    @csrf
    <button type="submit">Ya, Hapus</button>
    <a href="/karyawan">Batal</a>
</form>