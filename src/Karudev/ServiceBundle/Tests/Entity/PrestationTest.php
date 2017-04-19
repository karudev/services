<?php
namespace Karudev\ServiceBundle\Tests\Entity;

use PHPUnit\Framework\TestCase;
use Karudev\ServiceBundle\Entity\Prestation;

class PrestationTest extends TestCase
{
    public function testCalcul()
    {
        
        $stub = $this->getMockBuilder(Prestation::class)
                ->setMethods(['getName','getVat','getPreTaxAmount'])
                ->getMock();
       
        $name = "Soin du visage";
        $stub->setVat(20);
        $stub->setPreTaxAmount(100);
        $stub->setName($name);
        //$stub->expects($this->once())->method('getName')->willReturn($name);

        $this->assertEquals(120, $stub->getAmount());
        $this->assertEquals(20, $stub->getVatPercent());
        $this->assertEquals($name, $stub);
        
    }
}