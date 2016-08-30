<? php
	abstract class Vechile{
		protected $brand;
		protected $model;
		protected $price;
		public function getBrand($brand){
			$this->$brand=brand;
		}
		public function getModel($model){
			$this->$model=model;
		}
		public function getPrice($price){
			$this->$price=price;
		}
		abstract function startEngine(){
			echo "Engine is working."
		}
		abstract function stopEngine(){
			echo "Engine stopped."
		}
		abstract function printData($brand,$model,$price){
			foreach ($this as $data) {
				echo $data." ";
			}
		}
	}
	class Car extends Vechile{
		private $horsePower;
		private $weight;
		private $color;
		function startEngine(){
			echo "The engine is working."
		}
		function stopEngine(){
			echo "The engine stopped."
		}
		public function getHorsePower($horsePower){
			$this->$horsePower=horsePower;
		}
		public function getWeight($weight){
			$this->$weight=weight;
		}
		public function getColor($color){
			$this->$color=color;
		}
		function __construct($brand,$model,$price){
			$this->$brand=brand;
			$this->$model=model;
			$this->$price=price;
		}
	}
	class Bus extends Vechile{
		private $numSeats;
		private $numDisablePeopleSeats;
		private $totalCapacity;
		function startEngine(){
			echo "The engine is working."
		}
		function stopEngine(){
			echo "The engine stopped."
		}
		public function getNumberOfSeats($numSeats){
			$this->$numSeats=numSeats;
		}
		public function getNumberOfDisablePeopleSeats($numDisablePeopleSeats){
			$this->$numDisablePeopleSeats=numDisablePeopleSeats;
		}
		public function getTotalCapacity($totalCapacity){
			$this->$totalCapacity=totalCapacity;
		}
		function __construct($brand,$model,$price){
			$this->$brand=brand;
			$this->$model=model;
			$this->$price=price;
		}
	}
	$car1=new Car("Volvo",440,600,3720,500,"black");
	echo $car1->getHorsePower()."</br>";
	echo $car1->getColor()."</br>";
	echo $car1->startEngine()."</br>";
	echo $car1->printData();
	$bus1=new Bus("bus_name","bus_model",1200,250,20,270);
	echo $bus1->getNumberOfSeats()."</br>";
	echo $bus1->startEngine()."</br>";
	echo $car1->stopEngine()."</br>";
	echo $car1->printData();
