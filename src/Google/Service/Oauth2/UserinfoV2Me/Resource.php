<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Oauth2\UserinfoV2Me;

use Google\Service;
use Google\Client;
use Google\Service\Resource as Re;
use Google\Collection;
use Google\Model;

/**
 * The "me" collection of methods.
 * Typical usage is:
 *  <code>
 *   $oauth2Service = new Google\Service\Oauth2(...);
 *   $me = $oauth2Service->me;
 *  </code>
 */
class Resource extends Re
{

  /**
   * (me.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Oauth2_Userinfoplus
   */
  public function get($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google\Service\Oauth2\Userinfoplus");
  }
}