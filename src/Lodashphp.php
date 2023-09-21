<?php
namespace Ndrant\Lodashphp;

final class Lodashphp
{
    function sayName($name)
    {
        return 'Halo... ' . $name . ', Welcome to new Library';
    }

    function baseSum($array, $iteratee)
    {
        $result = null;
        $length = count($array);

        for ($index = 0; $index < $length; $index++) {
            $current = $iteratee($array[$index]);
            if ($current !== null) {
                $result = $result === null ? $current : ($result + $current);
            }
        }

        return $result;
    }

    function sumBy($array, $iteratee)
    {
        if ($array && count($array) > 0) {
            $result = baseSum($array, function ($item) use ($iteratee) {
                return $iteratee($item);
            });
            return $result;
        } else {
            return 0;
        }
    }
}