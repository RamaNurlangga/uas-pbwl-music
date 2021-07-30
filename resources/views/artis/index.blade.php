@extends ('layout.app')

@section ('content')

<div class="container">

	<h3>Daftar Artis</h3>
	
	<table>
		<tr>
			<td>Nama</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->artis_nama }}</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection