<?php
/**
 * Created by IntelliJ IDEA.
 * User: Giang
 * Date: 1/13/2017
 * Time: 9:13 PM
 */

namespace App\DesignPattern\Adapter;


class Kindle implements eReaderInterface
{
    public function turnOn()
    {
        var_dump("turn on the kindle fire");
    }

    public function pressNext()
    {
        var_dump("Press a next button");
    }
}