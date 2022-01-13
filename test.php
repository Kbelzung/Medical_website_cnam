<form class="login" action="test_processing.php" method="post">   
            <div id=wrapper_center>
                <input type="hidden" id="hidden_idDoctor" name="idDoctor" value="1" required="required">
                <input type="hidden" id="hidden_date" name="date" value="06-06-06" required="required">
                <input type="hidden" id="hidden_hour" name="hour" value="09h00" required="required">

                <label for="checkbox_first_appointment">Premier rendez-vous ?</label>
                <input type="checkbox" id="checkbox_first_appointment" name="checkbox_first_appointment" value="Yes"></input>

                <label for="select_reason">Motif de rendez-vous:</label>
                <select name="select_reason" id="select_reason" required="required">
                    <option value="">--Choisir un motif--</option>
                    <option value="value1">Consultation de médecine générale</option>
                    <option value="value2">Renouvellement de traitement</option>
                    <option value="value3">Vaccination anti-covid</option>
                    <option value="value4">Bilan de santé</option>
                </select>

                <label for="textarea_note">Observation:</label>
                <textarea id="textarea_note" name="textarea_note" rows="5" cols="33"></textarea>
            </div>
            <div class="container_center">
                <button id="validation" type="submit">Valider</button>
            </div> 
</form>