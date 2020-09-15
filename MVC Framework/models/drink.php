<?php
class Post {
    public $id;
    public $name;

    public function __construct($id, $name) {
        $this->id      = $id;
        $this->name  = $name;
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM drinks');

        foreach ($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['name']);
        }

        return $list;
    }

    public static function find($id) {
        $db = Db::getInstance();
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM drinks WHERE id = :id');
        $req->execute(array('id' => $id));
        $post = $req->fetch();

        return new Post($post['id'], $post['name']);
    }
}
