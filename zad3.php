<? php
	class PropertyManager{
		function __get($name){
			$this->$name=name;
		}
		function __set($name,$value){
			$this->$name=name;
			$this->$value=value;
			name=value;
		}
	}
	class TestPM extends PropertyManager{
		private $data=[];

	}