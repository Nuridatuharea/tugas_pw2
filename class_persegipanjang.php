<!DOCTYPE html>
<html>
<head>
    <title>Persegi Panjang</title>
</head>
<body>
    <h2>Persegi Panjang</h2>
    <form method="post">
        <label for="panjang">Panjang:</label><br>
        <input type="number" id="panjang" name="panjang" required><br><br>
        
        <label for="lebar">Lebar:</label><br>
        <input type="number" id="lebar" name="lebar" required><br><br>
        
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];

        class PersegiPanjang {
            public $panjang;
            public $lebar;

            public function __construct($panjang, $lebar) {
                $this->panjang = $panjang;
                $this->lebar = $lebar;
            }

            public function luas() {
                return $this->panjang * $this->lebar;
            }

            public function keliling() {
                return 2 * ($this->panjang + $this->lebar);
            }
        }

        $persegi_panjang = new PersegiPanjang($panjang, $lebar);
        echo "<br>Luas Persegi Panjang: " . $persegi_panjang->luas();
        echo "<br>Keliling Persegi Panjang: " . $persegi_panjang->keliling();
    }
    ?>
</body>
</html>