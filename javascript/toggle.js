  /* Toggle-Funktion bei Klick auf die Buttons*/
          $(document).ready(function(){
            $("#title1").click(function(){
              $("#erstes").toggle('slow', function(){
              });
            });
          });

        

          $(document).ready(function(){
            $("#title2").click(function(){
              $("#zweites").toggle('slow', function(){
              });
            });
          });

         $(document).ready(function(){
          $("#titleA").click(function(){
            $("#A").toggle('slow', function(){
              });
            });
          });

           $(document).ready(function(){
          $("#titleB").click(function(){
            $("#B").toggle('slow', function(){
              });
            });
          });

           $(document).ready(function(){
          $("#teil1").click(function(){
            $("#teil11").toggle('slow', function(){
              });
              $("#teil22").hide('slow', function(){
              });
            });
          });



          $(document).ready(function(){
          $("#teil2").click(function(){
            $("#teil22").toggle('slow', function(){
              });
              $("#teil11").hide('slow', function(){
              });
            });
          });
