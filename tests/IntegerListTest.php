<?php
namespace Test\Vehsamrak\ListCollection;

use Vehsamrak\ListCollection\IntegerList;

class IntegerListTest extends AbstractListTest
{
    protected function getListClassName(): string
    {
        return IntegerList::class;
    }

    public function getValidParameters()
    {
        return [
            [[]],
            [[1]],
            [[1,2]],
            [[1,2,3]],
        ];
    }

    public function getInvalidParameters()
    {
        return [
            [[1.1]],
            [['string']],
            [[1, 'string']],
            [[new self()]],
            [[true]],
        ];
    }
}
