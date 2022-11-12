<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<FORM ACTION="analyseForm.php" METHOD="POST">
<input type="hidden" name="filiere" value="SIO" />
<input type="hidden" name="epreuve" value="E4" />

  <table>
    <thead>
        <tr>
            <th colspan="6">Saisie des notes CCF</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Code filiere</td>
            <td>Numero Eleve</td>
            <td>Nom Eleve</td>
            <td>Code épreuve</td>
            <td> Date </td>
            <td> Note </td>
        </tr>
        <tr>
           
    <td> SIO </td>

<td> ABC123 </td>
<td> <input type="hidden" name="nom[]" value="Robert" /> Robert </td>


             <td> E4 </td>

    <td>
<input type="date" name="dateEpreuve[]"
       value="2023-04-15"
       min="2023-03-01" max="2023-06-30"/>
        </td>
        <td>
<input type="number" min="0" max="20"  name="noteEpreuve[]" /> 
        </td>
        </tr>
    <tr>
             <td> SIO </td>
<td> ZAB456 </td>
<td> <input type="hidden" name="nom[]" value="Dupond" />Dupond </td>
             <td> E4 </td>

    <td> <input type="date" name="dateEpreuve[]" value="2023-04-15"
       min="2023-03-01" max="2023-06-30"/> </td>
    <td> <input type="number" min="0" max="20"  name="noteEpreuve[]" /> </td>

    
        </tr>
        <tr>
    <td> SIO </td>

<td> PAR231 </td>
<td><input type="hidden" name="nom[]" value="Lajoie" /> Lajoie </td>
             <td> E4 </td>

    <td>
<input type="date" name="dateEpreuve[]"
       value="2023-04-15"
       min="2023-03-01" max="2023-06-30"/>
        </td>
        <td>
<input type="number" min="0" max="20"  name="noteEpreuve[]" /> 
        </td>
        </tr>
    </tbody>
</table>

<BUTTON> Envoyez le formulaire </BUTTON>

  </FORM>