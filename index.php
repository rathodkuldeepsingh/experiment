<html>
  <head>
    <title>
      Experiment
    </title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  </head>
  <body>
    Doo
    <form id="project-filter" class="aui ajs-dirty-warning-exempt">
      <div class="project-filter-item">
        <input type="text" id="project-filter-text" placeholder="Contains text..." class="version-filter-text text" value="">
      </div>
    </form>

  </body>
  <script>
  var form=$('#project-filter'); 
  var tex;
  $('#project-filter').on('keyup', function() { 
    tex =$("#project-filter-text").val();
    console.log(tex); 
    form.submit;
  
  });
  </script>

</html>
