<?php
/**
 * 
 *
 * All rights reserved.
 * 
 * @author Falaleev Maxim
 * @email max@studio107.ru
 * @version 1.0
 * @company Studio107
 * @site http://studio107.ru
 * @date 06/07/14.07.2014 18:23
 */

namespace Mindy\Helper;


class Arr 
{
    /**
     * @param array $data
     * @param $by int
     * @return array
     */
    public static function splitBy(array $data, $by)
    {
        $cnt = count($data);
        $result = [];
        $tmp = [];
        foreach($data as $item) {
            $tmp[] = $item;
            $limit = ($cnt - count($result) * $by) >= $by;
            if($limit && count($tmp) == $by) {
                $result[] = $tmp;
                $tmp = [];
            }
        }
        if(!empty($tmp)) {
            $result[] = $tmp;
        }
        unset($tmp);
        return $result;
    }
}