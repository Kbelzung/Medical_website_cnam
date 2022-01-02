<link rel="stylesheet" href="css/calendar.css">
<script src="js/selection_calendar.js"></script>
<div id="container">
  <div class="calendar">
    <header id="calendar_header">
      <div id="calendar_months">
        <img id="calendar_months_arrow_left" class="calendar_arrow" src="resources/chevron-left.svg" onclick="previousMonth();"></img>
        <h1 id="calendar_months_text" class="calendar_header_text"></h1>
        <img id="calendar_months_arrow_right" class="calendar_arrow" src="resources/chevron-right.svg" onclick="nextMonth();"></img>
      </div>
      <div id="calendar_years">
        <img id="calendar_years_arrow_left" class="calendar_arrow" src="resources/chevron-left.svg" onclick="previousYear();"></img>
        <h1 id="calendar_years_text" class="calendar_header_text"></h1>
        <img id="calendar_years_arrow_right" class="calendar_arrow" src="resources/chevron-right.svg" onclick="nextYear();"></img>
      </div>
    </header>

    <!-- calendar_bloc -->
    <div class="calendar_row" id="calendar_row_days">
      <div class="calendar_bloc_weekdays">Lundi</div>
      <div class="calendar_bloc_weekdays">Mardi</div>
      <div class="calendar_bloc_weekdays">Mercredi</div>
      <div class="calendar_bloc_weekdays">Jeudi</div>
      <div class="calendar_bloc_weekdays">Vendredi</div>
      <div class="calendar_bloc_weekdays">Samedi</div>
      <div class="calendar_bloc_weekdays">Dimanche</div>
    </div>
    
    <!-- first row -->
    <div class="calendar_row">
      <div id="calendar_bloc_1" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_1')"></div>
      <div id="calendar_bloc_2" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_2')"></div>
      <div id="calendar_bloc_3" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_3')"></div>
      <div id="calendar_bloc_4" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_4')"></div>
      <div id="calendar_bloc_5" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_5')"></div>
      <div id="calendar_bloc_6" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_6')" ></div>
      <div id="calendar_bloc_7" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_7')"></div>
    </div>

    <!-- row 2 -->
    <div class="calendar_row">
      <div id="calendar_bloc_8" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_8')"></div>
      <div id="calendar_bloc_9" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_9')"></div>
      <div id="calendar_bloc_10" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_10')"></div>
      <div id="calendar_bloc_11" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_11')"></div>
      <div id="calendar_bloc_12" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_12')"></div>
      <div id="calendar_bloc_13" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_13')"></div>
      <div id="calendar_bloc_14" class="calendar_bloc_number selectedDate" onclick="buttontoggle('calendar_bloc_14')"></div>
    </div>

    <!-- row 3 -->
    <div class="calendar_row">
      <div id="calendar_bloc_15" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_15')"></div>
      <div id="calendar_bloc_16" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_16')"></div>
      <div id="calendar_bloc_17" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_17')"></div>
      <div id="calendar_bloc_18" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_18')"></div>
      <div id="calendar_bloc_19" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_19')"></div>
      <div id="calendar_bloc_20" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_20')"></div>
      <div id="calendar_bloc_21" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_21')"></div>
    </div>

    <!-- row 4 -->
    <div class="calendar_row">
      <div id="calendar_bloc_22" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_22')"></div>
      <div id="calendar_bloc_23" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_23')"></div>
      <div id="calendar_bloc_24" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_24')"></div>
      <div id="calendar_bloc_25" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_25')"></div>
      <div id="calendar_bloc_26" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_26')"></div>
      <div id="calendar_bloc_27" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_27')"></div>
      <div id="calendar_bloc_28" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_28')"></div>
    </div>

    <!-- row 5 -->
    <div class="calendar_row">
      <div id="calendar_bloc_29" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_29')"></div>
      <div id="calendar_bloc_30" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_30')"></div>
      <div id="calendar_bloc_31" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_31')"></div>
      <div id="calendar_bloc_32" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_32')"></div>
      <div id="calendar_bloc_33" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_33')"></div>
      <div id="calendar_bloc_34" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_34')"></div>
      <div id="calendar_bloc_35" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_35')"></div>
    </div>

    <!-- row 6 -->
    <div class="calendar_row">
      <div id="calendar_bloc_36" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_36')"></div>
      <div id="calendar_bloc_37" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_37')"></div>
      <div id="calendar_bloc_38" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_38')"></div>
      <div id="calendar_bloc_39" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_39')"></div>
      <div id="calendar_bloc_40" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_40')"></div>
      <div id="calendar_bloc_41" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_41')"></div>
      <div id="calendar_bloc_42" class="calendar_bloc_number" onclick="buttontoggle('calendar_bloc_42')"></div>
    </div>
  </div>
  
  <div class="dates_container">
    <div class="dates_row">
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
    </div>

    <div class="dates_row">
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
    </div>

    <div class="dates_row">
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
    </div>

    <div class="dates_row">
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
    </div>

    <div class="dates_row">
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
      <div class="dates_bloc dates_bloc_active"></div>
    </div>

    <div class="dates_row">
      <div class="dates_bloc dates_bloc_active"><-</div>
      <div class="dates_bloc"></div>
      <div class="dates_bloc"></div>
      <div class="dates_bloc dates_bloc_active">-></div>
    </div>
  </div>
</div>
<script src="js/initialize_calendar.js"></script>