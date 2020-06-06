<?php

class ArrayWorker {

    protected $array = [];

    protected function fill() {

        for ($i = 0; $i <= 40; $i++) {
        $rand = mt_rand(0, 100);
        array_push($this->array, $rand);

        }
        print_r($this->array);
        echo "<br/><br/>";
        return $this->array;
    }

    protected function reindex() {

        $max_val = max($this->array);
        $min_val = min($this->array);
        $max_key = array_search($max_val, $this->array);
        $min_key = array_search($min_val, $this->array);
        $this->array[$min_key] = $max_val;
        $this->array[$max_key] = $min_val;

        print_r($this->array);
        echo "<br/><br/>";
        return;
    }

    public function dump() {
        $this->fill();
        $this->reindex();
        $max_val = max($this->array);
        $min_val = min($this->array);
        $max_key = array_search($max_val, $this->array);
        $min_key = array_search($min_val, $this->array);
        $summ = $max_key + $min_key;
        print_r($summ);
        return $summ;
    }

}

$instance = new ArrayWorker();

$instance->dump();



