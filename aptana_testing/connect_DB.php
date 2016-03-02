<?php
 $connection = mysql_connect("sherly", "ftpuser@10.0.1.61", "boulder123");
  if (!$connnection) { die('Could not connect: ' . mysql_error()); }
 mysql_select_db("twob_travler_site", $connection); $result = mysql_query("select * from tablename"); 
 echo "<table> <tr> <th>Field 1</th> <th>Field 2</th> <th>Field 3</th> </tr>";while($row = mysql_fetch_array($result))
 { echo "<tr valign='top'>"; echo "<td>" . $row['Field 1'] . "</td>"; echo "<td>" . $row['Field 2'] . "</td>"; echo "<td>" . $row['Field 3'] .
 "</td>"; echo "</tr>"; } echo "</table>"; mysql_close($connection);
  ?>