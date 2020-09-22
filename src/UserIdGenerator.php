<?php
/***************************************
 * Created by PhpStorm.
 * Author: Dasun Tharanga ( @dasundev )
 * Email: hello@dasun.dev
 * Date: 9/22/2020
 * Time: 11:10 AM
 ***************************************/


namespace Dasundev\BeautifulIdGenerator;


class UserIdGenerator
{
    public function generate($name): string
    {
        return substr($name,0, 1).strtoupper(uniqid());
    }
}
