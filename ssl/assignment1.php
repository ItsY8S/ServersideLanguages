<? 
    class Person {
        public function __construct() {
            // Declare properites
            $this->name = "Griffin";
            $this->age = 20;
            $this->person = array($this->name, $this->age);
            $this->personKey = array("name" => $this->name, "age" => $this->age);
        }
        
        // Display Name method
        public function displayName() {
            echo "My name is " . $this->name . " and age is " . $this->age . ".";
            echo '<br />';

            echo 'My name is ' . $this->name . ' and age is ' . $this->age . '.';
            echo '<br />';

            var_dump("My name is " . $this->person[0] . " and age is " . $this->person[1] . ".");

            echo '<br />';

            var_dump("My name is " . $this->personKey["name"] . " and age is " . $this->personKey["age"] . ".");

            $this->age = null;

            echo $this->age;

            unset($this->name);

            echo $this->name;
        }

        public function displayGrades($grade) {
            if($grade < 60) {
                echo 'F';
            }
            else if($grade <= 70 && $grade >= 60) {
                echo 'D';
            }
            else if($grade < 80 && $grade >= 70) {
                echo 'C';
            }
            else if($grade < 90 && $grade >= 80) {
                echo 'B';
            }
            else if($grade >= 90) {
                echo 'A';
            }
        }

        public function loopArray() {
            $this->colorKey = array("Red", "Pink", "Blue", "Baby Blue", "Green", "Lime");

            echo "<br/>";

            foreach($this->colorKey as $color) {
                echo "Color: <span style='color: ".$color."'>". $color . "</span><br/>";
            }
        }
    }

    $person = new Person();
    $person->displayName();
    $person->displayGrades(102.1);
    $person->loopArray();
?>