<?php

class Message {

    private string  $type; 
    private string  $msg;
    private bool    $shown; 

    public function __construct(string $type, string $msg, bool $shown = false)
    {
        $this->type  = $type; 
        $this->msg   = $msg; 
        $this->shown = $shown; 
    }

    ##### GETTERS #####

    public function get_type()
    {
        return $this->type; 
    }

    public function get_msg()
    {
        return $this->msg; 
    }
     

    public function get_shown()
    {
        return $this->shown; 
    }

    ##### SETTERS #####

    public function set_shown(bool $is_shown)
    {
        $this->shown = $is_shown; 
    }
}
