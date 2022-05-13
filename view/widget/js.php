 <!-- Core  -->
 <script src="./public/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
 <script src="./public/global/vendor/jquery/jquery.js"></script>
 <script src="./public/global/vendor/popper-js/umd/popper.min.js"></script>
 <script src="./public/global/vendor/bootstrap/bootstrap.js"></script>
 <script src="./public/global/vendor/animsition/animsition.js"></script>
 <script src="./public/global/vendor/mousewheel/jquery.mousewheel.js"></script>
 <script src="./public/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
 <script src="./public/global/vendor/asscrollable/jquery-asScrollable.js"></script>
 <script src="./public/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

 <!-- Plugins -->
 <script src="./public/global/vendor/switchery/switchery.js"></script>
 <script src="./public/global/vendor/intro-js/intro.js"></script>
 <script src="./public/global/vendor/screenfull/screenfull.js"></script>
 <script src="./public/global/vendor/slidepanel/jquery-slidePanel.js"></script>
 <script src="./public/global/vendor/datatables.net/jquery.dataTables.js"></script>
 <script src="./public/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
 <script src="./public/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
 <script src="./public/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
 <script src="./public/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
 <script src="./public/global/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
 <script src="./public/global/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
 <script src="./public/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
 <script src="./public/global/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
 <script src="./public/global/vendor/datatables.net-buttons/buttons.html5.js"></script>
 <script src="./public/global/vendor/datatables.net-buttons/buttons.flash.js"></script>
 <script src="./public/global/vendor/datatables.net-buttons/buttons.print.js"></script>
 <script src="./public/global/vendor/datatables.net-buttons/buttons.colVis.js"></script>
 <script src="./public/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
 <script src="./public/global/vendor/asrange/jquery-asRange.min.js"></script>
 <script src="./public/global/vendor/bootbox/bootbox.js"></script>
 <script src="public/global/vendor/jquery-ui/jquery-ui.js"></script>
 <script src="public/global/vendor/blueimp-tmpl/tmpl.js"></script>
 <script src="public/global/vendor/blueimp-canvas-to-blob/canvas-to-blob.js"></script>
 <script src="public/global/vendor/blueimp-load-image/load-image.all.min.js"></script>
 <script src="public/global/vendor/blueimp-file-upload/jquery.fileupload.js"></script>
 <script src="public/global/vendor/blueimp-file-upload/jquery.fileupload-process.js"></script>
 <script src="public/global/vendor/blueimp-file-upload/jquery.fileupload-image.js"></script>
 <script src="public/global/vendor/blueimp-file-upload/jquery.fileupload-audio.js"></script>
 <script src="public/global/vendor/blueimp-file-upload/jquery.fileupload-video.js"></script>
 <script src="public/global/vendor/blueimp-file-upload/jquery.fileupload-validate.js"></script>
 <script src="public/global/vendor/blueimp-file-upload/jquery.fileupload-ui.js"></script>
 <script src="public/global/vendor/dropify/dropify.min.js"></script>
 <!-- Scripts -->
 <script src="./public/global/js/Component.js"></script>
 <script src="./public/global/js/Plugin.js"></script>
 <script src="./public/global/js/Base.js"></script>
 <script src="./public/global/js/Config.js"></script>

 <script src="./public/assets/js/Section/Menubar.js"></script>
 <script src="./public/assets/js/Section/GridMenu.js"></script>
 <script src="./public/assets/js/Section/Sidebar.js"></script>
 <script src="./public/assets/js/Section/PageAside.js"></script>
 <script src="./public/assets/js/Plugin/menu.js"></script>

 <script src="./public/global/js/config/colors.js"></script>
 <script src="./public/assets/js/config/tour.js"></script>
 <script>
   Config.set('assets', './public/assets');
 </script>

 <!-- Page -->
 <script src="./public/assets/js/Site.js"></script>
 <script src="./public/global/js/Plugin/asscrollable.js"></script>
 <script src="./public/global/js/Plugin/slidepanel.js"></script>
 <script src="./public/global/js/Plugin/switchery.js"></script>
 <script src="./public/global/js/Plugin/datatables.js"></script>

 <script src="./public/assets/examples/js/tables/datatable.js"></script>
 <script src="./public/global/js/Plugin/input-group-file.js"></script>
 <script src="public/global/js/Plugin/dropify.js"></script>

 <script src="public/assets/examples/js/forms/uploads.js"></script>
 <script>
   (function(document, window, $) {
     'use strict';

     var Site = window.Site;
     $(document).ready(function() {
       if (window.dt)
         window.dt.order([0, 'desc']).draw();
       Site.run();
     });
   })(document, window, jQuery);
 </script>

 <script>
   $('#examplePositionCenter').on('show.bs.modal', function(e) {
     var id = $(e.relatedTarget).data('id');
     var controller = $("#btnXoa").data('controller');
     var action = $("#btnXoa").data('action');
     $("#btnXoa").attr("onclick", "location.href='?controller=" + controller + "&action=" + action + "&id=" + id + "'");
   });
 </script>