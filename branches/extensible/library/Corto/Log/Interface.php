<?php

interface Corto_Log_Interface 
{
    public function setId($id);
    public function err($message);
    public function warn($message);
    public function debug($message);
}