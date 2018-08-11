<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The protocol for the `ListUptimeCheckConfigs` response.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListUptimeCheckConfigsResponse</code>
 */
class ListUptimeCheckConfigsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The returned uptime check configurations.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.UptimeCheckConfig uptime_check_configs = 1;</code>
     */
    private $uptime_check_configs;
    /**
     * This field represents the pagination token to retrieve the next page of
     * results. If the value is empty, it means no further results for the
     * request. To retrieve the next page of results, the value of the
     * next_page_token is passed to the subsequent List method call (in the
     * request message's page_token field).
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Monitoring\V3\UptimeService::initOnce();
        parent::__construct();
    }

    /**
     * The returned uptime check configurations.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.UptimeCheckConfig uptime_check_configs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUptimeCheckConfigs()
    {
        return $this->uptime_check_configs;
    }

    /**
     * The returned uptime check configurations.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.UptimeCheckConfig uptime_check_configs = 1;</code>
     * @param \Google\Cloud\Monitoring\V3\UptimeCheckConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUptimeCheckConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\UptimeCheckConfig::class);
        $this->uptime_check_configs = $arr;

        return $this;
    }

    /**
     * This field represents the pagination token to retrieve the next page of
     * results. If the value is empty, it means no further results for the
     * request. To retrieve the next page of results, the value of the
     * next_page_token is passed to the subsequent List method call (in the
     * request message's page_token field).
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * This field represents the pagination token to retrieve the next page of
     * results. If the value is empty, it means no further results for the
     * request. To retrieve the next page of results, the value of the
     * next_page_token is passed to the subsequent List method call (in the
     * request message's page_token field).
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

