<?php
/** 
 * Controller Saludo
 * nomcontroladorController -> después del nombre del controlador sigue Controller, para la identificación de un controlador
 */
class SaludoController extends AppController {
	/** 
    * método para saludar
    * @param string $nombre
    */ 
    public function hola($nombre) {
    	$this->fecha = date("Y-m-d H:i");
    	$this->nombre = $nombre;
    }

    public function adios(){

    }
}