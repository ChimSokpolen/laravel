
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        /* Add any custom styles for the PDF here */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Product List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>QTY</th>
                <th>Price</th>
                <th>is_active</th>
                <th>category_id</th>
                <!-- Add other columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->is_active }}</td>
                    <td>{{ $product->category_id}}</td>
                    <!-- Add other user details as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
