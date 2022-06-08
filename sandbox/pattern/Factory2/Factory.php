<?

namespace pattern\Factory2;

class Factory
{
    public function createSubject($subject)
    {
        switch ($subject) {
            case 'Car':
                return new Car();
            case 'Ship' :
                return new Ship();
        }
    }
}

