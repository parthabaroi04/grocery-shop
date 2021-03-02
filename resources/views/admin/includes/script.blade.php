<!-- Bootstrap core JavaScript-->
<script src="{{asset('/')}}/admin/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('/')}}/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('/')}}/admin/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="{{asset('/')}}/admin/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('/')}}/admin/js/demo/chart-area-demo.js"></script>
<script src="{{asset('/')}}/admin/js/demo/chart-pie-demo.js"></script>

<!-- Page level plugins -->
<script src="{{asset('/')}}/admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('/')}}/admin/js/demo/datatables-demo.js"></script>

<!-- Delete Form custom scripts Start -->
<script>
    $('.delete-btn').click(function (){
        event.preventDefault();
        var deleteId = $(this).attr('id');
        var cheek      = confirm('Are You Sure To Delete This !!');
        if (cheek){
            document.getElementById('deleteForm'+deleteId).submit();
        }
    });
</script>
<!-- Delete Form custom scripts End -->

<!--Image Show Before Upload Start -->
<script>
    $(document).ready(function(){
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        if (fileName){
        $('#fileLabel​').html(fileName);
    }
    });
    });

    function showImage(data, imgId){
        if(data.files && data.files[0]){
        var obj = new FileReader();

    obj.onload = function(d){
        var image = document.getElementById(imgId);
        image.src = d.target.result;
    }
    obj.readAsDataURL(data.files[0]);
    }
    }
</script>
<!-- Image Show Before Upload End -->
