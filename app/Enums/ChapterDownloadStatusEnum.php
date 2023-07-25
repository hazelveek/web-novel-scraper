<?php
/**
 * Created by PhpStorm.
 * User: victoriaetim
 * Date: 7/23/23
 * Time: 6:17 PM
 */

namespace App\Enums;

enum ChapterDownloadStatusEnum:string
{
    case PENDING = 'pending';
    case IN_PROGRESS = 'in-progress';
    case COMPLETED = 'completed';
}