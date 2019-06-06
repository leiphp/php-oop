<?php
/**
 * Create by PhpStorm
 * User: leixiaotian
 * Date: 2019/6/5 0005
 * Time: 23:49
 */
namespace core\lib;
use core\lib\conf;
class model extends \PDO{
    public function __construct()
    {
        $database = conf::all('database');
        try{
            parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWD']);
        } catch (\PDOException $e){
            p($e->getMessage());
        }

    }
}