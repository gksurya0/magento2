<?php
/**
 * Neo Software.
 *
 * @category  Neo
 *
 * @author    Neo
 * @copyright Copyright (c) 2010-2016 Neo Software Private Limited (https://Neo.com)
 * @license   https://store.Neo.com/license.html
 */

namespace Neo\TestApi\Api\Data;

/**
 * Marketplace product interface.
 *
 * @api
 */
interface TestApiInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ENTITY_ID = 'entity_id';

    const TITLE = 'title';

    const DESC = 'description';
    /**#@-*/

    /**
     * Get ID.
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set ID.
     *
     * @param int $id
     *
     * @return \Neo\Marketplace\Api\Data\ProductInterface
     */
    public function setId($id);

    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return \Neo\Marketplace\Api\Data\ProductInterface
     */
    public function setTitle($title);

    /**
     * Get desc.
     *
     * @return string|null
     */
    public function getDescription();

    /**
     * Set Desc.
     *
     * @param string $desc
     *
     * @return \Neo\Marketplace\Api\Data\ProductInterface
     */
    public function setDescription($desc);
}