<?php

/**
 * Test class for HttpBase.
 * Generated by PHPUnit on 2013-03-03 at 18:10:38.
 */
class HttpBaseTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var HttpBase
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new HttpBase;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
		
	}

	public function testSetHeader()
	{
		$obj = $this->object;

		$obj->setHeader('content-type', 'text/html');
		$this->assertEquals('text/html', $obj->getHeader('Content-Type'));
		$obj->setHeader('content-type', 'text/plain');
		$this->assertEquals('text/plain', $obj->getHeader('Content-Type'));
		$this->assertArrayHasKey('content-type', $obj->getHeader(null));

		$obj->setHeader('content-type', null);
		$this->assertNull($obj->getHeader('content-type'));
		$this->assertNull($obj->getHeader('Content-Type'));
		$this->assertArrayNotHasKey('content-type', $obj->getHeader(null));
	}

	public function testAddHeader()
	{
		$obj = $this->object;
		$this->assertFalse($obj->hasHeader('content-type'));
		$obj->addHeader('content-type', 'text/html');
		$this->assertTrue($obj->hasHeader('content-type'));
		$this->assertEquals('text/html', $obj->getHeader('Content-Type'));

		$obj->addHeader('content-type', 'text/plain');
		$this->assertInternalType('array', $obj->getHeader('Content-Type'));
		$obj->setHeader('content-type', null);
		$this->assertNull($obj->getHeader('content-type'));

		$this->assertInternalType('array', $obj->getHeader(null));
		$obj->clearHeader();
		$this->assertEmpty($obj->getHeader(null));
	}

	/**
	 * @todo Implement testSetCookie().
	 */
	public function testSetCookie()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testClearCookie().
	 */
	public function testClearCookie()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetCookie().
	 */
	public function testGetCookie()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testApplyCookie().
	 */
	public function testApplyCookie()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testFetchCookieToSend().
	 */
	public function testFetchCookieToSend()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}
}

