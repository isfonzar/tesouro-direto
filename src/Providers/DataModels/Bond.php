<?php

    namespace isfonzar\TesouroDireto\Providers\DataModels;

    /**
     * Class Bond
     *
     * @package isfonzar\TesouroDireto\Providers\DataModels
     */
    class Bond
    {
        /**
         * @var
         */
        public $name;

        /**
         * @var
         */
        public $expiration;

        /**
         * @var
         */
        public $rate;

        /**
         * @var
         */
        public $price;

        /**
         * @param mixed $name
         *
         * @return Bond
         */
        public function setName($name)
        {
            $this->name = $name;

            return $this;
        }

        /**
         * @param mixed $expiration
         *
         * @return Bond
         */
        public function setExpiration($expiration)
        {
            $this->expiration = $expiration;

            return $this;
        }

        /**
         * @param mixed $rate
         *
         * @return Bond
         */
        public function setRate($rate)
        {
            $this->rate = $rate;

            return $this;
        }

        /**
         * @param mixed $price
         *
         * @return Bond
         */
        public function setPrice($price)
        {
            $this->price = $price;

            return $this;
        }
    }