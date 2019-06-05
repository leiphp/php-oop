<?php
/**
 * Create by PhpStorm
 * User: leixiaotian
 * Date: 2019/6/5 0005
 * Time: 23:49
 */
namespace core\lib;

class model extends \PDO{
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=leiphp';
        $username = 'root';
        $passwd = 'root';
        try{
            parent::__construct($dsn, $username, $passwd);
        } catch (\PDOException $e){
            p($e->getMessage());
        }

    }
}