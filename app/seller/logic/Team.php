<?php

namespace app\seller\logic;

use app\seller\base\Logic;

class Team extends Logic
{

    public function put()
    {
        $data['team_name'] = input('team_name');
        $data['mobile'] = input('chat_info');
        $data['info'] = input('team_info');
        $data['ad'] = input('ad_info');
        $data['posttime'] = time();
        return $this->get('team')->addTeamInfo($data);
    }

}
