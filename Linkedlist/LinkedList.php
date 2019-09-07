<?php
    namespace Linkedlist;
    use Linkedlist\Node;
    final class LinkedList{
        public $head;
        public function __construct()
        {
            $this->head = null;
        }
        public function sizeofLinkedList(){
            $temp = $this->head;
            $count=0;
            while($temp){
                $temp = $temp->next;
                $count++;
            }
            return $count;
        }
        public function addFirst($value){
            if (is_null($this->head)){
               $this->head = new Node($this->head,$value);
            }
            else{
                $this->head = new Node($value);
            }

        }
        public function addLast($value){
            if (is_null($this->head)){
                $this->head = new Node($value);
            }
            else{
                $current = $this->head;
                while($current){
                    $current = $current->next;

                }
                $current->next = new Node($value);
            }
        }
        
    }
?>