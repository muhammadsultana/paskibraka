

<div class="footer-copyright-area">
 
          
          <div class="footer-copy-right">
            <p>Copyright &copy; <?= date('Y') ?> <a href="https://colorlib.com/wp/templates/">Dispora SumSel</a> All rights
              reserved.</p>
          </div>
        </div>
    


  <!-- jquery
								============================================ -->
  <script src="<?php echo base_url() ?>js/vendor/jquery-1.11.3.min.js"></script>
  <!-- bootstrap JS
								============================================ -->
  <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
  <!-- wow JS
								============================================ -->
  <script src="<?php echo base_url() ?>js/wow.min.js"></script>
  <!-- price-slider JS
								============================================ -->
  <script src="<?php echo base_url() ?>js/jquery-price-slider.js"></script>
  <!-- meanmenu JS
								============================================ -->
  <script src="<?php echo base_url() ?>js/jquery.meanmenu.js"></script>
  <!-- owl.carousel JS
								============================================ -->
  <script src="<?php echo base_url() ?>js/owl.carousel.min.js"></script>
  <!-- sticky JS
								============================================ -->
  <script src="<?php echo base_url() ?>js/jquery.sticky.js"></script>
  <!-- scrollUp JS
								============================================ -->
  <script src="<?php echo base_url() ?>js/jquery.scrollUp.min.js"></script>
  <!-- mCustomScrollbar JS
								============================================ -->
  <script src="<?php echo base_url() ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?php echo base_url() ?>js/scrollbar/mCustomScrollbar-active.js"></script>
  <!-- metisMenu JS
								============================================ -->
  <script src="<?php echo base_url() ?>js/metisMenu/metisMenu.min.js"></script>
  <script src="<?php echo base_url() ?>js/metisMenu/metisMenu-active.js"></script>
  <!-- morrisjs JS
								============================================ -->
  <script src="<?php echo base_url() ?>js/morrisjs/raphael-min.js"></script>
  <script src="<?php echo base_url() ?>js/morrisjs/morris.js"></script>
  <script src="<?php echo base_url() ?>js/morrisjs/morris-active.js"></script>
  <!-- morrisjs JS
								============================================ -->
  <script src="<?php echo base_url() ?>js/sparkline/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url() ?>js/sparkline/jquery.charts-sparkline.js"></script>
  <!-- calendar JS
								============================================ -->
  <script src="<?php echo base_url() ?>js/calendar/moment.min.js"></script>
  <script src="<?php echo base_url() ?>js/calendar/fullcalendar.min.js"></script>
  <script src="<?php echo base_url() ?>js/calendar/fullcalendar-active.js"></script>
  <!-- plugins JS
								============================================ -->
  <script src="<?php echo base_url() ?>js/plugins.js"></script>
  <!-- main JS
								============================================ -->
  <script src="<?php echo base_url() ?>js/main.js"></script>
  <!-- Datatable -->
  <script src="<?= asset_url('js/datatable/datatables.min.js');?>"></script>
  <script src="<?= asset_url('js/datatable/DataTables-1.10.20/js/dataTables.bootstrap.min.js');?>"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

  <script>
    $('#table').DataTable( {
      dom: 'Bfrtip',
      buttons: [
        {
          extend: 'excel',
          className: 'far fa-file-excel grid-button export',
          exportOptions: {
            columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
          }
        },
        {
          extend: 'pdf',
          exportOptions: {
            columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
          }
        }
      ]
} );
  </script>

  <style>
    .dt-button:hover {
      background-color: navy;
      color: #fff;
    }

    .dt-button {
      font-size: 14px;
      padding: 6px 12px;
      margin-bottom: 0;

      display: inline-block;
      text-decoration: none;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-image: none;
      border: 1px solid transparent;
      color: #333;
      background-color: #fff;
      border-color: #ccc;
    }
  </style>
</body>

</html>