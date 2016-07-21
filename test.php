<?php

require __DIR__ . '/vendor/autoload.php';

use \Symfony\Component\Yaml\Yaml;

echo "Empty php array:\n";
echo Yaml::dump([
    'arr'=>[],
    'foo'=>'bar',
]);
echo "\n";

echo "Empty php array, as map:\n";
echo Yaml::dump([
    'arr'=>[],
    'foo'=>'bar',
],10,2,Yaml::DUMP_OBJECT_AS_MAP);
echo "\n";

echo "Empty ArrayObject:\n";
echo Yaml::dump([
    'arr'=>new ArrayObject(),
    'foo'=>'bar',
]);
echo "\n";

echo "Empty ArrayObject, as map:\n";
echo Yaml::dump([
    'arr'=>new ArrayObject(),
    'foo'=>'bar',
],10,2,Yaml::DUMP_OBJECT_AS_MAP);
echo "\n";

echo "EmptyIterator:\n";
echo Yaml::dump([
    'a'=>new EmptyIterator(),
    'foo'=>'bar',
]);
echo "\n";

echo "EmptyIterator, as map:\n";
echo Yaml::dump([
    'a'=>new EmptyIterator(),
    'foo'=>'bar',
],10,2,Yaml::DUMP_OBJECT_AS_MAP);
echo "\n";

echo "Empty string:\n";
echo Yaml::dump([
    'a'=>'',
    'foo'=>'bar',
]);
echo "\n";

echo "null:\n";
echo Yaml::dump([
    'a'=>null,
    'foo'=>'bar',
],2,4);
echo "\n";
