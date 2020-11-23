<?php


namespace testA\providers;


use Phalcon\Di\DiInterface;

class DatabaseProvider implements \Phalcon\Di\ServiceProviderInterface
{

    /**
     * @inheritDoc
     */
    public function register(DiInterface $di)
    {
        // TODO: Implement register() method.
        $dbConfig = $di->getShared('config')->get('database')->toArray();
    }
}