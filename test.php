<table class="table">
    <thead>
        <tr>
            <th>Date</th>
            <th>Docteur</th>
            <th>Téléphone</th>
            <th>Mail</th>
            <th>Annuler</th>
        </tr>
    </thead>
    <tbody>
        <tr value=' . $appointement["id"] . '>
                <td>
                    <h6 >' . $appointement["time"] . '</h6>
                    <small>' . $appointement["date"] . '</small>
                </td>
                <td>
                    <h6>' . $appointement["first_name"] . ' ' . $appointement["last_name"] . '</h6>
                </td>
                <td>
                    <h6>' . $appointement["phone"] . '</h6>
                </td>
                <td>
                    <h6>' . $appointement["email"] . '</h6>
                </td>
                <td>
                    <button class="validation" type="submit">X</button>
                </td>
            </tr>
    </tbody>
</table>