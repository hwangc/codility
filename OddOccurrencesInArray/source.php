// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {

    // compare the value of the current position with the other values higher than the current position
    $isOdd = true;

    // check if there is an element which contains the same value
    $lenOfA = count($A);
    $i = 0;

    for($i; $i < $lenOfA-1; $i++) {

        $val1 = $A[$i];

        for($j = $i+1; $j < $lenOfA; $j++) {

            $val2 = $A[$j];

            if($val1 == $val2) {
                $isOdd = false;
                $A = array_values(array_diff($A,[$val1]));
                $i = -1;
                $lenOfA = count($A);
                break;
            }

        }
    }

    return $A[0];
}
