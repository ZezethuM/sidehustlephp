<?php

    $age = 10;
    $PVC = true;
    $ward = 020;

    if($age >= 18 && $PVC == true && $ward == 020)
    {
        echo "Voter eligible to vote.";
    }
    elseif($age < 18 && $PVC == true && $ward == 020)
    {
        echo "Voter Under Age, voter not eligible to vote.";
    }
    elseif($age >= 18 && $PVC == false && $ward == 020)
    {
        echo "No PVC, voter not eligible to vote.";
    }
    else if($age >= 18 && $PVC == true && $ward != 020)
    {
        echo "Not from ward 020, voter not eligible to vote.";
    }
    else
    {
        echo "Under age, No PVC and Not from ward 020, voter not eligible to vote.";
    }
?>