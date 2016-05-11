<?php

namespace Lsv\HashidsBundle\Twig;

use Hashids\HashGenerator;

class TwigExtension extends \Twig_Extension
{

    /**
     * @var HashGenerator
     */
    private $hash;

    public function __construct(HashGenerator $hash)
    {
        $this->hash = $hash;
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('hashids', [$this, 'encodeHashids']),
            new \Twig_SimpleFilter('encode_hashids', [$this, 'encodeHashids']),
            new \Twig_SimpleFilter('decode_hashids', [$this, 'encodeHashids'])
        ];
    }

    /**
     * Encode
     *
     * @param int $id
     * @return string
     */
    public function encodeHashids($id)
    {
        return $this->hash->encode($id);
    }

    /**
     * @param string $string
     * @return int
     */
    public function decodeHashids($string)
    {
        return $this->hash->decode($string);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'lsv_hashids_twig_extension';
    }
}
