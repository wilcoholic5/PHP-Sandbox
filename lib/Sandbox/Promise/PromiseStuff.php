<?php
namespace Sandbox\Promise;

use React\Promise\Deferred;

class PromiseStuff
{
    public function doStuff()
    {
        $deferred = new Deferred();

        getSong(function($val) use ($deferred){
            $i = 2;
            if($i == 1) {
                $deferred->reject("Something broke");
            }
            if ($i == 2) {
                $deferred->resolve("it worked");
            }
        });

        return $deferred->promise();
    }

    public function handlePromise()
    {
        $promise = $this->doStuff();

        $promise->then(
        function ($value) {
            print ($value);
        },
        function ($reason) {
            print $reason;
        },
        function ($update) {
            // Progress notification triggered, do something with $update
        }
    );
    }
}