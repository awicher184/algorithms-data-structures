<?php

namespace Awicher\AlgorithmsDataStructures\DataStructures;

use \Awicher\AlgorithmsDataStructures\DataStructures\ListNodeInterface;

class ListNode implements ListNodeInterface
{
    public function __construct(
	private ?ListNodeInterface $next = null,
	private ?ListNodeInterface $previous = null,
    ) {
    }

    public function getPrevious(): ?ListNodeInterface
    {
	return $this->previous;
    }

    public function setPrevious(?ListNodeInterface $previous): void
    {
	$this->previous = $previous;
    }

    public function getNext(): ?ListNodeInterface
    {
	return $this->next;
    }

    public function setNext(?ListNodeInterface $next): void
    {
	$this->next = $next;
    }
}
