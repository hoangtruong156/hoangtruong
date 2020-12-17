<html>
   <head>
      
      <style>
         span{
            color: green;
         }
      </style>
      
      <script>
         function showHint(str) {
            if (str.length == 0) {
               document.getElementById("txtHint").innerHTML = "";
               return;
            }
            else 
            {
               var xmlhttp = new XMLHttpRequest();
               
               xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                     document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                  }
               }
               xmlhttp.open("GET", "php_ajax1.php?q=" + str, true);
               xmlhttp.send();
            }
         }
      </script>
      
   </head>
   <body>
      
      <p><b>Tìm kiếm khóa học:</b></p>
      
      <form>
         <input type="text" onkeyup="showHint(this.value)">
      </form>
      
      <p>Nhập tên khóa học: <span id="txtHint">d</span></p>
   
   </body>
</html>