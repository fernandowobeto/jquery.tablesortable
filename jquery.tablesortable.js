jQuery.fn.tablesortable = function(){
  var sortedOn  = typeof sortedOn=='undefined'?0:sortedOn;
  var table     = $(this);

  table.find('thead th').click(function(){
    var sortOn    = $(this).index();
    var tbody     = table.find('tbody:first');
    var rows      = tbody.find('tr');
    var rowArray  = new Array();

    for (var i=0, length=rows.length; i<length; i++){
      rowArray[i] = new Object;
      rowArray[i].oldIndex = i;
      rowArray[i].value = rows[i].getElementsByTagName('td')[sortOn].firstChild.nodeValue;
    }
    if(sortOn == sortedOn){
      rowArray.reverse();
    }else{
      sortedOn = sortOn;
      if(sortedOn == 0){
        rowArray.sort(RowCompareNumbers);
      }else{
        rowArray.sort(RowCompare);
      }
    }

    var newTbody = document.createElement('tbody');
    for(var i=0, length=rowArray.length ; i<length; i++){
      newTbody.appendChild(rows[rowArray[i].oldIndex].cloneNode(true));
    }
    tbody.replaceWith(newTbody);
  });

  var RowCompare = function(a, b) {
    var aVal = a.value;
    var bVal = b.value;
    return (aVal == bVal ? 0 : (aVal > bVal ? 1 : -1));
  }
  // Compare number
  var RowCompareNumbers = function(a, b){
    var aVal = parseInt( a.value);
    var bVal = parseInt(b.value);
    return (aVal - bVal);
  }
  // compare currency
  var RowCompareDollars =  function(a, b){
    var aVal = parseFloat(a.value.substr(1));
    var bVal = parseFloat(b.value.substr(1));
    return (aVal - bVal);
  }
  return table;
}

