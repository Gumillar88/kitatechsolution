                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer"></div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ env('APP_ASSET_URL') }}assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
    <script src="{{ env('APP_ASSET_URL') }}assets/js/scripts.bundle.js?v=7.0.6"></script>
    <!--end::Global Theme Bundle-->

    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ env('APP_ASSET_URL') }}assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js?v=7.0.6"></script>
    <script src="{{ env('APP_ASSET_URL') }}assets/js/pages/crud/forms/editors/ckeditor-classic.js?v=7.0.6"></script>
    <!--end::Page Vendors-->

    <!--begin::Page Scripts(used by this page)-->
    <!-- <script src="{{ env('APP_ASSET_URL') }}assets/js/pages/widgets.js?v=7.0.6"></script> -->
    <script src="{{ env('APP_ASSET_URL') }}assets/js/jquery-3.5.1.js"></script>
    <script src="{{ env('APP_ASSET_URL') }}assets/js/jquery.dataTables.min.js"></script>
    <!-- <script src="{{ env('APP_ASSET_URL') }}dataTables.bootstrap4.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script type="text/javascript">
       $(document).ready(function() {
            $('#example').DataTable();

       });
    </script>
    <!--end::Page Scripts-->
    <!--begin::Page Scripts(used by this page)-->
        <!-- <script src="{{ env('APP_ASSET_URL') }}assets/js/pages/crud/ktdatatable/base/html-table.js?v=7.0.6"></script> -->
    <!--end::Page Scripts-->
    
</body>
<!--end::Body-->

</html>