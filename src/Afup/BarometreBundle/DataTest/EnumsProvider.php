<?php

declare(strict_types=1);

namespace Afup\BarometreBundle\DataTest;

use Afup\BarometreBundle\Enums\EnumsCollection;
use Faker\Generator;
use Faker\Provider\Base;

class EnumsProvider extends Base
{
    /**
     * @var EnumsCollection
     */
    protected $collection;

    public function __construct(Generator $generator, EnumsCollection $collection)
    {
        parent::__construct($generator);

        $this->collection = $collection;
    }

    public function enums(string $alias)
    {
        $choices = $this->collection->getEnums($alias)->getChoices();

        return array_rand($choices);
    }
}
