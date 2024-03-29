<?php namespace Multiverse\Notazz;

class Resource 
{
    /**
     * @return array
     */
    public function toArray() : array
    {
        $array = [];
        foreach ($this as $key => $value) {
            if ($value === null) {
                continue;
            }
            $array[$key] = $value;
        }
        return $array;
    }
}