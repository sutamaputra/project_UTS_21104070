<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert ke tabel GUNDAM</title>
</head>
<body>
    <div align="center">
        <h1>TEKKADAN SHOP</h1>
    </div>
    <div align="center">
        <br>===================================================
        <form method="POST" action="mhs-insertdataform.php">
            <table>
                <h2>MASUKAN DATA</h2>
                <tr>
                    <td>NOMER UNIT</td>
                    <td><input type="text" name="txNOM"></td>
                </tr>
                <tr> 
                    <td>NAMA UNIT</td> 
                    <td><input type="text" name="txNAMA"></td> 
                </tr>
                <tr>
                    <td>JENIS GRADE</td> 
                    <td>
                        <select name="txGRADE">
                            <option value="HG"> HG </option>
                            <option value="RG"> RG </option>
                            <option value="MG"> MG </option>
                            <option value="PG"> PG </option>
                        </select>
                    </td> 
                </tr>
                <tr>
                    <td>STOCK</td>
                    <td><input type="number" name="txSTOCK"></td> 
                </tr>
            </table>
                <br><button type=submit> simpan data </button>
        </form>
    </div>
    <div align="center">
        <br>===================================================
        <form method="POST" action="mhs-updatedata.php">
            <table>  
                <h2>UPDATE DATA</h2>
                <tr>
                    <td>NOMER UNIT</td>
                    <td><input type="text" name="txNOM"></td>
                </tr>
                <tr>
                    <td><h2>Masukan Data Baru</h2></td>
                <tr>
                    <td>NAMA UNIT</td>
                    <td><input type="text" name="txNAMAup"></td>
                </tr>
                <tr>
                    <td>JENIS GRADE</td>
                    <td><select name="txGRADEup">
                        <option value="HG"> HG </option>
                        <option value="RG"> RG </option>
                        <option value="MG"> MG </option>
                        <option value="PG"> PG </option>
                    </select></td>
                </tr>
                <td>STOCK UPDATE</td>
                <td><input type="number" name="txSTOCKup"></td>
            </table> 
            <br><button type=submit> update data </button>
        </form>
    </div>
    <div align="center">
        <br>===================================================
        <form method="POST" action="mhs-delete.php">
            <table>
                <h2>DELETE DATA</h2>
                <tr>
                    <td?>NOMER UNIT</td>
                    <td?><input type="text" name="txNOM"></td>
                </tr>
            </table>
            <br><button type=submit> update data </button>
        </form>
    </div>
</body>
</html>