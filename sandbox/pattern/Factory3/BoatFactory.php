<?

namespace pattern\Factory3;

class BoatFactory extends AbstractFactory
{
    /** @return PlasticBoat */
    public function createFromPlastic(): PlasticBoat
    {
        return new PlasticBoat();
    }

    /** @return WoodenBoat */
    public function createFromWooden(): WoodenBoat
    {
        return new WoodenBoat();
    }
}