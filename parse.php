<?php

include __DIR__.'/vendor/autoload.php';

$parser = new PHPCfg\Parser(
    (new PhpParser\ParserFactory)->create(PhpParser\ParserFactory::PREFER_PHP7)
);

$script = $parser->parse(file_get_contents($argv[1]), $argv[1]);

$printer = new PHPCfg\Printer\Text();
file_put_contents('cfg2.txt', $printer->printScript($script));

$printer = new PHPCfg\Printer\GraphViz();
file_put_contents('cfg2.dot', $printer->printScript($script));

$a = 1;
