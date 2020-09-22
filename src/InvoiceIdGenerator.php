<?php
/***************************************
 * Created by PhpStorm.
 * Author: Dasun Tharanga ( @dasundev )
 * Email: hello@dasun.dev
 * Date: 9/22/2020
 * Time: 11:35 AM
 ***************************************/


namespace Dasundev\BeautifulIdGenerator;


class InvoiceIdGenerator
{
    public function generate(): string
    {
        return strtoupper('INVOICE'.date('Ymd').uniqid());
    }
}
