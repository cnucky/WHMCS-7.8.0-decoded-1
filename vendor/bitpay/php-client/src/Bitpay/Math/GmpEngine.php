<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

/**
 * @license Copyright 2011-2014 BitPay Inc., MIT License
 * see https://github.com/bitpay/php-bitpay-client/blob/master/LICENSE
 */
namespace Bitpay\Math;

class GmpEngine implements EngineInterface
{
    /**
     * @param String $a Numeric String
     * @param String $b Numeric String
     */
    public function add($a, $b)
    {
        return gmp_strval(gmp_add($a, $b));
    }
    /**
     * @param String $a Numeric String
     * @param String $b Numeric String
     */
    public function cmp($a, $b)
    {
        return gmp_strval(gmp_cmp($a, $b));
    }
    /**
     * @param String $a Numeric String
     * @param String $b Numeric String
     */
    public function div($a, $b)
    {
        return gmp_strval(gmp_div($a, $b));
    }
    /**
     * @param String $a Numeric String
     * @param String $b Numeric String
     */
    public function invertm($a, $b)
    {
        return gmp_strval(gmp_invert($a, $b));
    }
    /**
     * @param String $a Numeric String
     * @param String $b Numeric String
     */
    public function mod($a, $b)
    {
        return gmp_strval(gmp_mod($a, $b));
    }
    /**
     * @param String $a Numeric String
     * @param String $b Numeric String
     */
    public function mul($a, $b)
    {
        return gmp_strval(gmp_mul($a, $b));
    }
    /**
     * @param String $a Numeric String
     * @param String $b Numeric String
     */
    public function pow($a, $b)
    {
        return gmp_strval(gmp_pow($a, $b));
    }
    /**
     * @param String $a Numeric String
     * @param String $b Numeric String
     */
    public function sub($a, $b)
    {
        return gmp_strval(gmp_sub($a, $b));
    }
}

?>