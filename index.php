<?php include "header.php" ?>


<?php class Staff{
        public $name;
        public $age;

        public function staffName(){
            echo "<h2>" . "Staff Name is:" . $this->name ."</h2>" ;
        }

        public function staffAge($value){
            echo "<h2>" . "Staff Age is:" . $this->age=$value . "</h2>";
        }
}
$staffOne = new Staff;

$staffOne->name="Mobarok Hossain";
$staffOne->staffName();

$staffOne->staffAge("23");


?>

<?php include "footer.php" ?>