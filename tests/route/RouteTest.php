<?php declare(strict_types=1);
namespace TicketToRide;

use PHPUnit\Framework\TestCase;

/**
 * @covers \TicketToRide\Route
 * 
 * @uses \TicketToRide\City
 * @uses \TicketToRide\Color
 * @uses \TicketToRide\Length
 */
final class RouteTest extends TestCase
{
    private $city;
    private $citySameName;
    private $cityDiffName;

    private $route;

    private $cardCollection;

    public function setUp()
    {
        $color              = Color::purple();
        $length             = Length::two();

        $this->city         = new City("Hello City");
        $this->citySameName = new City("Hello City");
        $this->cityDiffName = new City("Hello Metropolis");

        $this->route        = new Route($this->city, $this->cityDiffName,
           $color, $length);

        $this->cardCollection = new CardCollection([
            Card::purple(),
            Card::purple()
        ]);
    }

    public function testCitiesCantBeSame()
    {
        $this->expectException(InvalidArgumentException::class);
        new Route($this->city, $this->citySameName, Color::red(), Length::one());
    }

    public function testHasColor()
    {
        $expected   = Color::purple();
        $actual     = $this->route->color();
        $this->assertEquals($expected, $actual);
    }

    public function testHasLength()
    {
        $expected   = Length::two();
        $actual     = $this->route->length();
        $this->assertEquals($expected, $actual);
    }

    public function testCanClaim()
    {
        $this->markTestIncomplete();
    }

    public function testWildcardClaim()
    {
        $this->markTestIncomplete();
    }

    public function testCalculateScore()
    {
        $this->markTestIncomplete();
    }

} //end RouteTest