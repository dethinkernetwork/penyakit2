<x-app-layout>
	<x-slot name="title">Hasil diagnosa</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card title="Berikut hasil diagnosa penyakit">
		<p class="mb-4">
			<i class="fas fa-user mr-1"></i> {{ $riwayat->nama }} <i class="fas fa-calendar ml-4 mr-1"></i> {{ $riwayat->created_at->format('d M Y, H:m:s') }}
		</p>

		<table class="table table-hover border">
			<thead class="thead-light">
				<tr>
					<th>Gejala yang kamu alami saat ini</th>
					<th>Dirasakan</th>
				</tr>
			</thead>
			<tbody>
				@foreach(unserialize($riwayat->gejala_terpilih) as $gejala)
				<tr>
					<td>{{ $gejala['kode'] }} - {{ $gejala['nama'] }}</td>
					<td>{{ $gejala['keyakinan'] }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		
		@foreach(unserialize($riwayat->hasil_diagnosa) as $diagnosa)
		<div class="card card-body p-0 mt-5 border" style="box-shadow: none !important;">
			<div class="card-header bg-primary text-white p-2">
				<h6 class="font-weight-bold">Tabel perhitungan penyakit: {{ $diagnosa['nama_penyakit'] }} ({{ $diagnosa['kode_penyakit'] }})</h6>
			</div>
			<table class="table table-hover">
				<thead class="thead-light">
					<tr>
						<th>Gejala</th>
					</tr>
				</thead>
				<tbody>
					@foreach($diagnosa['gejala'] as $gejala)
					@if($gejala['cf_user'] == 1)
					<tr>
						<td>{{ $gejala['kode'] }} - {{ $gejala['nama'] }}</td>
					</tr>
					@endif
					@endforeach
				</tbody>	
			</table>
		</div>
		@endforeach
		<div class="mt-5">
			<div class="alert alert-success">
				<h5 class="font-weight-bold">Kesimpulan</h5>
				<p>Berdasarkan dari gejala yang kamu pilih berdasarkan Forward Chaining</p>
			</div>
			<div class="mt-3 text-center">
				<a href="{{ route('admin.diagnosa') }}" class="btn btn-warning mr-1"><i class="fas fa-redo mr-1"></i> Diagnosa ulang</a>
			</div>
		</div>
	</x-card>
</x-app-layout>