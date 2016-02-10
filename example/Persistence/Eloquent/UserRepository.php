<?php

/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 7/02/16
 * Time: 17:59.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace NilPortugues\Example\Persistence\Eloquent;

use NilPortugues\Foundation\Infrastructure\Model\Repository\Eloquent\EloquentRepository;

/**
 * Class UserRepository.
 */
class UserRepository extends EloquentRepository
{
    /**
     * Must return the Eloquent Model Fully Qualified Class Name as a string.
     *
     * eg: return User::class
     *
     * @return string
     */
    protected function modelClassName()
    {
        return User::class;
    }
}
