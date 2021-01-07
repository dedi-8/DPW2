<table>
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>Harga</th>
		<th>berat</th>
		<th>stok</th>
	</thead>
	<tbody>
		@foreach($list->sortBy('harga')->skip(1)->take(5) as $item)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$item->nama}}</td>
			<td>{{$item->harga}}</td>
			<td>{{$item->berat}}</td>
			<td>{{$item->stok}}</td>
		</tr>
		@endforeach
	</tbody>	
</table>