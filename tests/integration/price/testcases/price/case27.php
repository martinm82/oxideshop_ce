<?php
/* 
 * Price enter mode: netto
 * Price view mode: brutto 
 * Discounts: 2
 *  1. shop; abs
 *  2. shop; %
 */
$aData = array (
        'articles' => array (
                0 => array (
                        'oxid'                     => '1001_a',
                        'oxprice'                  => 100.55,
                        'oxvat'                    => 20,
                ),
                1 => array (
                        'oxid'                     => '1001_b',
                        'oxprice'                  => 100.55,
                        'oxvat'                    => 20,
                ),
                
        ),
        'discounts' => array (
                0 => array (
                        'oxid'         => 'abs',
                        'oxaddsum'     => -5.2,
                        'oxaddsumtype' => 'abs',
                        'oxprice'    => 0,
                        'oxpriceto' => 99999,
                        'oxamount' => 0,
                        'oxamountto' => 99999,
                        'oxactive' => 1,
                        'oxarticles' => array ( '1001_a' ),
                ),
                1 => array (
                        'oxid'         => 'percent',
                        'oxaddsum'     => -5.2,
                        'oxaddsumtype' => '%',
                        'oxprice'    => 0,
                        'oxpriceto' => 99999,
                        'oxamount' => 0,
                        'oxamountto' => 99999,
                        'oxactive' => 1,
                        'oxarticles' => array ( '1001_b' ),
                ),
        ),
        'expected' => array (
                '1001_a' => array (
                        'base_price' => '100,55',
                        'price' => '125,86',
                ),
                '1001_b' => array (
                        'base_price' => '100,55',
                        'price' => '126,93',
                ),
        ),
        'options' => array (
                'config' => array(
                        'blEnterNetPrice' => true,
                        'blShowNetPrice' => false,
                ),
                'activeCurrencyRate' => 1,
        ),
);