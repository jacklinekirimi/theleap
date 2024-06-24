<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function student ($marks){
  
  
if($marks>=46 && $marks<=50){
  return ' Grade - A+  Grade point= 9'; 
    }
else if($marks>=41 && $marks<=45 ){
    return ' Grade - A Grade Point = 8';
}
else if($marks>=36 && $marks<=40){
    return 'Grade - B+ Grade Point = 7';
}
else if($marks>=31 && $marks<=35){
    return ' Grade - B  Grade Point = 6';

}
else if($marks>=26 && $marks<=30){
    return 'Grade - C+ Grade Point = 5';
}
else if($marks>=21 && $marks<=25){
    return ' Grade - C Grade Point = 4';
}
else if($marks>=16 && $marks<=20){
    return 'Grade - D+ Grade Point = 3';
}
else if($marks>=11 && $marks<=15){
    return 'Grade - D Grade Point = 2';
}
else if($marks>=6 && $marks<=10){
    return 'Grade - E Grade Point = 1';
}
else{
 return 'Invalid input!';

}
  }



}