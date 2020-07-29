<!-- Jquery Core Js -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{ asset('assets/bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>

<script src="{{ asset('assets/js/cruds.js') }}"></script>

{{-- <script src="{{ asset('assets/js/pages/forms/advanced-form-elements.js') }}"></script> --}}
<script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.js') }}"></script> <!-- Jquery Validation Plugin Css -->
<script src="{{ asset('assets/plugins/nestable/jquery.nestable.js') }}"></script> <!-- Jquery Nestable -->
<script src="{{ asset('assets/plugins/dropify/js/dropify.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script> <!-- Input Mask Plugin Js -->
<script src="{{ asset('assets/plugins/momentjs/moment.js') }}"></script> <!-- Moment Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

<script src="{{ asset('assets/js/pages/index.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/form-validation.js') }}"></script>
<script src="{{ asset('assets/js/pages/ui/sortable-nestable.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/dropify.js')}}"></script>
<script src="{{ asset('assets/js/pages/forms/basic-form-elements.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  //Masked Input =========
  var $demoMaskedInput = $('.masked-input');
  //Phone Number
  $demoMaskedInput.find('.phone-number').inputmask('+99 (99) 999-999-999', { placeholder: '+__ (___) ___-__-___' });
  //Mobile Phone Number
  $demoMaskedInput.find('.mobile-phone-number').inputmask('+99 (99) 999-999-999', { placeholder: '+__ (___) ___-__-___' });
  //Dollar Money
  $demoMaskedInput.find('.money-dollar').inputmask('Rp. 99.999.999.999', { placeholder: 'Rp. __.___.___.___' });

	$( document ).ready(function() {
    var element = document.getElementById("body");
    element.classList.add("ls-toggle-menu");
    // element.classList.add("right_icon_toggle");
    //
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
      localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
      $('#myTab a[href="' + activeTab + '"]').tab('show');
    }
  });

  $('#select-all').click(function(event) {
    if(this.checked) {
      // Iterate each checkbox
      $(':checkbox').each(function() {
        this.checked = true;
      });
    } else {
      $(':checkbox').each(function() {
        this.checked = false;
      });
    }
  });

  function selectAll(argument, checkbox_name) {
    if($('#'+argument).is(':checked')){
      // $(':'+checkbox_name).each(function() {
      $("input[name='"+checkbox_name+"']").each(function() {
        this.checked = true;
      });
    }else{
      $("input[name='"+checkbox_name+"']").each(function() {
        this.checked = false;
      });
    }
  }

  function addModal(url) {
    var dataURL = url;
    $('.modal-content').load(dataURL,function(){
      $('#myModal').modal({show:true});
    });
  }

  function editModal(url, checkbox_name) {
    var checkbox = [];
    $.each($("input[name='"+checkbox_name+"']:checked"), function() {
      checkbox.push($(this).val());
    });
    var dataCheck = checkbox.join(",");
    var length    = $("input[name='"+checkbox_name+"']:checked").length;

    if (length > 1 || length == 0) {
      Swal.fire({
        icon: 'error',
        title: 'Select one data!',
        // text: data.cnt,
      });
    }else{
      var dataURL = url+'/'+dataCheck+'/edit';
      $('.modal-content').load(dataURL,function(){
        $('#myModal').modal({show:true});
      });
    }
  }

</script>