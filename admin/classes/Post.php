<?php

class Post
{

    ##### DB & field names #####

    protected static $db_name = 'posts';
    protected static $db_fields = [
        'id'        => 'id',
        'title'     => 'title',
        'sub_title' => 'sub_title',
        'created'   => 'created',
        'updated'   => 'updated',
        'content'   => 'content',
        'user'      => 'user',
        'user_id'   => 'user_id'
    ];

    ##### Class variables #####

    private int    $id;
    private string $title;
    private string $sub_title;
    private string $created;
    private string $updated;
    private string $content;
    private string $user;
    private string $user_id;

    public function __construct(
        $id,
        $title,
        $sub_title,
        $created,
        $user
    ) {
        $this->id          = $id;
        $this->title       = $title;
        $this->sub_title   = $sub_title;
        $this->created     = $created;
        $this->user        = $user;
    }

    ##### GETTERS #####

    public function get_id()
    {
        return $this->id;
    }

    public function get_title()
    {
        return $this->title ? $this->title : false;
    }

    public function get_sub_title()
    {
        return $this->sub_title;
    }

    public function get_created()
    {
        return $this->created;
    }

    public function get_updated()
    {
        return $this->updated;
    }

    public function get_content()
    {
        return $this->content;
    }

    public function get_user()
    {
        return $this->user;
    }

    public function get_user_id()
    {
        return $this->user_id;
    }

    ##### SETTERS #####

    public function set_id(int $id)
    {
        $this->id = $id;
    }

    public function set_title(string $title)
    {
        $this->title = $title;
    }

    public function set_sub_title(string $sub_title)
    {
        $this->sub_title = $sub_title;
    }

    public function set_created(string $created)
    {
        $this->created = $created;
    }

    public function set_updated(string $updated)
    {
        $this->updated = $updated;
    }

    public function set_content(string $content)
    {
        $this->content = $content;
    }

    public function set_user(string $user)
    {
        $this->user = $user;
    }

    public function set_user_id(int $user_id)
    {
        $this->user_id = $user_id;
    }

    ##### Queries #####

    public static function query_posts_all()
    {
        $posts_arr = Query::query_all(self::$db_name);
        $posts_objects = [];
        foreach ($posts_arr as $post) {
            $post_obj = new self(
                $post[self::$db_fields['id']],
                $post[self::$db_fields['title']],
                $post[self::$db_fields['sub_title']],
                $post[self::$db_fields['created']],
                $post[self::$db_fields['user']]
            );

            array_push($posts_objects, $post_obj);
        }
        return $posts_objects;
    }

    public static function create_post_obj(
        int $id,
        string $title,
        string $sub_title,
        string $created,
        string $user
    ) {
        return new self($id, $title, $sub_title, $created, $user);
    }
}
