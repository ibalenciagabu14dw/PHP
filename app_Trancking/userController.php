<?php



class userController {

    private $userModel;



    public function __construct(userModel $userModel) {

        $this->userModel = $userModel;

    }
    
     public function insertar() {
    	$this->userModel->add_user($this->userModel->nombre,$this->userModel->correo);
    	$this->userModel->add_position( $this->userModel->nombre,$this->userModel->longitud,$this->userModel->latitud,$this->userModel->tiempo);
    }
    
    public function mostrar() {
    	$this->userView->output();
    }

}



?>