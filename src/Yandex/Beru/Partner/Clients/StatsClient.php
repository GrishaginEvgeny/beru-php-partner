<?php

namespace Yandex\Beru\Partner\Clients;

use GuzzleHttp\Exception\GuzzleException;
use Yandex\Beru\Partner\Exception\ExtendedErrorsException;
use Yandex\Beru\Partner\Exception\PartnerRequestException;
use Yandex\Beru\Partner\Models\Response\GetOrdersStats;
use Yandex\Common\Exception\ForbiddenException;
use Yandex\Common\Exception\UnauthorizedException;

class StatsClient extends Client
{
    /**
     * Get report of orders stat by filter
     *
     * @param $campaignId
     * @param array $filter
     *
     * @throws ForbiddenException
     * @throws ExtendedErrorsException
     * @throws PartnerRequestException
     * @throws GuzzleException
     * @throws UnauthorizedException
     */
    public function getOrderStats($campaignId, array $filter = [])
    {
        $resource = 'campaigns/' . $campaignId . '/stats/orders';

        $response = $this->sendRequest(
            'POST',
            $this->getServiceUrl($resource),
            ['json' => $filter]
        );
        $decodedResponseBody = $this->getDecodedBody($response->getBody());

        return new GetOrdersStats($decodedResponseBody);
    }
}