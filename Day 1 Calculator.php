<?php

if ($_POST) {
    $firstNumber = $_POST["firstNumber"];
    $operation = $_POST["operation"];
    $secondNumber = $_POST["secondNumber"];
}

if (empty($firstNumber) || empty($secondNumber) || empty($operation)) {
    $error = "isian tidak boleh kosong";

} else {
    if ($operation == "+") {
        $hasil = $firstNumber + $secondNumber;
    } elseif ($operation == "-") {
        $hasil = $firstNumber - $secondNumber;
    } elseif ($operation == "X") {
        $hasil = $firstNumber * $secondNumber;
    } elseif ($operation == "/") {
        $hasil = $firstNumber / $secondNumber;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container text-center" style="padding: 50px 250px 0 250px">
  <div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Kalkulator Dasar</h4>
                <div class="col ">
                    <form action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="firstNumber" id="firstNumber" placeholder="175" value="<?= isset($firstNumber) ? $firstNumber : ''; ?>">
                            <label for="firstNumber">Isi</label>
                        </div>

                        <select class="form-select mb-3" id="operation" name="operation" aria-label="Default select example">
                                <option selected value="">operasi</option>
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="X">X</option>
                                <option value="/">/</option>
                        </select>

                        <div class="form-floating">
                            <input type="number" class="form-control" name="secondNumber" id="secondNumber" placeholder="53" value="<?= isset($secondNumber) ? $secondNumber : ''; ?>">
                            <label for="secondNumber">Isi</label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3 mt-3 w-100">Hitung</button>
                    </form>

                    <?php
                    if (!empty($hasil)) {
                        echo "<div class='alert alert-success'>Hasil: $hasil</div>";
                    } else {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                    ?>
            </div>
        </div>
    </div>
</div>


<a href="Day 2 Food Menu.php" class="btn btn-primary mb-3 mt-3 w-25">Day-2</a>


</body>
</html>