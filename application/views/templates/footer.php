        <div class="courses-area">
            <div class="container-fluid">
                <div class="row">
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                        <p><?= $aplikasi['footer_aplikasi']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/wow.min.js"></script>
    <!-- chosen JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/chosen/chosen.jquery.js"></script>
    <script src="<?= base_url('assets/') ?>js/chosen/chosen-active.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/counterup/jquery.counterup.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/counterup/waypoints.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/metisMenu/metisMenu.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/data-table/bootstrap-table.js"></script>
    <script src="<?= base_url('assets/') ?>js/data-table/tableExport.js"></script>
    <script src="<?= base_url('assets/') ?>js/data-table/data-table-active.js"></script>
    <script src="<?= base_url('assets/') ?>js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?= base_url('assets/') ?>js/data-table/bootstrap-editable.js"></script>
    <script src="<?= base_url('assets/') ?>js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?= base_url('assets/') ?>js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?= base_url('assets/') ?>js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/editable/jquery.mockjax.js"></script>
    <script src="<?= base_url('assets/') ?>js/editable/mock-active.js"></script>
    <script src="<?= base_url('assets/') ?>js/editable/select2.js"></script>
    <script src="<?= base_url('assets/') ?>js/editable/moment.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/editable/bootstrap-datetimepicker.js"></script>
    <script src="<?= base_url('assets/') ?>js/editable/bootstrap-editable.js"></script>
    <script src="<?= base_url('assets/') ?>js/editable/xediable-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/peity/jquery.peity.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/sparkline/sparkline-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?= base_url('assets/') ?>js/sparkline/sparkline-active.js"></script>
    <!-- summernote JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/summernote/summernote.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/summernote/summernote-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/calendar/moment.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/calendar/fullcalendar.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/calendar/fullcalendar-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/main.js"></script>
    
    <script>
      $('.custom-file-input').on('change', function() {
          let fileName = $(this).val().split('\\').pop();
          $(this).next('.custom-file-label').addClass("selected").html(fileName);
      });

      $('.form-check-input').on('click', function() {
          const menuId = $(this).data('menu');
          const roleId = $(this).data('role');

          $.ajax({
              url: "<?= base_url('admin/changeaccess'); ?>",
              type: 'post',
              data: {
                  menuId: menuId,
                  roleId: roleId,
                  <?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>'
              },
              success: function() {
                  document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
              }
          });

      });
    </script>
</body>

</html>