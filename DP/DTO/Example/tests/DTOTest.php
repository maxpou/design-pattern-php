<?php

namespace DTO\Tests;

use DTO\Model\Beer;
use DTO\Model\Brewery;
use DTO\DTO\BeerDTO;

class DTOTest extends \PHPUnit_Framework_TestCase
{
    /** @var $myTestBeer Beer */
    private $myTestBeer;

    /** @var $myTestBeerDTO BeerDTO */
    private $myTestBeerDTO;

    protected function setUp()
    {
        $brewery = new Brewery();
        $brewery->setName('Bosteels brewery');
        $brewery->setLocation('Buggenhout, Belgium');

        $beer = new Beer();
        $beer->setName("Kwak");
        $beer->setAlcohol(8.4);
        $beer->setBrewery($brewery);

        $this->myTestBeer    = $beer;
        $this->myTestBeerDTO = new BeerDTO($beer);
    }

    public function testTheModelBeerIsOk()
    {
        $this->assertEquals("Kwak", $this->myTestBeer->getName());
        $this->assertEquals(8.4, $this->myTestBeer->getAlcohol());
        $this->assertEquals("Buggenhout, Belgium", $this->myTestBeer->getBrewery()->getLocation());
    }

    public function testDtoContainOnlyExpectedValues()
    {
        $this->assertEquals("Kwak", $this->myTestBeerDTO->name);
        $this->assertEquals("Bosteels brewery in (Buggenhout, Belgium)", $this->myTestBeerDTO->brewery);
    }

    public function testDtoDoesNotContainAlcoholAttribute($value='')
    {
        $this->assertClassNotHasAttribute('alcohol', BeerDTO::class);
    }

    public function testJsonGeneratedByDtoContainOnlyExpectedValues()
    {
        $JsonBeerDTO = $this->myTestBeerDTO->parseToJson();
        $this->assertJson($JsonBeerDTO);
        $this->assertEquals('{"name":"Kwak","brewery":"Bosteels brewery in (Buggenhout, Belgium)"}', $JsonBeerDTO);
    }
}
