<?php
/**
 * qcloudapi-sdk-php
 * Author: Wudi <wudi@anchnet.com>
 * Datetime: 01/11/2017
 */

class CVMTest extends TestCase
{

    /** @var \QcloudApi\QcloudApi */
    private $client;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->client = new QcloudApi\QcloudApi(QcloudApi\QcloudApi::MODULE_CVM, $this->profile);
    }

    /**
     * 云服务器
     * 地域列表
     */
    public function testDescribeRegions()
    {
        $ret = $this->client->DescribeRegions();
        var_dump($ret->regionSet);
    }

    /**
     * 可用区列表
     */
    public function testDescribeZones()
    {
        $ret = $this->client->DescribeZones();
        var_dump($ret->zoneSet);
    }

    /**
     * 实例列表
     */
    public function testDescribeInstances()
    {
        $ret = $this->client->DescribeInstances();
        var_dump($ret->instanceSet);
    }

}