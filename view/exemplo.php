<!DOCTYPE html> 
<html lang="en"> 

<head> 
  <meta charset="utf-8"> 
  <title>How to add `style=display:“block” 
  `to an element using jQuery?</title> 
  <style> 
    p { 
      color: green; 
      font-weight: bold; 
      cursor: pointer; 
    } 
  </style> 
  <script src="https://code.jquery.com/jquery-1.10.2.js"> 
</script> 
</head> 

<body style="text-align:center;"> 
  <h1 style="color:green;"> 
    GeeksForGeeks 
  </h1> 
  <h2> Using .show()</h2> 
  <div> 
    How to add 
    <p>`style=display:“block”`</p> 
  to an element using jQuery? 
  </div> 
  <script> 
    var words = $("p").first().text().split(/\s+/); 
    var text = words.join("</span> <span>"); 
    $("div").show(); 
  </script> 

</body> 

</html> 
