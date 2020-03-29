<?php
/**
 * @package    Neko
 * @subpackage Neko\Storage
 */
namespace Neko\Storage;

/**
 * This file is part of Neko
 *
 * Copyright (c) 2011 Dave Marshall <dave.marshall@atstsolutuions.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Thrown when a request for a lock timesout
 *
 * @author      Dave Marshall <david.marshall@atstsolutions.co.uk>
 */
class LockWaitTimeoutException extends \Exception {}
