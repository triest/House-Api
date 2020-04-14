<?php
    /**
     * Created by PhpStorm.
     * User: triest
     * Date: 14.04.2020
     * Time: 12:55
     */

    namespace App;


    class HouseBuilder
    {
        public $house;

        /**
         * HouseBuilder constructor.
         * @param $house
         */
        public function __construct()
        {
            $this->house = new House();

            return $this;
        }

        public function setName($name)
        {
            $this->house->name = $name;
        }

        public function setPrice($price)
        {
            $this->house->price = $price;
        }

        public function setBedrooms($numeric)
        {
            $this->house->bedrooms = intval($numeric);
        }

        public function setBathrooms($numeric)
        {
            $this->house->bathrooms = intval($numeric);
        }

        public function setStoreys($numeric)
        {
            $this->house->storeys = intval($numeric);
        }

        public function setGarages($numeric)
        {
            $this->house->garages = intval($numeric);
        }


    }