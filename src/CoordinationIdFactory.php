<?php
/**
 * This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://www.wtfpl.net/ for more details.
 */

namespace ledgr\id;

/**
 * Create coordination id objects from raw id string
 *
 * @author Hannes Forsgård <hannes.forsgard@fripost.org>
 */
class CoordinationIdFactory extends IdFactory
{
    use Component\Factory;

    /**
     * Instantiate ID object
     *
     * @param  string $rawId Raw id string
     * @return CoordinationId
     */
    protected function createNewInstance($rawId)
    {
        return new CoordinationId($rawId);
    }
}
