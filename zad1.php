<? php
	interface Mammal{
		public function talk();
		public function walk();
	}
	class Preson implements Mammal{
			private $name;
			private $age;
			private $gener;
			function talk(){
				echo "I'm human."
			}
			function walk(){
				echo "I use two feet."
			}
			function __construct($name,$age,$gener){
				$this->$name=name;
				$this->$age=age;
				$this->$gener=gener;
			}	
			function showInfo($name,$age,$gener){
				foreach($this as $info){
					echo $info." ";
				}
			}		
	}
	class Animal implements Mammal{
			private $name;
			private $age;
			private $gener;
			function talk(){
				echo "*animal sounds*"
			}
			function walk(){
				echo "I use four feet."
			}
			function __construct($name,$age,$gener){
				$this->$name=name;
				$this->$age=age;
				$this->$gener=gener;
			}	
			function showInfo($name,$age){
				echo $this->$name." ".$this->$age;	
			}	
	}
	class Dolphin extends Animal{
		function talk(){
				echo "*dolphin sounds*"
			}
			function walk(){
				echo "I swim."
			}
			function __construct($name,$age,$gener){
				$this->$name=name;
				$this->$age=age;
				$this->$gener=gener;
			}	
			function showInfo($name,$age,$gener){
				foreach($this as $info){
					echo $info." ";
				}
			}
	}
	class Student extends Preson{
		function talk(){
				echo "I'm human."
			}
			function walk(){
				echo "I use two feet."
			}	
			function __construct($name,$age,$gener){
				$this->$name=name;
				$this->$age=age;
				$this->$gener=gener;
			}	
			function showInfo($name,$age,$gener){
				foreach($this as $info){
					echo $info." ";
				}
			}
	}
	$gosho=new Student("Gosho",15,"m");	
	$dolphy=new Dolphin("Dolphy", 30,"f");
	echo $gosho->showInfo()."</br>" ;
	echo $dolphy->showInfo()."</br>" ;
