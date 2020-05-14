<?php

namespace Neo\TestApi\Api;

interface TestApiManagementInterface
{
    /**
     * get test Api data.
     *
     * @api
     *
     * @param int $id
     *
     * @return \Neo\TestApi\Api\Data\TestApiInterface
     */
    public function getApiData($id);
}