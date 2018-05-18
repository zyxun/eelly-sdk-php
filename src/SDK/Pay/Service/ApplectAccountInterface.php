<?php
/**
 * Created by PhpStorm.
 * User: heui
 * Date: 2018/5/18
 * Time: 21:30
 */

namespace Eelly\SDK\Pay\Service;


/**
 * Interface ApplectAccountInterface
 * @package Eelly\SDK\Pay\Service
 */
interface ApplectAccountInterface
{
    /**
     * 资金统计数据
     *
     * 
     *
     * @param UidDTO $uidDTO
     * @return array
     *
     * @author hehui<hehui@eelly.net>
     */
    public function statistics(UidDTO $uidDTO):array;
}