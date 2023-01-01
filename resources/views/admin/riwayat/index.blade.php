<x-app-layout>
	<x-slot name="title">Riwayat diagnosa</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<div class="table-responsive">
			<table class="table table-hover border">
			<thead>
				<th>ID</th>
				@role('Admin')
				<th>Nama</th>
				@endrole
				<th>Tanggal</th>
				<th></th>
			</thead>
			<tbody>
				@forelse($riwayat as $row)
				<tr>
					<td>{{ $row->id }}</td>
					@role('Admin')
					<td>{{ $row->nama }}</td>
					@endrole
					<td>{{ $row->created_at->format('d M Y, H:m:s') }}</td>
					<td>
						<div class="d-flex justify-between-space">
						<div>
						<a href="{{ route('admin.riwayat', $row->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye mr-1"></i></a>
						</div>
					</td>
							
				</tr>
				@empty
				<tr>
					<td colspan="5" class="text-center">No Data</td>
				</tr>
				@endforelse
			</tbody>
		</table>
		<div class="mt-3">
			{{ $riwayat->links() }}
		</div>
		</div>
	</x-card>


</x-app-layout>
