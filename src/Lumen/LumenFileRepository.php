<?php

namespace MaxsoftYemen\Module\Lumen;

use MaxsoftYemen\Module\FileRepository;

class LumenFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
