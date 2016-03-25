<?php
namespace Tropo\Test\Service;

use Tropo\Service\Tropo;

class TropoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers Tropo::getRandomRecording
     */
    public function testGetRandomRecordings()
    {
        $tropo = new Tropo();
        $count = count($tropo);
        $seen = array ();
        for ($i = 0; $i < $count; $i++) {
            $result = $tropo->getRandomRecording();
            $name = basename($result);
            if (!array_key_exists($name, $seen)) {
                $seen[$name] = 0;
            } else {
                $seen[$name]++;
            }
        }
        $this->assertLessThanOrEqual($count, count($seen));
    }
}