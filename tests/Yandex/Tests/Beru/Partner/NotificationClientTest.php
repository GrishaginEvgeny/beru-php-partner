<?php

namespace Beru\Partner;

use Yandex\Beru\Partner\Clients\NotificationClient;
use Yandex\Tests\TestCase;

class NotificationClientTest extends TestCase
{
    protected $fixturesFolder = 'fixtures';

    public function testPing()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/pingNotification.json');
        $jsonObj = json_decode($json);

        $client = new NotificationClient();
        $ping = $client->ping($jsonObj);

        $this->assertEquals(
            $jsonObj->notificationType,
            $ping->getNotificationType()
        );

        $this->assertEquals(
            $jsonObj->time,
            $ping->getTime()
        );
    }

    public function testCreated()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/orderCreatedNotification.json');
        $jsonObj = json_decode($json);

        $client = new NotificationClient();
        $created = $client->orderCreated($jsonObj);

        $this->assertEquals(
            $jsonObj->notificationType,
            $created->getNotificationType()
        );

        $this->assertEquals(
            $jsonObj->createdAt,
            $created->getCreatedAt()
        );

        $this->assertEquals(
            $jsonObj->orderId,
            $created->getOrderId()
        );

        $this->assertEquals(
            $jsonObj->campaignId,
            $created->getCampaignId()
        );

        $this->assertEquals(
            $jsonObj->items[0]->count,
            $created->getItems()->getAll()[0]->getCount()
        );

        $this->assertEquals(
            $jsonObj->items[0]->offerId,
            $created->getItems()->getAll()[0]->getOfferId()
        );

        $this->assertEquals(
            $jsonObj->items[0]->count,
            $created->getItems()->getAll()[1]->getCount()
        );

        $this->assertEquals(
            $jsonObj->items[0]->offerId,
            $created->getItems()->getAll()[1]->getOfferId()
        );
    }

    public function testUpdated()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/orderStatusUpdatedNotification.json');
        $jsonObj = json_decode($json);

        $client = new NotificationClient();
        $updated = $client->orderStatusUpdate($jsonObj);

        $this->assertEquals(
            $jsonObj->notificationType,
            $updated->getNotificationType()
        );

        $this->assertEquals(
            $jsonObj->updatedAt,
            $updated->getUpdatedAt()
        );

        $this->assertEquals(
            $jsonObj->orderId,
            $updated->getOrderId()
        );

        $this->assertEquals(
            $jsonObj->campaignId,
            $updated->getCampaignId()
        );

        $this->assertEquals(
            $jsonObj->status,
            $updated->getStatus()
        );

        $this->assertEquals(
            $jsonObj->substatus,
            $updated->getSubstatus()
        );
    }

    public function testCancelled()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/orderCancelledNotification.json');
        $jsonObj = json_decode($json);

        $client = new NotificationClient();
        $cancelled = $client->orderCancelled($jsonObj);

        $this->assertEquals(
            $jsonObj->notificationType,
            $cancelled->getNotificationType()
        );

        $this->assertEquals(
            $jsonObj->cancelledAt,
            $cancelled->getCancelledAt()
        );

        $this->assertEquals(
            $jsonObj->orderId,
            $cancelled->getOrderId()
        );

        $this->assertEquals(
            $jsonObj->campaignId,
            $cancelled->getCampaignId()
        );

        $this->assertEquals(
            $jsonObj->items[0]->count,
            $cancelled->getItems()->getAll()[0]->getCount()
        );

        $this->assertEquals(
            $jsonObj->items[0]->offerId,
            $cancelled->getItems()->getAll()[0]->getOfferId()
        );
    }

    public function testReturn()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/orderReturnCreatedNotification.json');
        $jsonObj = json_decode($json);

        $client = new NotificationClient();
        $returned = $client->orderReturned($jsonObj);

        $this->assertEquals(
            $jsonObj->notificationType,
            $returned->getNotificationType()
        );

        $this->assertEquals(
            $jsonObj->createdAt,
            $returned->getCreatedAt()
        );

        $this->assertEquals(
            $jsonObj->orderId,
            $returned->getOrderId()
        );

        $this->assertEquals(
            $jsonObj->campaignId,
            $returned->getCampaignId()
        );

        $this->assertEquals(
            $jsonObj->items[0]->count,
            $returned->getItems()->getAll()[0]->getCount()
        );

        $this->assertEquals(
            $jsonObj->items[0]->offerId,
            $returned->getItems()->getAll()[0]->getOfferId()
        );
    }
}
