<?

namespace pattern\Factory3;

class PlasticCar
{
    protected $material = ' - Пласмасса';

    /** @return string */
    public function drive(): string
    {
        return $this->material . ' Поехали!';
    }

}