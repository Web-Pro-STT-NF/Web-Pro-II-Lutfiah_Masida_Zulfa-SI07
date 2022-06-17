<?php

include_once "header.php";
include_once "sidebar.php";

?>
<div class="content-wrapper">
    <?php
    class Fruit {
        public $name;
        public $color;

        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
        public function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
    }

    class Strawberry extends Fruit {
        public function message() {
            echo "Am I a fruit or a berry? ";
        }
    }

    $strawberry =  new Strawberry("Strawberry", "red");
    $strawberry->message();
    $strawberry->intro();
    ?>
</div>

<?php

include_once "footer.php";

?>