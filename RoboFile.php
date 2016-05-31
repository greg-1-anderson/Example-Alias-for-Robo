<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    public function alias($y) {
        $this->example($y);
    }

    public function example(
		$opts = array(
			'a' => 'default value',
			'tag-example' => 'a',
			'c' => 'some other value',
			'd' => '192.168.1.1',
			'e' => '9000',
			'f' => '',
        )
    ) {
    	echo 'Success! tag-example:' . $opts['tag-example'] . "\n";
    }
}
