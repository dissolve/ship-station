<?php

namespace MichaelB\ShipStation\Endpoints;



class Fulfillments extends BaseEndpoint
{
    protected $endpoint = '/fulfillments/';

    /**
     * Get a listing of fulfillments
     * @param array $query
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function listFulfillments($query = [])
    {
        return $this->get('', ['query' => $query]);
    }
}
