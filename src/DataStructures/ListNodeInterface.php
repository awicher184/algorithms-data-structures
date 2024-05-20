<?php

namespace Awicher\AlgorithmsDataStructures\DataStructures;

interface ListNodeInterface
{
    public function getPrevious(): ?ListNodeInterface;

    public function setPrevious(?ListNodeInterface $next): void;

    public function getNext(): ?ListNodeInterface;

    public function setNext(?ListNodeInterface $next): void;
}
