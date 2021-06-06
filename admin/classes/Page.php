<?php

class Page
{

    protected static $db            = 'pages';
    protected static $db_id         = 'id';
    protected static $db_page_name  = 'name';
    protected static $db_title      = 'title';
    protected static $db_sub_title  = 'sub_title';
    protected static $db_image      = 'image';

    private string $page_name;
    private string $page_title;
    private string $page_sub_title;
    private string $page_image;

    function __construct(
        string $page_name
    ) {
        $page_data = Query::query_where_string(self::$db, $page_name, 1);
        ## ToDo - ERROR handling if there is no page.
        $this->page_name        = $page_name;

        $this->page_title       = $page_data[self::$db_title];
        $this->page_sub_title   = $page_data[self::$db_sub_title];
        $this->page_image       = $page_data[self::$db_image];
    }

    ##### GETTERS #####

    public function get_page_name()
    {
        return $this->page_name;
    }

    public function get_title()
    {
        return $this->page_title;
    }

    public function get_sub_title()
    {
        return $this->page_sub_title;
    }

    public function get_image()
    {
        return $this->page_image;
    }

    public function get_image_path()
    {
        return FRONT_IMAGES . DS . $this->get_image();
    }
}
