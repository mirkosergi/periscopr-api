<?php namespace Cjhbtn\Periscopr\Requests;

class GetFollowerUsers extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $user_id
     */
    public function __construct($user_id) {
        $this->endpoint = 'followers';
        $this->parameters = [
            'user_id' => $user_id
        ];
    }
}