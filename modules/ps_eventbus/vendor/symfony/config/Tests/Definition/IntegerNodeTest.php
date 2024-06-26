<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Symfony\Component\Config\Tests\Definition;

use ps_eventbus_v3_0_7\PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Definition\IntegerNode;
class IntegerNodeTest extends TestCase
{
    /**
     * @dataProvider getValidValues
     */
    public function testNormalize($value)
    {
        $node = new IntegerNode('test');
        $this->assertSame($value, $node->normalize($value));
    }
    /**
     * @dataProvider getValidValues
     *
     * @param int $value
     */
    public function testValidNonEmptyValues($value)
    {
        $node = new IntegerNode('test');
        $node->setAllowEmptyValue(\false);
        $this->assertSame($value, $node->finalize($value));
    }
    public function getValidValues()
    {
        return [[1798], [-678], [0]];
    }
    /**
     * @dataProvider getInvalidValues
     */
    public function testNormalizeThrowsExceptionOnInvalidValues($value)
    {
        $this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException');
        $node = new IntegerNode('test');
        $node->normalize($value);
    }
    public function getInvalidValues()
    {
        return [[null], [''], ['foo'], [\true], [\false], [0.0], [0.1], [[]], [['foo' => 'bar']], [new \stdClass()]];
    }
}
