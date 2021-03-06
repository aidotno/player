<?php

/*
 * This file is part of the Blackfire Player package.
 *
 * (c) Fabien Potencier <fabien@blackfire.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Blackfire\Player\Exception;

class ExpectationFailureException extends LogicException
{
    private $results;

    public function __construct($message = null, array $results = [], $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->results = $results;
    }

    public function getResults()
    {
        return $this->results;
    }
}
