<?php

namespace App\Models;


use DB;

class LogModel
{
    /**
     * Record user activity
     *
     * @access public
     * @param Integer $userid
     * @param Integer $action
     * @return Void
     */
    public function record($userid, $action, $data, $user_id)
    {
        $data = [
            'user_id'       => $userid,
            'action'        => $action,
            'data'          => json_encode($data),
            'created'       => $user_id,
        ];
        
        return DB::table('logs')->insert($data);
    }
    

    /**
    * Get all log data
    *
    * @access public
    * @return Array
    */ 
    public function getAll()
    {
        return DB::table('logs')->get();
    }

    /**
    * Get By User id
    *
    * @access public
    * @param String $userid
    * @return Object
    */ 
    public function getByUser($userid)
    {
        return DB::table('logs')
        ->where('user_id', $userid)
        ->orderBy('id', 'desc')
        ->get();
    }
}