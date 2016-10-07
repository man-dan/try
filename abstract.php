<?php
	abstract class My
    {
        abstract   public function run();
        abstract public function rus();
    }

    class ChildD extends My
    {
        public function run()
        {
            // TODO: Implement run() method.
        }

        public function  myD()
        {

         }
    }

    $myname = new ChildD();
    $myname->my="Den";
    echo $myname->my;
?>