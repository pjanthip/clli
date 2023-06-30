<!-- ============================================================== -->
		<!-- footer -->
		<!-- ============================================================== -->
		<footer class="footer">
            © 2022 CLLI MIS by CLLI Dev teams.
        </footer>
		<!-- ============================================================== -->
		<!-- End footer -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
    <!-- Select 2 -->
    <!-- ============================================================== -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo eliteadmin;?>assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo eliteadmin;?>university/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo eliteadmin;?>university/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo eliteadmin;?>university/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo eliteadmin;?>university/dist/js/custom.min.js"></script>

	<!-- This is data table -->
    <script src="<?php echo eliteadmin;?>assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo eliteadmin;?>assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <!-- sweetalert2 -->
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
</body>

<script>
Promise.allSettled = Promise.allSettled || ((promises) => Promise.all(promises.map(p => p
  .then(v => ({
    status: 'fulfilled',
    value: v,
  }))
  .catch(e => ({
    status: 'rejected',
    reason: e,
  }))
)));

    tinymce.init({
        selector: 'textarea.tinymce',
        height: 300,
        resize: false,
        menubar: false,
        plugins: 'image code emoticons help link media preview ',
        toolbar: 'undo redo | styles | bold italic backcolor alignleft aligncenter alignright alignjustify link openlink unlink preview image media code emoticons help',
        valid_elements: "@[id|class|style|title|dir<ltr?rtl|lang|xml::lang|onclick|ondblclick|" +
            "onmousedown|onmouseup|onmouseover|onmousemove|onmouseout|onkeypress|" +
            "onkeydown|onkeyup],a[rel|rev|charset|hreflang|tabindex|accesskey|type|" +
            "name|href|target|title|class|onfocus|onblur],strong/b,em/i,strike,u," +
            "#p,-ol[type|compact],-ul[type|compact],-li,br,img[longdesc|usemap|" +
            "src|border|alt=|title|hspace|vspace|width|height|align],-sub,-sup," +
            "-blockquote,caption,-div," +
            "-span,-code,-pre,address,-h1,-h2,-h3,-h4,-h5,-h6,hr[size|noshade],-font[face" +
            "|size|color],dd,dl,dt,cite,abbr,acronym,del[datetime|cite],ins[datetime|cite]," +
            "object[classid|width|height|codebase|*],param[name|value|_value],embed[type|width" +
            "|height|src|*],script[src|type],map[name],area[shape|coords|href|alt|target],bdo," +
            "button,col[align|char|charoff|span|valign|width],colgroup[align|char|charoff|span|" +
            "valign|width],dfn,fieldset,form[action|accept|accept-charset|enctype|method]," +
            "input[accept|alt|checked|disabled|maxlength|name|readonly|size|src|type|value]," +
            "kbd,label[for],legend,noscript,optgroup[label|disabled],option[disabled|label|selected|value]," +
            "q[cite],samp,select[disabled|multiple|name|size],small," +
            "textarea[cols|rows|disabled|name|readonly],tt,var,big"
    });
</script>

</html>