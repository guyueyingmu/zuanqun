<?php

namespace app\user\model;

use think\Db;

class Team
{

    public function addTeamInfo($data)
    {
        return Db::table('zq_team_info')->insert($data);
    }

}
