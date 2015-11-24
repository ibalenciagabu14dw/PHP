<?php

	class puntos{
		public $lat = 0.0;
		public $lng = 0.0;
		public $tiempo = "";

		public function __construct($lat,$lng,$tiempo){
			$this->lat = $lat;
			$this->lng = $lng;
			$this->tiempo = $tiempo;
		}
	};
?>