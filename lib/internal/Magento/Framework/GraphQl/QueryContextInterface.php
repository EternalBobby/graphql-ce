<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Framework\GraphQl;

/**
 * Interface QueryContextInterface
 *
 * Query resolver context
 *
 * FIXME: Do we need it? We already have a
 * decoupled implementation: \Magento\Framework\GraphQl\Query\Resolver\ContextInterface
 *
 */
interface QueryContextInterface
{
    /**
     * TBP
     */
    public function getStore();

    /**
     * TBP
     */
    public function getUser();
}
