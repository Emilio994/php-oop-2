<!-- Crea una classe User che rappresenti quella
tabella, e usala per stampare in pagina i dati di
alcuni Users. -->

<?php
require_once 'traits.php';

    class User {
        use Admin;
        public function __construct($id, $name, $lastname, $date_of_birth, $task, $mail) {
            $this->id = (int)$id;
            $this->name = $name;
            $this->lastname = $lastname;
            $this->date_of_birth = $date_of_birth;
            $this->task = $task;
            $this->mail = $mail;
    
        }
        public function getUserData() {
            foreach($this as $item => $value) {
                echo $item . ' : ' . $value . '<br>';
            }
            echo '<hr>';
        }
    }

?>