<?php



class Category
{
    public $type;
    public $icon;

    public function __construct(String $type)
    {
        $this->type = $type;
    }
}
