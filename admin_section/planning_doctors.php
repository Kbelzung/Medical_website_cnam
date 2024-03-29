<?php include('database_access/verify_connection.php'); ?>
<!doctype html>
<html>
    <head>
        <title>Prendre rendez-vous</title>
        <link rel="stylesheet" href="css/planning_doctors.css">
        <link rel="stylesheet" href="css/menu.css">
    </head>
    <body>
        <?php include('menu.php'); ?>
            <div id=container> 
                <div id=container_calendar>
                    <div id="doctors_list">
                        <?php include('database_access/get_doctors_cards.php'); ?>
                    </div>
                    <div class="calendar">
                        <header id="calendar_header">
                        <div id="calendar_months">
                            <img id="calendar_months_arrow_left" class="calendar_arrow" src="../resources/chevron-left.svg" onclick="previousMonth();"></img>
                            <h1 id="calendar_months_text" class="calendar_header_text"></h1>
                            <img id="calendar_months_arrow_right" class="calendar_arrow" src="../resources/chevron-right.svg" onclick="nextMonth();"></img>
                        </div>
                        <div id="calendar_years">
                            <img id="calendar_years_arrow_left" class="calendar_arrow" src="../resources/chevron-left.svg" onclick="previousYear();"></img>
                            <h1 id="calendar_years_text" class="calendar_header_text"></h1>
                            <img id="calendar_years_arrow_right" class="calendar_arrow" src="../resources/chevron-right.svg" onclick="nextYear();"></img>
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
                        <div id="calendar_bloc_1" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_2" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_3" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_4" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_5" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_6" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_7" class="calendar_bloc_number"></div>
                        </div>

                        <!-- row 2 -->
                        <div class="calendar_row">
                        <div id="calendar_bloc_8" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_9" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_10" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_11" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_12" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_13" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_14" class="calendar_bloc_number"></div>
                        </div>

                        <!-- row 3 -->
                        <div class="calendar_row">
                        <div id="calendar_bloc_15" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_16" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_17" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_18" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_19" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_20" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_21" class="calendar_bloc_number"></div>
                        </div>

                        <!-- row 4 -->
                        <div class="calendar_row">
                        <div id="calendar_bloc_22" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_23" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_24" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_25" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_26" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_27" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_28" class="calendar_bloc_number"></div>
                        </div>

                        <!-- row 5 -->
                        <div class="calendar_row">
                        <div id="calendar_bloc_29" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_30" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_31" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_32" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_33" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_34" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_35" class="calendar_bloc_number"></div>
                        </div>

                        <!-- row 6 -->
                        <div class="calendar_row">
                        <div id="calendar_bloc_36" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_37" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_38" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_39" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_40" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_41" class="calendar_bloc_number"></div>
                        <div id="calendar_bloc_42" class="calendar_bloc_number"></div>
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
                        <div class="date_bloc_arrow dates_bloc_active"><-</div>
                        <div class="date_bloc_empty"></div>
                        <div class="date_bloc_empty"></div>
                        <div class="date_bloc_arrow dates_bloc_active">-></div>
                        </div>
                    </div>
                </div>
                <div class=container_center_column>
                    <label for="text_patient">Patient</label>
                    <input type="text" id="text_patient" name="text_patient" value="">

                    <label for="text_reason">Raison du rendez-vous</label>
                    <input type="text" id="text_reason" name="text_reason" value="">

                    <label for="checkbox_first_appointment">Premier rendez-vous ?</label>
                    <input type="checkbox" id="checkbox_first_appointment" name="checkbox_first_appointment" value="Yes"></input>

                    <label for="textarea_note">Observation:</label>
                    <textarea id="textarea_note" name="textarea_note" rows="5" cols="33"></textarea>
                </div>
            </div>
    </body>
    <script src="js/planning_doctors.js"></script>
</html>
