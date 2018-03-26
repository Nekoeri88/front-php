<?php

namespace App\Repositories\Eloquent;

use App\Repositories\UserRepositoryInterface;

use App\Models\User;
use Config, Auth, DB;

class UserRepository implements AlbumRepositoryInterface
{
    protected $user;
    public function __construct(PhotoAlbum $user) 
    {

    }
}