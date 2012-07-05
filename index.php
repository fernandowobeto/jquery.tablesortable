<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="jquery.tablesortable.js"></script>
    <script>
      $(document).ready(function(){
        $('#results').tablesortable({nosorter:[4]});

        $('#results tbody').on('click','td a',function(){
          alert($(this).text());
        });
      });
    </script>
  </head>
  <body>
    <table id="results" width="600" border="1">
      <thead>
        <tr>
          <th align="right" class="sort_number">Codigo</th>
          <th align="right" class="sort_number">Numero</th>
          <th>Tecnologia</th>
          <th class="sort_number" align="right">Valor</th>
          <th width="30">#</th>
        </tr>
      </thead>
      <tbody>
       <?
       $valores = array('5,25','4,13','6,25','1,23','4,98','10,44','12,74','8,37','2,66','25,21','14,13','12,85','41,32','31,55','123,25','144,21','111,10','131,22');

       for($i=1;$i<=15;$i++){
         echo "
           <tr>
            <td align=\"right\">$i</td>
            <td align=\"right\">".$i."0</td>
            <td>PHP $i</td>
            <td align=\"right\">".$valores[$i]."</td>
            <td>X</td>
           </tr>
         ";
       }
       ?>
      </tbody>
    </table>
  </body>
</html>
