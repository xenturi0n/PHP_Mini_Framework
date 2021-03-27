<?php
$builder = new DI\ContainerBuilder();
$builder->addDefinitions(require __DIR__ . "/config.php");
return $builder->build();