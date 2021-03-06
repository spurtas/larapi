<?php

namespace LarAPI\Repositories\Auth;

use Illuminate\Database\Eloquent\Model;
use LarAPI\Core\Repositories\BaseRepository;
use LarAPI\Models\Auth\User;

class UserRepository extends BaseRepository
{
    /**
     * Gets the base model for the repository
     *
     * @return Model
     */
    public function getModel(): Model
    {
        return new User();
    }
}
