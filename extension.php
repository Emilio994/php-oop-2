<?php

    require 'user.php';

    class HireDate extends User {
        public function __construct($id, $name, $lastname, $date_of_birth, $task, $mail, $hire_date) {
            parent::__construct($id, $name, $lastname, $date_of_birth, $task, $mail) ;
            $this->hire_date = $hire_date;
        }
    }
?>