<?php

use Yethee\Tiktoken\EncoderProvider;

include('./index.php');

$provider = new EncoderProvider();

$encoder = $provider->getForModel('gpt-3.5-turbo');
$tokens = $encoder->encode('Hello world!');
print_r($tokens);