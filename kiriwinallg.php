   
 <html>
    <head>
    <title>Kiriwina LLG Wards</title>
    <style>  
   table {
       position: relative;
       top:20px;
        border-spacing: 1px;
        
        width: 100%}
th, td {
       padding: 5px 30px 5px 10px;
       border-spacing: 0px;
       font-size: 90%;
       margin: 0px;}
th, td {
      text-align: left;
      background-color: #e0e9f0;
      border-top: 1px solid #f1f8fe;
      border-bottom: 1px solid #cbd2d8;
      border-right: 1px solid #cbd2d8;}
tr.head th {
     color: black;
     background-color: green;
     border-bottom: 2px solid #547ca0;
     border-right: 1px solid #749abe;
     border-top: 1px solid #90b4d6;
     text-align: center;
     text-shadow: -1px -1px 1px #666;
     letter-spacing: 0.15em;}
td {
    text-shadow: 1px 1px 1px #fff;}
tr.even td, tr.even th {
    background-color: #e8eff5;}
tr.head th:first-child {
    -webkit-border-top-left-radius: 5px;
     border-top-left-radius: 5px;}
tr.head th:last-child {
     -webkit-border-top-right-radius: 5px;
      border-top-right-radius: 5px;}
table caption {font-weight:bold;}
  </style>
    </head>
  <table><caption>Kiriwina Rural Local Level Government Wards Information: 2012-2017 Term.</caption>
          <tr class="head">
              <th>No:</th>
               <th>Ward Name</th>
               <th>Ward Councillor</th>
               <th>Total Household</th>
               <th>Male Population</th>
               <th>Female Population</th>
               <th>Total Population</th>
          </tr>
               
          <tr><td></td> <td colspan=5><b>Kiriwina Rural local Level Government President: Hon. Tom CAMERON , 2012-2017 </b></td>
          <td>
            
          </td></tr>
          
          <tr>
             <td colspan=7></td>
          </tr>
<?php
$file_handle = fopen("kgdata/kiriwinadata.txt", "rb");

while (!feof($file_handle) )
    {
    $line_of_text = fgets($file_handle, 1000);
    $parts = explode(',', $line_of_text);
    echo "<tr>";
        echo "<td>$parts[0]</td><td>$parts[1]</td>";
        echo "<td>$parts[2]</td><td>$parts[3]</td>";
        echo "<td>$parts[4]</td><td>$parts[5]</td>";
        echo "<td>$parts[6]</td>";
    echo "</tr>";
    }
    
fclose($file_handle);
?>

            <tr><td colspan="7"></td></td>
            </tr>
            
            <tr class="head"><th colspan="3"> KIRIWINA RLLG TOTAL POPULATION:</th><th>7,005</th><th>22,142</th>
            <th>21,223</th>
            <th>43,365</th>
            </tr>
            <tr><td colspan="7"></td></td>
            </tr>
            
   </table>
    
    