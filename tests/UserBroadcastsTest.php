<?php

    class UserBroadcastsTest extends BaseTest
    {

        /**
         * Test that fetching details for an invalid broadcast
         * id returns an empty set of results
         *
         */
        public function testGetInvalidUserBroadcastIdReturnsEmpty() {
            $broadcasts = new \Cjhbtn\Periscopr\Requests\UserBroadcasts("-1");
            $response = $this->client->execute($broadcasts);
            $this->assertEquals(200, $response->getStatusCode());
            $this->assertEmpty($response->results);
        }

        /**
         * @todo Need to find a way of testing live broadcast ID's for validity
         */
    }
