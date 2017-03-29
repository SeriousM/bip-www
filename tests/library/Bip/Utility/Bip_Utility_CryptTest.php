<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2012-11-10 at 14:10:11.
 */
class Bip_Utility_CryptTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Bip_Utility_Crypt
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Bip_Utility_Crypt;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

    }

    /**
     * @covers Bip_Utility_Crypt::hash
     * @todo   Implement testHash().
     */
    public function testHash() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Bip_Utility_Crypt::is_legacy_hash
     * @todo   Implement testIs_legacy_hash().
     */
    public function testIs_legacy_hash() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Bip_Utility_Crypt::check
     * @todo   Implement testCheck().
     */
    public function testCheck() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Bip_Utility_Crypt::aesEncrypt
     * @todo   Implement testAesEncrypt().
     */
    public function testAesEncrypt() {
        $crypt = Bip_Utility_Crypt::aesEncrypt('password');
        $this->assertTrue((bool) preg_match('!^(?:[A-Za-z0-9+/]{4})*(?:[A-Za-z0-9+/]{2}==|[A-Za-z0-9+/]{3}=)?$!', $crypt));
    }

    /**
     * @covers Bip_Utility_Crypt::aesDecrypt
     * @todo   Implement testAesDecrypt().
     */
    public function testAesDecrypt() {
        $plain = 'password';
        $crypt = Bip_Utility_Crypt::aesEncrypt($plain);       
        $decrypted = Bip_Utility_Crypt::aesDecrypt($crypt);
        $this->assertTrue($plain === $decrypted);
    }

    /**
     * Test we decrypt a password correctly for our in-use block size
     * (tests padding)
     *
     * @covers Bip_Utility_Crypt::aesDecrypt
     * @todo   Implement testAesDecrypt().
     */
    public function testAesDecryptMaxBlock() {
        $plain = '98765432198765432198765432198765';
        $crypt = Bip_Utility_Crypt::aesEncrypt($plain);
        $decrypted = Bip_Utility_Crypt::aesDecrypt($crypt);
        $this->assertTrue($plain === $decrypted);
    }
}