<?php
/**
 * This file is part of the Billbee API package.
 *
 * Copyright 2017 - 2018 by Billbee GmbH
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 *
 * Created by Julian Finkler <julian@mintware.de>
 */

namespace BillbeeDe\BillbeeAPI\Model;

use MintWare\JOM\JsonField;

class Category
{
    /**
     * @var int
     * @JsonField(name="Id", type="int")
     */
    public $id;

    /**
     * @var string
     * @JsonField(name="Name", type="string")
     */
    public $name = '';
}
