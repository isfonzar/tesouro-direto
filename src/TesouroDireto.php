<?php

    namespace isfonzar\TesouroDireto;

    use isfonzar\TesouroDireto\Providers\Fazenda;
    use isfonzar\TesouroDireto\Providers\ProviderStrategy;

    class TesouroDireto
    {
        private $provider;

        public function __construct()
        {
            $this->provider = new ProviderStrategy(new Fazenda());
        }

        public function fetch()
        {
            return $this->provider->fetch();
        }
    }