<?php
/**
 * Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0.
 */
namespace AWS\CRT\Auth;

use AWS\CRT\NativeResource;

abstract class Signing extends NativeResource {
    static function signRequestAws($signable, $signing_config, $on_complete) {
        return self::$crt->sign_request_aws($signable, $signing_config, $on_complete);
    }
}