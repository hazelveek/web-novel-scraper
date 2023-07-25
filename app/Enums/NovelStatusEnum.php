<?php
/**
 * Created by PhpStorm.
 * User: victoriaetim
 * Date: 7/23/23
 * Time: 5:48 PM
 */

namespace App\Enums;

enum NovelStatusEnum:string
{
    case COMPLETED = 'completed';
    case ONGOING = 'ongoing';
    case DROPPED = 'dropped';
    case HIATUS = 'hiatus';
}