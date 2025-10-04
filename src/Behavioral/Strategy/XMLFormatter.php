<?php
declare(strict_types=1);

namespace App\Behavioral\Strategy;

use SimpleXMLElement;

class XMLFormatter implements OutputFormatter
{
    public function format(array $data): string
    {
        $xml = $this->addData($data, new SimpleXMLElement('<root/>'));

        return $xml->asXML();
    }

    protected function addData(array $data, SimpleXMLElement $xml): SimpleXMLElement
    {
        foreach ($data as $k => $v) {
            is_array($v)
                ? $this->addData($v, $xml->addChild($k))
                : $xml->addChild($k, $v);
        }
        return $xml;
    }
}
