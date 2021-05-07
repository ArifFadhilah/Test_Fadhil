<html>
<head>
	<title>View</title>
</head>
<body>
 
	<h3>Data View</h3>
 
	<table border="1">
		<tr>
			<th>Barcode</th>
			
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Ready</th>
			<th>Onhold</th>
			<th>Delivered</th>
			<th>Packing</th>
			<th>Sent</th>


		
			
		</tr>
		@foreach($tugas as $p)
		<tr>
			<td>{{ $p->barcode }}</td>
			<td>{{ $p->jumlah }}</td>
			<td>{{ $p->price }}</td>
			<td>{{ $p->ready }}</td>
			<td>{{ $p->onhold }}</td>
			<td>{{ $p->delivered }}</td>
			<td>{{ $p->packing }}</td>
			<td>{{ $p->sent }}</td>

				
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>