<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    protected $defaultOptsForExample = [
	'a' => 'default value',
	'tag-example' => 'a',
	'c' => 'some other value',
	'd' => '192.168.1.1',
	'e' => '9000',
	'f' => '',
    ];
    
    public function alias($opts = $defaultOptsForExample) {
        $this->example($opts);
    }

    public function example(
		$opts = $defaultOptsForExample
    ) {
    	echo 'Success! tag-example:' . $opts['tag-example'] . "\n";
    }
}
