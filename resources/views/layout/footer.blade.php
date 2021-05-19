
        </div> <!-- fim container-fluid -->
      </div> <!-- fim page content wrapper -->
    </div> <!--fim wrapper -->
  </div> <!--fim row -->

  <script src="{{ asset('js/app.js') }}"></script>
  <script>


    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });



    </script>
</body>
</html>
