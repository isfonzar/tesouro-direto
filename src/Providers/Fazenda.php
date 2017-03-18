<?php

    namespace isfonzar\TesouroDireto\Providers;

    use isfonzar\TesouroDireto\Providers\Exceptions\CouldntFetchException;

    class Fazenda implements ProviderInterface
    {
        const URL = "http://www.tesouro.fazenda.gov.br/tesouro-direto-precos-e-taxas-dos-titulos";

        private $souce;

        public function __construct()
        {
            $ch = curl_init(self::URL);

            $this->souce = curl_exec($ch);

            if (empty($this->souce))
            {
                throw new CouldntFetchException('Couldnt fetch from the url: ' . self::URL, 400);
            }
        }

        public function getAll()
        {
            // TODO: Implement getAll() method.
        }
    }