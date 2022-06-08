<?

namespace pattern\Factory3;

class WoodenBoat
{
    protected $material = ' - Дерево';

    /** @return string */
    public function drive(): string
    {
        return $this->material . ' Поплыли!';
    }
}