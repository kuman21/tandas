<?php

namespace App\Helpers;

trait AssignDate
{
    /**
     * Get a new factory instance for the model.
     *
     * @param  date  $start
     * @param  int   $periodicity
     * @return date
     */
    public static function assignDate($start, $periodicity)
    {
        $datePayment = strtotime('+'.$periodicity.' days', strtotime($start));
        return date('Y-m-d', $datePayment);
    }
}
