<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert ke tabel GUNDAM</title>
</head>
<body>
    
    <form method="POST" action="mhs-insertdataform.php">
        NOMER UNIT <br>
        <input type="text" name="txNOM"><br>
        NAMA UNIT<br>
        <input type="text" name="txNAMA"><br>
        JENIS GRADE<br>
        <select name="txGRADE">
            <option value="HG"> HG </option>
            <option value="RG"> RG </option>
            <option value="MG"> MG </option>
            <option value="PG"> PG </option>
        </select><br>
        STOCK
        <input type="number" name="txSTOCK"><br>
        <br><br>
        <button type=submit> simpan data </button>
    </form>
</body>
</html>