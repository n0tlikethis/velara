<table border="1">
  <tr>
    <th>nama</th>
    <th>email</th>
  </tr>
  <?php
    foreach ($data as $visitor) {
      print "<tr>
              <td>$visitor->nama</td>
              <td>$visitor->email</td>
            </tr>";
    }
  ?>
</table> 
