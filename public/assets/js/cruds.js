// $('#form_save').submit(function(e){
//   e.preventDefault(); // avoid to execute the actual submit of the form.
//   var form = new FormData(document.getElementById("form_save"));;
//   var forms = $(this);
//   var url = forms.attr('action');
//   var type = forms.attr('method');
//   var argument = forms.attr('argument');

//   if (argument == 'edit') {
//     form.append('_method', 'PATCH');
//   }else{
//     form.append('_method', 'POST');
//   }

//   $.ajax({
//     type:type,
//     data:form,
//     url:url,
//     success: function(data) {
//       if(data.err==''){
//         Swal.fire({
//           icon: 'success',
//           title: 'Good Job!',
//           text: data.cnt,
//         });
//       }else{
//         Swal.fire({
//           icon: 'error',
//           title: 'Oops...',
//           text: data.err,
//         });
//       }
//     }
//   });
// });

function save(url, type, argument) {
  var data = $("#form_save").serialize();
  var form_data = new FormData(document.getElementById("form_save"));
  if (argument == 'edit') {
    form_data.append('_method', 'PATCH');
  }else{
    form_data.append('_method', 'POST');
  }

  $.ajax({
    type:type,
    data:form_data,
    url:url,
    dataType:'JSON',
    contentType: false,
    cache: false,
    processData: false,
    success: function(data) {
      if(data.err==''){
        Swal.fire({
          icon: 'success',
          title: 'Good Job!',
          text: data.cnt,
        });
        if (data.url != '') {
          main(data.url, data.typ, data.tab);
          $('#myModal').modal('hide');
        }else{

        }
      }else{
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: data.err,
        });
      }
    }
  });
}

function destroy(url, type, checkbox_name) {
  var checkbox = [];
  $.each($("input[name='"+checkbox_name+"']:checked"), function() {
    checkbox.push($(this).val());
  });
  var dataCheck = checkbox.join(",");
  var length    = $("input[name='"+checkbox_name+"']:checked").length;

  if (length == 0) {
    Swal.fire({
      icon: 'error',
      title: 'Select one data!',
      // text: data.cnt,
    });
  }else{
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success mr-2 ml-2',
        cancelButton: 'btn btn-danger mr-2 ml-2'
      },
      buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type:type,
          url:url+'/'+dataCheck,
          success: function(data) {
            Swal.fire({
              icon: 'success',
              title: 'Good Job!',
              text: data.cnt,
            });
            if (data.url != '') {
              main(data.url, data.typ, data.tab);
            }else{

            }
          }
        });
      } else if (
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Cancelled',
          'Your data is safe :)',
          'error'
        )
      }
    })
  }
}

function main(url, type, idTab) {
  $.ajax({
    type:type,
    url:url,
    success: function(data) {
      $('#content').html(data);
      if (idTab != '') {
        $('#'+idTab).trigger('click');
      }else{

      }
    }
  });
}

function add(url, type) {
  $.ajax({
    type:type,
    url:url,
    success: function(data) {
      $('#content').html(data);
    }
  });
}

function edit(url, type) {
  var checkbox = [];
  $.each($("input[name='checkbox']:checked"), function() {
    checkbox.push($(this).val());
  });
  var dataCheck = checkbox.join(",");
  var length    = $("input[name='checkbox']:checked").length;

  if (length > 1 || length == 0) {
    Swal.fire({
      icon: 'error',
      title: 'Select one data!',
      // text: data.cnt,
    });
  }else{
    $.ajax({
      type:type,
      url:url+'/'+dataCheck+'/edit',
      success: function(data) {
        $('#content').html(data);
      }
    });
  }
}

function search(url, type, divId) {
  var form_data = $("#form_search").serialize()+'&divId='+divId;

  $.ajax({
    type:type,
    data:form_data,
    url:url,
    success: function(data) {
      $('#'+divId).html(data);
    }
  });
}