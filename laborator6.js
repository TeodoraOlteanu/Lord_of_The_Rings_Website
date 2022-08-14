function sortTable(n) {
  var table, direction, rows,x,y, ct=0, i, j;

  table = document.getElementById("booksTable");
  direction = "asc";
  rows = table.getElementsByTagName("TR");

for(i=1; i<rows.length-1; i++)
  for (j=i+1; j < rows.length; j++) {
    x = rows[i].getElementsByTagName("TD")[n];
    y = rows[j].getElementsByTagName("TD")[n];
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        rows[i].parentNode.insertBefore(rows[j], rows[i]);
        ct++;
    }
  }
  if(ct==0)
  {
    direction="desc";
    for(i=1; i<rows.length-1; i++)
      for (j=i+1; j < rows.length; j++) {
        x = rows[i].getElementsByTagName("TD")[n];
        y = rows[j].getElementsByTagName("TD")[n];
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          rows[i].parentNode.insertBefore(rows[j], rows[i]);
          ct++;
        }
      }
  }
}
