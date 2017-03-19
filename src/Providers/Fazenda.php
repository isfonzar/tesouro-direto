<?php

    namespace isfonzar\TesouroDireto\Providers;

    use isfonzar\TesouroDireto\Providers\DataModels\Bond;
    use isfonzar\TesouroDireto\Providers\DataModels\TesouroDireto as Response;
    use isfonzar\TesouroDireto\Providers\Exceptions\CouldntFetchException;

    class Fazenda implements ProviderInterface
    {
        const URL = "http://www.tesouro.fazenda.gov.br/tesouro-direto-precos-e-taxas-dos-titulos";

        private $souce;

        public function __construct()
        {
            $ch = curl_init(self::URL);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $this->souce = curl_exec($ch);

            if (empty($this->souce))
            {
                throw new CouldntFetchException('Couldnt fetch from the url: ' . self::URL, 400);
            }
        }

        public function fetch()
        {
            preg_match_all('/<tr class="camposTesouroDireto ">(.*?)<\/tr>/', $this->souce, $bondsSource);

            if (empty($bondsSource))
            {
                throw new CouldntFetchException();
            }

            $response = new Response();

            $bondsSource = $bondsSource[1];

            foreach ($bondsSource as $bondSource)
            {
                $bond = $this->fetchBond($bondSource);

                if (!empty($bond))
                {
                    $response->addBond($bond);
                }
            }

            return $response;
        }

        private function fetchBond($source)
        {
            $bond = new Bond();

            preg_match_all('/<td.*?>(.*?)<\/td>/', $source, $retrievedData);

            if (empty($retrievedData))
            {
                throw new CouldntFetchException();
            }

            $retrievedData = $retrievedData[1];

            $title      = array_shift($retrievedData);
            $expiration = array_shift($retrievedData);
            $rate       = array_shift($retrievedData);
            $minValue   = array_shift($retrievedData);
            $value      = array_shift($retrievedData);

            $bond->setName($title)
                 ->setExpiration($expiration)
                 ->setRate($rate)
                 ->setPrice($value);

            return $bond;
        }
    }