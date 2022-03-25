<table>
    <thead>
    <tr>
        <th>รหัส</th>
        <th>ชื่อสินค้า</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
        <tr>
            <td>{{ $item->product_code }}</td>
            <td>{{ $item->product_name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>