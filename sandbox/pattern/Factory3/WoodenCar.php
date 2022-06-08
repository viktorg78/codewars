<?

namespace pattern\Factory3;

class WoodenCar
{
    protected $material = ' - Дерево';

    /** @return string */
    public function drive(): string
    {
        return $this->material . ' Поехали!';
    }
}