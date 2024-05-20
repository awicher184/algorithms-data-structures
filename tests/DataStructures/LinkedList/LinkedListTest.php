<?php

namespace Awicher\AlgorithmsDataStructures\tests\DataStructures;

use Awicher\AlgorithmsDataStructures\DataStructures\LinkedList\LinkedList;
use Awicher\AlgorithmsDataStructures\DataStructures\ListNode;
use PHPUnit\Framework\TestCase;

class LinkedListTest extends TestCase
{
    private LinkedList $subject;

    public function setUp(): void {
	$this->subject = new LinkedList();
    }

    public function testEmtpyInitialization(): void {
	$this->assertEquals(
	   null,
	   $this->subject->getHead()
	);
    }

    public function testConstruct(): void
    {
	$next = new ListNode();
	$this->subject = new LinkedList($next);

	$this->assertEquals(
	    $next, 
	    $this->subject->getHead()
	);
    }

    public function testSetPush(): void
    {
	$next = new ListNode();
	$this->subject->push($next);

	$this->assertEquals(
	    $next, 
	    $this->subject->getHead()->getNext()
	);
    }
}
