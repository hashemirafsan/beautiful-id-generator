<?php
/***************************************
 * Created by PhpStorm.
 * Author: Dasun Tharanga ( @dasundev )
 * Email: hello@dasun.dev
 * Date: 9/22/2020
 * Time: 11:40 AM
 ***************************************/


namespace Dasundev\BeautifulIdGenerator;


class OrderIdGenerator
{
    public function generate(): string
    {
        return strtoupper('ORDER'.date('Ymd').uniqid());
    }
}
