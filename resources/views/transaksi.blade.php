<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Penjualan</title>
</head>
<script>
    /* Reset styles */
body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}

/* Header */
h1 {
  text-align: center;
  padding: 20px;
  font-size: 24px;
}

/* Form */
form {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

form input {
  padding: 5px;
  margin: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

form input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

/* Table */
table {
  width: 100%;
  border-collapse: collapse;
}

table th, table td {
  padding: 10px;
  border: 1px solid #ddd;
  text-align: left;
}

table thead th {
  background-color: #f2f2f2;
}

/* Button */
button {
  background-color: #3498db;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
}
</script>

<body>
    <h1>Halaman Transaksi POS</h1>

    <form action="/penjualan/store" method="post">
        <input type="text" name="nama_produk" placeholder="Nama Produk">
        <input type="number" name="jumlah" placeholder="Jumlah">
        <input type="number" name="harga" placeholder="Harga">
        <input type="submit" value="Simpan">
    </form>

    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Produk 1</td>
                <td>10</td>
                <td>Rp 10.000</td>
                <td>Rp 100.000</td>
            </tr>
            <tr>
                <td>Produk 2</td>
                <td>5</td>
                <td>Rp 20.000</td>
                <td>Rp 100.000</td>
            </tr>
        </tbody>
    </table>

    <button type="button" onclick="window.print()">Cetak Struk</button>
</body>

</html>
