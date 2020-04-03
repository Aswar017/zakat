<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form class="perhitungan">
        <div>
            <label class="penghasilan"> penghasilan perbulan</label>
            <input type="number" class="nominal1" placeholder="tuliskan nominal" required>
        </div>
        <div>
            <label class="pengeluaran"> Pengeluaran kebutuhan pokok (termasuk hutang jatuh tempo)</label>
            <input type="number" class="nominal2" placeholder="tuliskan nominal" required>
        </div>
        <div>
            <label class="nisab"> Nisab (520 kg beras)</label>
            <label class="nominal3">5.200.000</label>
        </div>
        <div>
            <label class="hitung"> Wajib membayar zakat penghasilan</label>
            <label class="nominal4">5.200.000</label>
        </div>
        <div>
            <label class="hitungzakat1"> JUMLAH ZAKAT PENGHASILAN PERBULAN</label>
            <input type="number" class="nominal5" id="exampleInputEmail1">
        </div>
        <div>
            <label class="hitungzakat2"> JUMLAH ZAKAT PENGHASILAN PERTAHUN</label>
            <input type="number" class="nominal6" id="exampleInputEmail1">
        </div>
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    </form>
</body>

</html>