<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class House extends Model
    {
        //
        protected $table = "houses";

        public $id;

        public $Name;

        public $Bedrooms;

        public $Bathrooms;

        public $Storeys;

        public $Price;

        public $Garages;


    }
