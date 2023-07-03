<!DOCTYPE html>
<html>
<head>
    <title>Macau4D</title>
</head>
<body>
    <h1>Macau4D</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    <form action="/macau4d/submit" method="POST">
        @csrf

        <div>
            <label for="angka1">Angka 1:</label>
            <input type="number" id="angka1" name="angka1" required>
            <label for="jumlah1">Jumlah 1:</label>
            <input type="number" id="jumlah1" name="jumlah1" required>
        </div>

        <div>
            <label for="angka2">Angka 2:</label>
            <input type="number" id="angka2" name="angka2" required>
            <label for="jumlah2">Jumlah 2:</label>
            <input type="number" id="jumlah2" name="jumlah2" required>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
