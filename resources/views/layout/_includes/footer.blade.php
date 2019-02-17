<footer class="text-muted" style="margin-top: 20px;">
      <div class="container">      
          <p style="text-align:center;">4all</p>            
      </div>
 </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript">

      $('.toast').toast('hide');

         function calcValor() {
            var valor = document.getElementById("selectTicket").value;
            var quantidade = document.getElementById("quantidade").value;
            var total = parseFloat(valor) * parseFloat(quantidade);
            document.getElementById("total").innerHTML = parseFloat(total.toFixed(2));
        }

        $('#btningressos').on('click', function(){
          $('#compraModal').modal('show');
          calcValor();
        });


        $('#compraModal').on('hidden.bs.modal', function() {
            console.log('fechar modal'); 
            $("#selectTicket").val($("#selectTicket option:first").val()); 
            document.getElementById("quantidade").value = 1;
          });

        $('#btncompra').on('click', function(){

              $('#compraModal').on('hidden.bs.modal', function() {
              console.log('fechar modal'); 
              $("#selectTicket").val($("#selectTicket option:first").val()); 
              document.getElementById("quantidade").value = 1;
            });
        
          });
           
            $('#btncompra').on('click', function() {
              var $this = $(this);
              var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> loading...';
              if ($(this).html() !== loadingText) {
                $this.data('original-text', $(this).html());
                $this.html(loadingText);
              }
              setTimeout(function() {
                $this.html($this.data('original-text'));
                console.log('fechar modal'); 
                $('#compraModal').modal('hide');
                 $('#modalOK').modal('show');
              }, 2000);
            });
    </script>
  </body>
</html>