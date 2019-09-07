<?php

    namespace Linkedlist;

    final class Node{
        public $next;
        public $data;
        public function __construct(? self $next=null, $data)
        {
            $this->next = $next;
            $this->data = $data;
        }
    }
?>