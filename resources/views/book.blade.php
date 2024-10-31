<table border="1">
  <tr>
    <th>nama buku</th>
    <th>pengarang</th>
  </tr>
  <?php
    foreach ($data as $book) {
      print "<tr>
              <td>$book->nama</td>
              <td>$book->pengarang</td>
            </tr>";
    }
  ?>
</table> 
