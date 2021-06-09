<?php

namespace App\Observers;

use App\Models\{Saving,Number};
use App\Helpers\AssignDate;

class SavingObserver
{
    use AssignDate;

    /**
     * Handle the Saving "created" event.
     *
     * @param  \App\Models\Saving  $saving
     * @return void
     */
    public function created(Saving $saving)
    {
        for ($i = 0; $i < $saving->numbers; $i++) {
            $number = Number::create([
                'saving_id' => $saving->id,
                'date_payment' => ($count === 0)
                    ? $saving->start
                    : $saving::assignDate($number->date_payment, $saving->periodicity)
            ]);
        }
    }

    /**
     * Handle the Saving "updated" event.
     *
     * @param  \App\Models\Saving  $saving
     * @return void
     */
    public function updated(Saving $saving)
    {
        $saving->numbers->delete();

        for ($i = 0; $i < $saving->numbers; $i++) {
            $number = Number::create([
                'saving_id' => $saving->id,
                'date_payment' => ($count === 0)
                    ? $saving->start
                    : $saving::assignDate($number->date_payment, $saving->periodicity)
            ]);
        }
    }

    /**
     * Handle the Saving "deleted" event.
     *
     * @param  \App\Models\Saving  $saving
     * @return void
     */
    public function deleted(Saving $saving)
    {
        $saving->numbers->delete();
    }
}
