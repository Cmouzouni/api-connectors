<?php
/**
 * UserPreferences
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BitMEX API
 *
 * ## REST API for the BitMEX Trading Platform  [Changelog](/app/apiChangelog)    #### Getting Started   ##### Fetching Data  All REST endpoints are documented below. You can try out any query right from this interface.  Most table queries accept `count`, `start`, and `reverse` params. Set `reverse=true` to get rows newest-first.  Additional documentation regarding filters, timestamps, and authentication is available in [the main API documentation](https://www.bitmex.com/app/restAPI).  *All* table data is available via the [Websocket](/app/wsAPI). We highly recommend using the socket if you want to have the quickest possible data without being subject to ratelimits.  ##### Return Types  By default, all data is returned as JSON. Send `?_format=csv` to get CSV data or `?_format=xml` to get XML data.  ##### Trade Data Queries  *This is only a small subset of what is available, to get you started.*  Fill in the parameters and click the `Try it out!` button to try any of these queries.  * [Pricing Data](#!/Quote/Quote_get)  * [Trade Data](#!/Trade/Trade_get)  * [OrderBook Data](#!/OrderBook/OrderBook_getL2)  * [Settlement Data](#!/Settlement/Settlement_get)  * [Exchange Statistics](#!/Stats/Stats_history)  Every function of the BitMEX.com platform is exposed here and documented. Many more functions are available.  -  ## All API Endpoints  Click to expand a section.
 *
 * OpenAPI spec version: 1.2.0
 * Contact: support@bitmex.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * UserPreferences Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserPreferences implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserPreferences';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'animations_enabled' => 'bool',
        'announcements_last_seen' => '\DateTime',
        'chat_channel_id' => 'double',
        'color_theme' => 'string',
        'currency' => 'string',
        'debug' => 'bool',
        'disable_emails' => 'string[]',
        'hide_confirm_dialogs' => 'string[]',
        'hide_connection_modal' => 'bool',
        'hide_from_leaderboard' => 'bool',
        'hide_name_from_leaderboard' => 'bool',
        'hide_notifications' => 'string[]',
        'locale' => 'string',
        'msgs_seen' => 'string[]',
        'order_book_binning' => '\Swagger\Client\Model\XAny',
        'order_book_type' => 'string',
        'order_controls_plus_minus' => 'bool',
        'sounds' => 'string[]',
        'strict_ip_check' => 'bool',
        'strict_timeout' => 'bool',
        'ticker_group' => 'string',
        'ticker_pinned' => 'bool',
        'trade_layout' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'animations_enabled' => 'animationsEnabled',
        'announcements_last_seen' => 'announcementsLastSeen',
        'chat_channel_id' => 'chatChannelID',
        'color_theme' => 'colorTheme',
        'currency' => 'currency',
        'debug' => 'debug',
        'disable_emails' => 'disableEmails',
        'hide_confirm_dialogs' => 'hideConfirmDialogs',
        'hide_connection_modal' => 'hideConnectionModal',
        'hide_from_leaderboard' => 'hideFromLeaderboard',
        'hide_name_from_leaderboard' => 'hideNameFromLeaderboard',
        'hide_notifications' => 'hideNotifications',
        'locale' => 'locale',
        'msgs_seen' => 'msgsSeen',
        'order_book_binning' => 'orderBookBinning',
        'order_book_type' => 'orderBookType',
        'order_controls_plus_minus' => 'orderControlsPlusMinus',
        'sounds' => 'sounds',
        'strict_ip_check' => 'strictIPCheck',
        'strict_timeout' => 'strictTimeout',
        'ticker_group' => 'tickerGroup',
        'ticker_pinned' => 'tickerPinned',
        'trade_layout' => 'tradeLayout'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'animations_enabled' => 'setAnimationsEnabled',
        'announcements_last_seen' => 'setAnnouncementsLastSeen',
        'chat_channel_id' => 'setChatChannelId',
        'color_theme' => 'setColorTheme',
        'currency' => 'setCurrency',
        'debug' => 'setDebug',
        'disable_emails' => 'setDisableEmails',
        'hide_confirm_dialogs' => 'setHideConfirmDialogs',
        'hide_connection_modal' => 'setHideConnectionModal',
        'hide_from_leaderboard' => 'setHideFromLeaderboard',
        'hide_name_from_leaderboard' => 'setHideNameFromLeaderboard',
        'hide_notifications' => 'setHideNotifications',
        'locale' => 'setLocale',
        'msgs_seen' => 'setMsgsSeen',
        'order_book_binning' => 'setOrderBookBinning',
        'order_book_type' => 'setOrderBookType',
        'order_controls_plus_minus' => 'setOrderControlsPlusMinus',
        'sounds' => 'setSounds',
        'strict_ip_check' => 'setStrictIpCheck',
        'strict_timeout' => 'setStrictTimeout',
        'ticker_group' => 'setTickerGroup',
        'ticker_pinned' => 'setTickerPinned',
        'trade_layout' => 'setTradeLayout'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'animations_enabled' => 'getAnimationsEnabled',
        'announcements_last_seen' => 'getAnnouncementsLastSeen',
        'chat_channel_id' => 'getChatChannelId',
        'color_theme' => 'getColorTheme',
        'currency' => 'getCurrency',
        'debug' => 'getDebug',
        'disable_emails' => 'getDisableEmails',
        'hide_confirm_dialogs' => 'getHideConfirmDialogs',
        'hide_connection_modal' => 'getHideConnectionModal',
        'hide_from_leaderboard' => 'getHideFromLeaderboard',
        'hide_name_from_leaderboard' => 'getHideNameFromLeaderboard',
        'hide_notifications' => 'getHideNotifications',
        'locale' => 'getLocale',
        'msgs_seen' => 'getMsgsSeen',
        'order_book_binning' => 'getOrderBookBinning',
        'order_book_type' => 'getOrderBookType',
        'order_controls_plus_minus' => 'getOrderControlsPlusMinus',
        'sounds' => 'getSounds',
        'strict_ip_check' => 'getStrictIpCheck',
        'strict_timeout' => 'getStrictTimeout',
        'ticker_group' => 'getTickerGroup',
        'ticker_pinned' => 'getTickerPinned',
        'trade_layout' => 'getTradeLayout'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['animations_enabled'] = isset($data['animations_enabled']) ? $data['animations_enabled'] : null;
        $this->container['announcements_last_seen'] = isset($data['announcements_last_seen']) ? $data['announcements_last_seen'] : null;
        $this->container['chat_channel_id'] = isset($data['chat_channel_id']) ? $data['chat_channel_id'] : null;
        $this->container['color_theme'] = isset($data['color_theme']) ? $data['color_theme'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['debug'] = isset($data['debug']) ? $data['debug'] : null;
        $this->container['disable_emails'] = isset($data['disable_emails']) ? $data['disable_emails'] : null;
        $this->container['hide_confirm_dialogs'] = isset($data['hide_confirm_dialogs']) ? $data['hide_confirm_dialogs'] : null;
        $this->container['hide_connection_modal'] = isset($data['hide_connection_modal']) ? $data['hide_connection_modal'] : null;
        $this->container['hide_from_leaderboard'] = isset($data['hide_from_leaderboard']) ? $data['hide_from_leaderboard'] : false;
        $this->container['hide_name_from_leaderboard'] = isset($data['hide_name_from_leaderboard']) ? $data['hide_name_from_leaderboard'] : true;
        $this->container['hide_notifications'] = isset($data['hide_notifications']) ? $data['hide_notifications'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : 'en-US';
        $this->container['msgs_seen'] = isset($data['msgs_seen']) ? $data['msgs_seen'] : null;
        $this->container['order_book_binning'] = isset($data['order_book_binning']) ? $data['order_book_binning'] : null;
        $this->container['order_book_type'] = isset($data['order_book_type']) ? $data['order_book_type'] : null;
        $this->container['order_controls_plus_minus'] = isset($data['order_controls_plus_minus']) ? $data['order_controls_plus_minus'] : null;
        $this->container['sounds'] = isset($data['sounds']) ? $data['sounds'] : null;
        $this->container['strict_ip_check'] = isset($data['strict_ip_check']) ? $data['strict_ip_check'] : false;
        $this->container['strict_timeout'] = isset($data['strict_timeout']) ? $data['strict_timeout'] : true;
        $this->container['ticker_group'] = isset($data['ticker_group']) ? $data['ticker_group'] : null;
        $this->container['ticker_pinned'] = isset($data['ticker_pinned']) ? $data['ticker_pinned'] : null;
        $this->container['trade_layout'] = isset($data['trade_layout']) ? $data['trade_layout'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets animations_enabled
     * @return bool
     */
    public function getAnimationsEnabled()
    {
        return $this->container['animations_enabled'];
    }

    /**
     * Sets animations_enabled
     * @param bool $animations_enabled
     * @return $this
     */
    public function setAnimationsEnabled($animations_enabled)
    {
        $this->container['animations_enabled'] = $animations_enabled;

        return $this;
    }

    /**
     * Gets announcements_last_seen
     * @return \DateTime
     */
    public function getAnnouncementsLastSeen()
    {
        return $this->container['announcements_last_seen'];
    }

    /**
     * Sets announcements_last_seen
     * @param \DateTime $announcements_last_seen
     * @return $this
     */
    public function setAnnouncementsLastSeen($announcements_last_seen)
    {
        $this->container['announcements_last_seen'] = $announcements_last_seen;

        return $this;
    }

    /**
     * Gets chat_channel_id
     * @return double
     */
    public function getChatChannelId()
    {
        return $this->container['chat_channel_id'];
    }

    /**
     * Sets chat_channel_id
     * @param double $chat_channel_id
     * @return $this
     */
    public function setChatChannelId($chat_channel_id)
    {
        $this->container['chat_channel_id'] = $chat_channel_id;

        return $this;
    }

    /**
     * Gets color_theme
     * @return string
     */
    public function getColorTheme()
    {
        return $this->container['color_theme'];
    }

    /**
     * Sets color_theme
     * @param string $color_theme
     * @return $this
     */
    public function setColorTheme($color_theme)
    {
        $this->container['color_theme'] = $color_theme;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets debug
     * @return bool
     */
    public function getDebug()
    {
        return $this->container['debug'];
    }

    /**
     * Sets debug
     * @param bool $debug
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->container['debug'] = $debug;

        return $this;
    }

    /**
     * Gets disable_emails
     * @return string[]
     */
    public function getDisableEmails()
    {
        return $this->container['disable_emails'];
    }

    /**
     * Sets disable_emails
     * @param string[] $disable_emails
     * @return $this
     */
    public function setDisableEmails($disable_emails)
    {
        $this->container['disable_emails'] = $disable_emails;

        return $this;
    }

    /**
     * Gets hide_confirm_dialogs
     * @return string[]
     */
    public function getHideConfirmDialogs()
    {
        return $this->container['hide_confirm_dialogs'];
    }

    /**
     * Sets hide_confirm_dialogs
     * @param string[] $hide_confirm_dialogs
     * @return $this
     */
    public function setHideConfirmDialogs($hide_confirm_dialogs)
    {
        $this->container['hide_confirm_dialogs'] = $hide_confirm_dialogs;

        return $this;
    }

    /**
     * Gets hide_connection_modal
     * @return bool
     */
    public function getHideConnectionModal()
    {
        return $this->container['hide_connection_modal'];
    }

    /**
     * Sets hide_connection_modal
     * @param bool $hide_connection_modal
     * @return $this
     */
    public function setHideConnectionModal($hide_connection_modal)
    {
        $this->container['hide_connection_modal'] = $hide_connection_modal;

        return $this;
    }

    /**
     * Gets hide_from_leaderboard
     * @return bool
     */
    public function getHideFromLeaderboard()
    {
        return $this->container['hide_from_leaderboard'];
    }

    /**
     * Sets hide_from_leaderboard
     * @param bool $hide_from_leaderboard
     * @return $this
     */
    public function setHideFromLeaderboard($hide_from_leaderboard)
    {
        $this->container['hide_from_leaderboard'] = $hide_from_leaderboard;

        return $this;
    }

    /**
     * Gets hide_name_from_leaderboard
     * @return bool
     */
    public function getHideNameFromLeaderboard()
    {
        return $this->container['hide_name_from_leaderboard'];
    }

    /**
     * Sets hide_name_from_leaderboard
     * @param bool $hide_name_from_leaderboard
     * @return $this
     */
    public function setHideNameFromLeaderboard($hide_name_from_leaderboard)
    {
        $this->container['hide_name_from_leaderboard'] = $hide_name_from_leaderboard;

        return $this;
    }

    /**
     * Gets hide_notifications
     * @return string[]
     */
    public function getHideNotifications()
    {
        return $this->container['hide_notifications'];
    }

    /**
     * Sets hide_notifications
     * @param string[] $hide_notifications
     * @return $this
     */
    public function setHideNotifications($hide_notifications)
    {
        $this->container['hide_notifications'] = $hide_notifications;

        return $this;
    }

    /**
     * Gets locale
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets msgs_seen
     * @return string[]
     */
    public function getMsgsSeen()
    {
        return $this->container['msgs_seen'];
    }

    /**
     * Sets msgs_seen
     * @param string[] $msgs_seen
     * @return $this
     */
    public function setMsgsSeen($msgs_seen)
    {
        $this->container['msgs_seen'] = $msgs_seen;

        return $this;
    }

    /**
     * Gets order_book_binning
     * @return \Swagger\Client\Model\XAny
     */
    public function getOrderBookBinning()
    {
        return $this->container['order_book_binning'];
    }

    /**
     * Sets order_book_binning
     * @param \Swagger\Client\Model\XAny $order_book_binning
     * @return $this
     */
    public function setOrderBookBinning($order_book_binning)
    {
        $this->container['order_book_binning'] = $order_book_binning;

        return $this;
    }

    /**
     * Gets order_book_type
     * @return string
     */
    public function getOrderBookType()
    {
        return $this->container['order_book_type'];
    }

    /**
     * Sets order_book_type
     * @param string $order_book_type
     * @return $this
     */
    public function setOrderBookType($order_book_type)
    {
        $this->container['order_book_type'] = $order_book_type;

        return $this;
    }

    /**
     * Gets order_controls_plus_minus
     * @return bool
     */
    public function getOrderControlsPlusMinus()
    {
        return $this->container['order_controls_plus_minus'];
    }

    /**
     * Sets order_controls_plus_minus
     * @param bool $order_controls_plus_minus
     * @return $this
     */
    public function setOrderControlsPlusMinus($order_controls_plus_minus)
    {
        $this->container['order_controls_plus_minus'] = $order_controls_plus_minus;

        return $this;
    }

    /**
     * Gets sounds
     * @return string[]
     */
    public function getSounds()
    {
        return $this->container['sounds'];
    }

    /**
     * Sets sounds
     * @param string[] $sounds
     * @return $this
     */
    public function setSounds($sounds)
    {
        $this->container['sounds'] = $sounds;

        return $this;
    }

    /**
     * Gets strict_ip_check
     * @return bool
     */
    public function getStrictIpCheck()
    {
        return $this->container['strict_ip_check'];
    }

    /**
     * Sets strict_ip_check
     * @param bool $strict_ip_check
     * @return $this
     */
    public function setStrictIpCheck($strict_ip_check)
    {
        $this->container['strict_ip_check'] = $strict_ip_check;

        return $this;
    }

    /**
     * Gets strict_timeout
     * @return bool
     */
    public function getStrictTimeout()
    {
        return $this->container['strict_timeout'];
    }

    /**
     * Sets strict_timeout
     * @param bool $strict_timeout
     * @return $this
     */
    public function setStrictTimeout($strict_timeout)
    {
        $this->container['strict_timeout'] = $strict_timeout;

        return $this;
    }

    /**
     * Gets ticker_group
     * @return string
     */
    public function getTickerGroup()
    {
        return $this->container['ticker_group'];
    }

    /**
     * Sets ticker_group
     * @param string $ticker_group
     * @return $this
     */
    public function setTickerGroup($ticker_group)
    {
        $this->container['ticker_group'] = $ticker_group;

        return $this;
    }

    /**
     * Gets ticker_pinned
     * @return bool
     */
    public function getTickerPinned()
    {
        return $this->container['ticker_pinned'];
    }

    /**
     * Sets ticker_pinned
     * @param bool $ticker_pinned
     * @return $this
     */
    public function setTickerPinned($ticker_pinned)
    {
        $this->container['ticker_pinned'] = $ticker_pinned;

        return $this;
    }

    /**
     * Gets trade_layout
     * @return string
     */
    public function getTradeLayout()
    {
        return $this->container['trade_layout'];
    }

    /**
     * Sets trade_layout
     * @param string $trade_layout
     * @return $this
     */
    public function setTradeLayout($trade_layout)
    {
        $this->container['trade_layout'] = $trade_layout;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

