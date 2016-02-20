<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class UserBroadcasts
 *
 * Returns broadcast details for an array of given broadcast IDs.
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class UserBroadcasts extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string   $user_id Periscope User ID
     * @param bool     $all
     */
    public function __construct($user_id,$all = false ) {
        $this->endpoint = 'userBroadcasts';
        $this->parameters = [
            'user_id' => $user_id,
	        'all'     => $all
        ];
        $this->response = "Cjhbtn\\Periscopr\\Responses\\UserBroadcasts";
    }
}