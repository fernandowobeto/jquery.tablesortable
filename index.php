<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="jquery.tablesortable.js"></script>
    <script>
      $(document).ready(function(){
        $('#results').tablesortable();

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
          <th>Codigo</th>
          <th>Numero</th>
          <th>Tecnologia</th>
        </tr>
      </thead>
      <tbody>
       <?
       for($1=1;$i<=50;$i++){
         echo "
           <tr>
            <td align=\"right\">$i</td>
            <td align=\"right\">".$i."0</td>
            <td>PHP $i</td>
           </tr>
         ";
       }
       ?>
      </tbody>
    </table>
  </body>
</html>
