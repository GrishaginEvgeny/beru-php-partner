<?php

namespace Yandex\Beru\Partner\Clients;

use Yandex\Beru\Partner\Models\Response\GetRefundResponse;

class RefundClient extends Client
{
    /**
     * Get a refund by ID
     *
     * @see https://yandex.ru/dev/market/partner-api/doc/ru/reference/orders/getReturn
     *
     * @param int|string $campaignId
     * @param int|string $orderId
     * @param int|string $refundId
     * @return GetRefundResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Yandex\Beru\Partner\Exception\PartnerRequestException
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     */
    public function getRefund($campaignId, $orderId, $refundId)
    {
        $resource = 'campaigns/' . $campaignId . '/orders/' . $orderId . '/returns/' . $refundId . '.json';

        $response = $this->sendRequest('GET', $this->getServiceUrl($resource));
        $decodedResponseBody = $this->getDecodedBody($response->getBody());

        return new GetRefundResponse($decodedResponseBody);
    }
}
