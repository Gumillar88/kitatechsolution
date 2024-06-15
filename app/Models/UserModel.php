<?php

/**
 * User data module
 */

namespace App\Models;

use DB;

class UserModel
{
    /**
     * Create new user
     *
     * @access public
     * @param String $fullname
     * @param String $email
     * @param String $password
     * @param String $type
     * @return Integer
     */
    public function create($data)
    {
        return DB::table('users')->insertGetid($data);
    }

    /**
     * Get one user data
     *
     * @access public
     * @param Integer $id
     * @return Object
     */
    public function getOne($id)
    {
        return DB::table('users')->where('id', $id)->first();
    }

    /**
     * Get all user data
     *
     * @access public
     * @return Array
     */
    public function getAll()
    {
        return DB::table('users')->get();
    }

    /**
     * Get user based on their email
     *
     * @access public
     * @param String $email
     * @return Object
     */
    public function getByEmail($email)
    {
        return DB::table('users')->where('email', $email)->first();
    }

    public function getByEmailOrUsername($email)
    {
        $data = DB::table('users')
                ->where('email', $email)
                ->first();
                
        return $data;
    }

    /**
     * Update user data
     *
     * @access public
     * @param Integer $id
     * @param Array $data - formatted user data
     * @return Void
     */
    public function update($id, $data)
    {
        $data['updated'] = time();
        
        DB::table('users')
            ->where('id', $id)
            ->update($data);
    }

    /**
     * Remove user
     *
     * @access public
     * @param Integer $id
     * @return Void
     */
    public function remove($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->delete();
    }

}