<?php

namespace artso\DigitalCep;


class Search
{
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode); //função regex para remover caracteres especiais

        $get = file_get_contents($this->url . $zipCode . "/json"); //faz a requisição, passando o url concatenado com o cep e o formato json

        return (array) json_decode($get);
    }
}