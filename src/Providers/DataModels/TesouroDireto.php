<?php

    namespace isfonzar\TesouroDireto\Providers\DataModels;

    /**
     * Class TesouroDireto
     *
     * @package isfonzar\TesouroDireto\Providers\DataModels
     */
    class TesouroDireto
    {
        /**
         * @var array
         */
        public $bonds = [];

        /**
         * @param Bond $bond
         *
         * @return TesouroDireto
         */
        public function addBond($bond)
        {
            $this->bonds[] = $bond;

            return $this;
        }
    }