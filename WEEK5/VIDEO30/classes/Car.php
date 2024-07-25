<?php
class Car{
        private $brand;
        private $color;
        private $vehicleType = "car";
        //contructor
        public function __construct($brand, $color)
        {
            $this->brand = $brand;
            $this->color = $color;            
        }
        //setter and getter method
        public function getBrand(){
            return $this->brand;
        }
            public function setBrand($brand){
                $this->brand = $brand;
            }
            public function getColor(){
                return $this->color;
            }
           
            public function setColor($color){
                $arrColor = [
                    "black",
                    "blue",
                    "green",
                    "yellow"
                ];
                if(in_array($color, $arrColor)){
                    $this->color = $color;
                }
               
            }

        //method
        public function getCarInfo(){
                return "Brand:". $this->brand. " ". "Color:". $this->color;
        }
}
$car01 = new Car("Volvo", "green");
//echo $car01->brand;
//echo  $car01->getCarInfo();
?>