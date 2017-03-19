<?php

    namespace isfonzar\TesouroDireto\Providers;

    class ProviderStrategy
    {
        private $provider;

        public function __construct(ProviderInterface $provider)
        {
            $this->provider = $provider;
        }

        public function fetch()
        {
            return $this->provider->fetch();
        }
    }