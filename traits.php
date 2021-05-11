<?php

    trait Admin {
        public function setPermission() {
            if($this->task == 'amministratore') {
                $this->accessibility = 'Total';
            } else {
                $this->accesibility = 'Restrained';
            }
        }
    }

?>