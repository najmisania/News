<h1>Fitur Sistem : </h1>
<p>Website News adalah sebuah sistem yang memiliki fitur untuk melihat seluruh data Berita yang telah di inputkan oleh Admin maupun User.</p>
<p>Fitur yang terdapat pada sistem meliputi:</p>
<ul>
    <li>Beranda</li>
    <li>History Berita</li>
    <li>Kategori Berita</li>
    <ul>
        <li>News DTS</li>
        <li>News Non DTS</li>
    </ul>
    <li>Upload News</li>
    <li>About</li>
    <li>Contact</li>
    <li>Login</li>
    <li>Register</li>
</ul>
<br><br>
<h1>Data Dictionary : </h1>
Tabel admin :
<ul>
<li>id int(10) Primary Key </li>
<li>name varchar(191) </li>
<li>email varhcar(191) </li>
<li>password varchar(191) </li>
</ul>

<br><br>
Tabel berita : 
<ul>
<li>id int(10) Primary Key </li>
<li>judul varhcar(191) </li>
<li>sub_judul varhcar(191) </li>
<li>kategori varhcar(191) </li>
<li>ringkasan text </li>
<li>isi text </li>
</ul>

<br>
Tabel user :
<ul>
<li>id int(10) Primary Key </li>
<li>email varchar(191) </li>
<li>password varchar(191) </li>
</ul>

<br>
<br>
<h1> Penjelasan Alur Sistem</h1>
<p>Sistem yang dibuat masih dalam tahap pengembangan, terdapat beberapa fungsi yang belum bisa sepenuhnya berjalan. Sampai saat ini alur sistemnya adalah, Admin menginputkan data berita yang telah di buat input berdasarkan tabel berita. Selanjutnya admin juga dapat menghapus data berita yang telah di input</p>
