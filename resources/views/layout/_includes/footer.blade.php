
<footer class="text-muted" style="margin-top: 20px;">
      <div class="container">      
          <p style="text-align:center;">4all</p>            
      </div>
 </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
         function calcValor() {
            var valor = document.getElementById("selectTicket").value;
            var quantidade = document.getElementById("quantidade").value;
            var total = parseFloat(valor) * parseFloat(quantidade);
            document.getElementById("total").innerHTML = parseFloat(total.toFixed(2));
        }
        $('#btncompra').on('click', function(){
          $('#compraModal').modal('show');
          calcValor();
        });
        $('#compraModal').on('hidden.bs.modal', function() {
            console.log('fechar modal'); 
            $("#selectTicket").val($("#selectTicket option:first").val()); 
            document.getElementById("quantidade").value = 1;
          });      
    </script>
  </body>
</html>