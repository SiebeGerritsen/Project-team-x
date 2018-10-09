<?php
date_default_timezone_set('CET');
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Calendar{
    private $day;
    private $month;
    private $year;
    private $days_of_week ;
    private $num_days;
    private $date_info;
    private $day_of_week;

        /* 
        //
        // data info gaan proberen variable startdatum of
        // zoiets meegeven 
        //
        // functie alleen kalender maken
        // aparte functie voor de te weertegeven datum
        //        
        */


    public function __construct($day, $month, $year, $days_of_week = array('Zo.', 'Ma.', 'Di.', 'Wo.', 'Do.', 'Vri', 'Za.') ) {
        
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
        $this->days_of_week = $days_of_week;
        $this->num_days = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);
        $this->date_info = getdate(strtotime('first day of', mktime(0,0,0,$this->month,$this->day, $this->year)));
        $this->day_of_week = $this->date_info['wday'];
    
}

public function show() {

    //month and year caption
    $output = '<table class-"calender">';
    $output .= '<caption>' .  $this->date_info['month'] . ' ' . $this->date_info['year'] . '</caption>';
    $output .= '<tr>';

    // days of the week header
    foreach ( $this->days_of_week as $day ) {
        $output .= '<th class="header">' . $day . '</th>';
    }

    //close header row and open first row of days
    $output .= '</tr><tr>';

    //fulling gap until first day of the week
    if ( $this->day_of_week > 0) {
        $output .= '<td colspan="' . $this->day_of_week . '"></td>';
    }

    //start with days
    $current_day = 1;

    //loop and build days
    while ($current_day <= $this->num_days){
        //reset days
        if( $this->day_of_week == 7 ) {
            $this->day_of_week = 0;
            $output .= '</tr><tr>';
        }

        // build each day cell
        $output .= '<td class="day">' . $current_day . '</td>';

        //increament counters
        $current_day++;
        $this->day_of_week++;
        
    }

    //fill end of last week in month
    if ( $this->day_of_week != 7){
        $remaining_days = 7 - $this->day_of_week;
        $output .= '<td colspan="' . $remaining_days . '"></td> ';
    }

    //close final row and table
    $output .='</tr>';
    $output .='</table>';

    //output this
    echo $output;

}

}
?>

<html>
 <!--
    <head>
        <script>
            function goLastMonth(month,year){
                if(month == 1) {
                    //if the current 1, decrease the year and set month to 12
                    --year;
                    month = 12;
                }
                document.location.href = "<?php $_SERVER['PHP_SELF']; ?>?month="+month+"&year="+year;
            }

            function goNextMonth(month, year){
                if(month == 12) {
                    //if the current 12, increase the year and set month to 1
                    ++year;
                    month = 1;
                }
                
                document.location.href = "<?php $_SERVER['PHP_SELF']; ?>?month="+month+"&year="+year;
            }

        </script>
    </head>
  -->

    <div class="calendar">

        <?php
        
        $calendar = new Calendar(9, 10, 2018);
        $calendar->show();
        
        ?>

    </div>
    
</html>