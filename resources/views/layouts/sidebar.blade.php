<div class="sedbar" style="background-color: orange; height: 60px; padding: 15px 15px 15px 0px;"><h4 class="text-center" style="font-weight: bold;">Menu</h4></div>
<div class="list-group list-group-flush" style="height: 700px; background-color: white;">
	<a href="/mhs" class="list-group-item list-group-item-action {{ (request()->is('mhs')) ? 'active' : ''}}">Mahasiswa</a>
	<a href="/dsn" class="list-group-item list-group-item-action {{ (request()->is('dsn')) ? 'active' : ''}}">Dosen</a>
	<a href="/prodi" class="list-group-item list-group-item-action {{ (request()->is('prodi')) ? 'active' : ''}}">Program Studi</a>
	<a href="/matakuliah" class="list-group-item list-group-item-action {{ (request()->is('matakuliah')) ? 'active' : ''}}">Mata Kuliah</a>
	<a href="" class="list-group-item list-group-item-action">Kerja Praktek</a>
	<a href="" class="list-group-item list-group-item-action">Skripsi</a><hr>
	<img src="{{asset('img/rby1.png')}}"" alt="" style=" height: 400px;">
</div>